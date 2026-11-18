<?php
/**
 * Site content. Edit these arrays to change dishes, nutrition, FAQ, journal etc.
 * Prices and nutrition values are examples — replace with your own.
 */

$nav = [
    'menu'      => 'Menu',
    'how'       => 'How',
    'nutrition' => 'Nutrition',
    'chef'      => 'Chef',
    'journal'   => 'Journal',
    'faq'       => 'FAQ',
];

$marquee = ['Wood-fired vegetables', 'House-made pasta', 'Market fish', 'Natural sourdough', 'Seasonal desserts'];

$dishes = [
    ['name' => 'Charred salmon, citrus & herb oil', 'cat' => 'Market fish · Main', 'price' => 28, 'tag' => "Chef's pick",
     'img' => 'photo-1467003909585-2f8a72700288', 'alt' => 'Seared salmon with herbs and lemon',
     'desc' => 'Line-caught salmon, blood orange, fennel shavings, green herb oil, toasted seeds.', 'chips' => ['Gluten-free', 'High protein']],
    ['name' => 'Market grain bowl', 'cat' => 'Bowls · Lunch', 'price' => 17, 'tag' => 'Plant-based',
     'img' => 'photo-1512621776951-a57141f2eefd', 'alt' => 'Vegetable and grain bowl',
     'desc' => 'Farro, roasted squash, pickled onion, avocado, tahini–lemon dressing.', 'chips' => ['Vegan', 'Dairy-free']],
    ['name' => 'Hand-cut tagliatelle', 'cat' => 'Pasta · Main', 'price' => 22, 'tag' => 'House-made',
     'img' => 'photo-1473093295043-cdd812d0e601', 'alt' => 'Fresh pasta in tomato sauce',
     'desc' => 'Slow tomato sugo, basil, aged parmesan, cracked pepper.', 'chips' => ['Vegetarian']],
    ['name' => 'Fire-grilled skewers', 'cat' => 'Grill · Sharing', 'price' => 19, 'tag' => 'Wood-fired',
     'img' => 'photo-1555939594-58d7cb561ad1', 'alt' => 'Grilled skewers over open flame',
     'desc' => 'Free-range chicken thigh, smoked paprika, garlic yoghurt, charred lemon.', 'chips' => ['Gluten-free']],
    ['name' => 'Garden plate', 'cat' => 'Starters', 'price' => 14, 'tag' => 'Light',
     'img' => 'photo-1540189549336-e6e99c3679fe', 'alt' => 'Fresh seasonal salad plate',
     'desc' => 'Heirloom leaves, shaved radish, soft egg, mustard vinaigrette.', 'chips' => ['Vegetarian', 'Gluten-free']],
];

$steps = [
    ['title' => 'Source', 'text' => 'Each week we buy from nearby growers, fishers and bakers — whatever is at its best.',
     'icon' => '<path d="M3 7h18l-2 12H5L3 7Z"/><path d="M8 7a4 4 0 0 1 8 0"/>'],
    ['title' => 'Write', 'text' => 'The chef builds a short menu around the haul. Fewer dishes, done properly.',
     'icon' => '<path d="M4 20 20 4"/><path d="M14 4h6v6"/><circle cx="7" cy="17" r="3"/>'],
    ['title' => 'Cook', 'text' => 'Wood-fire, slow braises and fresh pasta — everything made in our open kitchen.',
     'icon' => '<path d="M12 3c2 4-2 5 0 9 1-2 3-2 3-2 2 3 1 8-3 9-4 0-6-3-5-6 0-3 3-5 5-10Z"/>'],
    ['title' => 'Share', 'text' => "Plates arrive when they're ready, built for the table to share and talk over.",
     'icon' => '<circle cx="12" cy="13" r="7"/><path d="M5 13h14M12 3v3"/>'],
];

/* Nutrition: [label, value, % of 2,000 kcal daily reference]. Allergens: 1 = contains. */
$nutrition = [
    'salmon' => ['name' => 'Charred salmon', 'sub' => 'Line-caught salmon, blood orange, fennel, herb oil.', 'kcal' => 540,
        'img' => 'photo-1467003909585-2f8a72700288',
        'facts' => [['Protein', '38 g', 76], ['Carbohydrates', '14 g', 18], ['Fat', '36 g', 52], ['Fibre', '4 g', 16], ['Sodium', '480 mg', 21]],
        'allergens' => ['Fish' => 1, 'Gluten' => 0, 'Dairy' => 0, 'Nuts' => 0, 'Sesame' => 1, 'Eggs' => 0]],
    'bowl' => ['name' => 'Market grain bowl', 'sub' => 'Farro, roasted squash, avocado, tahini–lemon.', 'kcal' => 610,
        'img' => 'photo-1512621776951-a57141f2eefd',
        'facts' => [['Protein', '17 g', 34], ['Carbohydrates', '72 g', 26], ['Fat', '28 g', 40], ['Fibre', '14 g', 56], ['Sodium', '390 mg', 17]],
        'allergens' => ['Fish' => 0, 'Gluten' => 1, 'Dairy' => 0, 'Nuts' => 0, 'Sesame' => 1, 'Eggs' => 0]],
    'pasta' => ['name' => 'Hand-cut tagliatelle', 'sub' => 'Slow tomato sugo, basil, aged parmesan.', 'kcal' => 680,
        'img' => 'photo-1473093295043-cdd812d0e601',
        'facts' => [['Protein', '24 g', 48], ['Carbohydrates', '88 g', 32], ['Fat', '24 g', 34], ['Fibre', '6 g', 24], ['Sodium', '620 mg', 27]],
        'allergens' => ['Fish' => 0, 'Gluten' => 1, 'Dairy' => 1, 'Nuts' => 0, 'Sesame' => 0, 'Eggs' => 1]],
    'skewers' => ['name' => 'Fire-grilled skewers', 'sub' => 'Chicken thigh, smoked paprika, garlic yoghurt.', 'kcal' => 470,
        'img' => 'photo-1555939594-58d7cb561ad1',
        'facts' => [['Protein', '42 g', 84], ['Carbohydrates', '9 g', 3], ['Fat', '29 g', 41], ['Fibre', '2 g', 8], ['Sodium', '560 mg', 24]],
        'allergens' => ['Fish' => 0, 'Gluten' => 0, 'Dairy' => 1, 'Nuts' => 0, 'Sesame' => 0, 'Eggs' => 0]],
];

$chef = [
    'name'  => 'Chef Arin Vale',
    'role'  => 'Head Chef & co-founder',
    'quote' => "I don't decide the menu. The season does — I just listen carefully.",
    'bio'   => [
        'Our head chef trained in busy city kitchens before opening Urban Plate with one idea: cook less, cook better. The menu is built around vegetables first, with fish and meat as supporting characters.',
        'Expect bright acidity, a lot of fire, and plates that change week to week as the markets do.',
    ],
    'skills' => ['Vegetable-forward cooking', 'Whole-animal butchery', 'Fresh pasta daily', 'Low-waste kitchen'],
];

$gallery = [
    ['photo-1414235077428-338989a2e8c0', 'Elegant restaurant table setting', 'Main dining room', 1200],
    ['photo-1490645935967-10de6ba17061', 'Overhead flat lay of several dishes', 'Sharing plates', 800],
    ['photo-1565299624946-b28f40a0ae38', 'Wood-fired flatbread', 'Wood oven', 600],
    ['photo-1476224203421-9ac39bcb3327', 'Plated small dish', 'Small plates', 600],
    ['photo-1559339352-11d035aa65de', 'Diners at a restaurant in the evening', 'Evening service', 800],
    ['photo-1600891964092-4316c288032e', 'Sliced grilled steak', 'From the grill', 800],
    ['photo-1482049016688-2d3e1b311543', 'Weekend brunch plate', 'Weekend brunch', 800],
    ['photo-1551218808-94e220e084d2', 'Restaurant bar area', 'The bar', 800],
];

$journal = [
    ['meta' => 'Market report · 6 min read', 'title' => 'What autumn tastes like: squash, pears and the first frost',
     'excerpt' => "A walk through this month's market haul and how each ingredient finds its way onto the menu.",
     'img' => 'photo-1498837167922-ddd27525d352', 'alt' => 'Seasonal produce on a table'],
    ['meta' => 'Technique · 4 min', 'title' => 'Why we roll our pasta by hand every morning',
     'img' => 'photo-1473093295043-cdd812d0e601', 'alt' => 'Fresh pasta'],
    ['meta' => 'At home · 5 min', 'title' => 'Five herb oils to brighten any weeknight dinner',
     'img' => 'photo-1466637574441-749b8f19452f', 'alt' => 'Chopped herbs'],
    ['meta' => 'Behind the pass · 3 min', 'title' => 'Our low-waste kitchen: small habits, big difference',
     'img' => 'photo-1556910103-1c02745aae4d', 'alt' => 'Kitchen team at work'],
];

$faqs = [
    ['Do I need a reservation?', 'We recommend booking, especially Friday and Saturday evenings. We also keep a few tables and bar seats for walk-ins each service.'],
    ['Can you cater for allergies and dietary needs?', "Yes — most dishes can be adapted for vegetarian, vegan or gluten-free diets. Please tell us about allergies when booking and remind your server on arrival. Our kitchen handles common allergens, so we can't guarantee any dish is completely free of them."],
    ['How often does the menu change?', 'A few dishes change every week depending on what our suppliers bring in, and the full menu turns over with each season.'],
    ['Do you take large group bookings?', "We seat groups of up to 12 in the main room. For larger parties or private dining, please email us and we'll put together a set menu."],
    ['What is your cancellation policy?', "Please let us know at least 24 hours in advance if your plans change. We don't take card details or charge any fee to make a reservation online."],
    ['Is the restaurant accessible?', "Our dining room is step-free with an accessible restroom. Let us know if you need anything specific and we'll arrange it."],
];

$hours = [
    ['Monday', 'Closed'],
    ['Tue – Thu', '12:00 – 22:00'],
    ['Fri – Sat', '12:00 – 23:00'],
    ['Sunday', '11:00 – 21:00'],
];

$time_slots = ['12:00', '13:00', '14:00', '18:00', '19:00', '20:00', '21:00'];
$guest_options = ['1', '2', '3', '4', '5', '6', '7+'];
