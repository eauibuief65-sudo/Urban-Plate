<?php
/**
 * Handles the reservation form (POST → validate → save/email → redirect).
 * Uses the Post/Redirect/Get pattern so refreshing the page never re-submits.
 */

$res_errors = [];
$res_old    = ['name' => '', 'email' => '', 'date' => '', 'time' => '', 'guests' => '2', 'notes' => ''];
$res_flash  = $_SESSION['res_flash'] ?? null;
unset($_SESSION['res_flash']);

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && ($_POST['form'] ?? '') === 'reservation') {

    foreach ($res_old as $k => $_) {
        $res_old[$k] = trim((string) ($_POST[$k] ?? ''));
    }

    // Security checks
    if (!hash_equals($_SESSION['csrf'] ?? '', (string) ($_POST['csrf'] ?? ''))) {
        $res_errors['form'] = 'Your session expired. Please try again.';
    }
    if (!empty($_POST['website'])) {               // honeypot — real visitors never fill this
        $res_errors['form'] = 'Submission blocked.';
    }
    if (isset($_SESSION['res_last']) && time() - $_SESSION['res_last'] < 30) {
        $res_errors['form'] = 'Please wait a moment before sending another request.';
    }

    // Field validation
    if (mb_strlen($res_old['name']) < 2 || mb_strlen($res_old['name']) > 80) {
        $res_errors['name'] = 'Please enter your full name.';
    }
    if (!filter_var($res_old['email'], FILTER_VALIDATE_EMAIL)) {
        $res_errors['email'] = 'Please enter a valid email address.';
    }
    $d = DateTime::createFromFormat('Y-m-d', $res_old['date']);
    $today = new DateTime('today');
    if (!$d || $d->format('Y-m-d') !== $res_old['date'] || $d < $today) {
        $res_errors['date'] = 'Please choose today or a future date.';
    } elseif ($d->format('N') === '1') {
        $res_errors['date'] = "We're closed on Mondays — please pick another day.";
    }
    if (!in_array($res_old['time'], $time_slots, true)) {
        $res_errors['time'] = 'Please choose a time.';
    }
    if (!in_array($res_old['guests'], $guest_options, true)) {
        $res_errors['guests'] = 'Please choose the number of guests.';
    }
    if (mb_strlen($res_old['notes']) > 500) {
        $res_errors['notes'] = 'Notes must be under 500 characters.';
    }
    if (empty($_POST['consent'])) {
        $res_errors['consent'] = 'Please accept the privacy notice to continue.';
    }

    if (!$res_errors) {
        // 1) Save to CSV
        $dir = dirname(RESERVATION_LOG);
        if (!is_dir($dir)) {
            @mkdir($dir, 0750, true);
        }
        $saved = false;
        if ($fh = @fopen(RESERVATION_LOG, 'a')) {
            if (flock($fh, LOCK_EX)) {
                if (filesize(RESERVATION_LOG) === 0) {
                    fputcsv($fh, ['submitted_at', 'name', 'email', 'date', 'time', 'guests', 'notes']);
                }
                // Prefix values that could be read as spreadsheet formulas
                $row = array_map(fn($v) => preg_match('/^[=+\-@]/', $v) ? "'" . $v : $v, [
                    date('c'), $res_old['name'], $res_old['email'], $res_old['date'],
                    $res_old['time'], $res_old['guests'], str_replace(["\r", "\n"], ' ', $res_old['notes']),
                ]);
                $saved = fputcsv($fh, $row) !== false;
                flock($fh, LOCK_UN);
            }
            fclose($fh);
        }

        // 2) Email the restaurant (requires mail() to be configured on your server)
        $mailed = false;
        if (RESERVATION_EMAIL !== '' && function_exists('mail')) {
            $clean = fn($v) => str_replace(["\r", "\n"], ' ', $v);
            $body = "New reservation request\n\n"
                . "Name:   {$res_old['name']}\nEmail:  {$res_old['email']}\n"
                . "Date:   {$res_old['date']}\nTime:   {$res_old['time']}\n"
                . "Guests: {$res_old['guests']}\nNotes:  {$res_old['notes']}\n";
            $headers = "From: " . SITE['name'] . " <" . RESERVATION_EMAIL . ">\r\n"
                . "Reply-To: " . $clean($res_old['email']) . "\r\n"
                . "Content-Type: text/plain; charset=UTF-8";
            $mailed = @mail(RESERVATION_EMAIL, 'Reservation request — ' . $clean($res_old['name']), $body, $headers);
        }

        if ($saved || $mailed) {
            $_SESSION['res_last'] = time();
            $first = explode(' ', $res_old['name'])[0];
            $_SESSION['res_flash'] = ['ok' => true, 'msg' => sprintf(
                "Thank you, %s! Your request for %s on %s at %s has been received. We'll email you to confirm.",
                $first, $res_old['guests'], $d->format('D j M Y'), $res_old['time']
            )];
        } else {
            $_SESSION['res_flash'] = ['ok' => false, 'msg' => 'Sorry, we couldn\'t send your request right now. Please call or email us instead.'];
        }
        unset($_SESSION['csrf']);
        header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?') . '#reserve', true, 303);
        exit;
    }
}
