<?php
/**
 * Urban Plate — site configuration.
 * Replace the placeholder business details below with your real ones
 * before publishing or running ads.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start([
        'cookie_httponly' => true,
        'cookie_samesite' => 'Lax',
        'cookie_secure'   => !empty($_SERVER['HTTPS']),
    ]);
}

const SITE = [
    'name'        => 'Urban Plate',
    'tagline'     => 'Seasonal Kitchen & Dining Room',
    'description' => 'Urban Plate is a seasonal neighbourhood kitchen serving chef-led plates built on local produce. Explore the menu, nutrition information, our chef and book a table.',
    'address'     => ['123 Market Street', 'Your City, 00000'],
    'phone'       => '+1 (000) 000-0000',
    'phone_link'  => '+10000000000',
    'email'       => 'hello@urbanplate.example',
    'currency'    => '$',
    'legal_updated' => 'November 2026',
];

/** Where reservation requests are emailed. Leave empty to only save them to storage/. */
const RESERVATION_EMAIL = 'hello@urbanplate.example';

/** Reservation requests are also appended to this CSV (folder is blocked from the web by .htaccess). */
const RESERVATION_LOG = __DIR__ . '/storage/reservations.csv';

/** HTML-escape helper. */
function e(?string $v): string
{
    return htmlspecialchars((string) $v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Unsplash image URL helper. */
function img(string $id, int $w = 1000): string
{
    return 'https://images.unsplash.com/' . $id . '?w=' . $w . '&q=80';
}

/** CSRF token for forms. */
function csrf_token(): string
{
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf'];
}
