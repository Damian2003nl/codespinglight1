<?php
/*
Template Name: Product Gallery Page
*/

get_header();

// Define products array
$products = array(
    'aruba' => array(
        'name' => 'Aruba',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Aruba-SP0101119-20_2_0000.png',
        'type' => 'vloerlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'croix' => array(
        'name' => 'Croix',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Croix-2_enhanced.png',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'brons',
    ),
    'cross' => array(
        'name' => 'Cross',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Cross-570x720-3_enhanced.png',
        'type' => 'vloerlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'piaqo-shade' => array(
        'name' => 'Paiqo Shade',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Piaqo-Shade-570x720-3_enhanced.png',
        'type' => 'vloerlamp',
        'materiaal' => 'metaal',
        'kleur' => 'brons',
    ),
    'straight' => array(
        'name' => 'Straight',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Straight-3_enhanced.png',
        'type' => 'vloerlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'piaqo-wall' => array(
        'name' => 'Piaqo Wall',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Piaqo-Wall-570x720-1_enhanced.png',
        'type' => 'wandlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'juliet-wandlamp' => array(
        'name' => 'Juliet Wandlamp',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Juliet-Wandlamp_enhanced.png',
        'type' => 'wandlamp',
        'materiaal' => ['glas', 'metaal'],
        'kleur' => ['zwart', 'wit'],
    ),
    'gala-wandlamp' => array(
        'name' => 'Gala Wandlamp',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Gala-Wandlamp_enhanced.png',
        'type' => 'wandlamp',
        'materiaal' => 'metaal',
        'kleur' => ['zwart', 'goud'],
    ),
    'box' => array(
        'name' => 'Box',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Box-Vloerlamp-2_enhanced.png',
        'type' => 'vloerlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'polo' => array(
        'name' => 'Polo',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Polo-2_enhanced.png',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'riagani-table' => array(
        'name' => 'Riagani Table',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Riagani-Table-2_enhanced.png',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sqaure-wood' => array(
        'name' => 'Sqaure Wood',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Sqaure-Wood_enhanced.png',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'piaqo-table' => array(
        'name' => 'Piaqo Table',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Piaqo-Table-2_enhanced.png',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'dual' => array(
        'name' => 'Dual',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Dual-SP2110105A1B-1-Sqaured-1.jpg',
        'type' => 'plafondlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'chill-out-sqaure' => array(
        'name' => 'Chill Out Sqaure',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Chill-Out-Sqaure-SP2150105MWBS-1-Squared-1.jpg',
        'type' => 'plafondlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'trimess-chill-out' => array(
        'name' => 'Trimess Chill Out',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Trimess-Chill-out-SP2110105TRB-1-Sqaured-1.jpg',
        'type' => 'plafondlamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'coko' => array(
        'name' => 'Coko',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Coko-SP2864174-020776-1-Sqaured-1.jpg',
        'type' => 'plafondlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'piro-wit' => array(
        'name' => 'Piro Wit',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Piro-Wit-SP51912S03MW8D02-1-Sqaured-1.jpg',
        'type' => 'plafondlamp',
        'materiaal' => 'metaal',
        'kleur' => ['zwart', 'wit'],
    ),
    'piro-zwart' => array(
        'name' => 'Piro Zwart',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Piro-Zwart.png',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => ['zwart', 'wit'],
    ),
    'o-light-preston' => array(
        'name' => 'O-Light Preston',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-1200-SP0104113-1-Sqaured-1.jpg',
        'type' => 'ringlamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'o-light' => array(
        'name' => 'O-Light(s)',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-SP0104171-1-Sqaured-1.jpg',
        'type' => 'ringlamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'o-light-tarquin' => array(
        'name' => 'O-Light Tarquin',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-Tarquin-SP239345603-1-Sqaured-1.jpg',
        'type' => 'ringlamp',
        'materiaal' => 'metaal',
        'kleur' => 'silver',
    ),
    'big-floorshades' => array(
        'name' => 'Big Floorshades',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Big-Floorshade2-1-Sqaured-1.jpg',
        'type' => 'ringlamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'm55-drumm' => array(
        'name' => 'M55 Drumm',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M55-Drumm-1-Sqaured-1.jpg',
        'type' => 'lampenkap',
        'materiaal' => 'stof',
        'kleur' => 'goud',
    ),
    'm67-high-drumm' => array(
        'name' => 'M67 High Drumm',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M67-High-Drumm-1-Sqaured-1.jpg',
        'type' => 'lampenkap',
        'materiaal' => 'stof',
        'kleur' => 'goud',
    ),
    'm10-conisch' => array(
        'name' => 'M10 Conisch',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M10-Conisch-1-Sqaured-1.jpg',
        'type' => 'lampenkap',
        'materiaal' => 'stof',
        'kleur' => 'goud',
    ),
    'm62-half-conisch' => array(
        'name' => 'M62 Half Conisch',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M62-Half-Conisch-1-Sqaured-1.jpg',
        'type' => 'lampenkap',
        'materiaal' => 'stof',
        'kleur' => 'goud',
    ),
    'm40-ovaal' => array(
        'name' => 'M40 Ovaal',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M40-Ovaal-1-Sqaured-1.jpg',
        'type' => 'lampenkap',
        'materiaal' => 'stof',
        'kleur' => 'goud',
    ),
    'm15-q-conisch' => array(
        'name' => 'M15 Q Conisch',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M15-Q-Conisch-1-Sqaured-1.jpg',
        'type' => 'lampenkap',
        'materiaal' => 'stof',
        'kleur' => 'goud',
    ),
    'rigani-wall' => array(
        'name' => 'Rigani Wall',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Rigani-Wall2-1-Sqaured-1.jpg',
        'type' => 'wandlamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'atomo' => array(
        'name' => 'Atomo',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Atomo2-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'navi' => array(
        'name' => 'Navi',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Navi-SP239186952-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'onrid' => array(
        'name' => 'Onrid',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Onrid-SP239030654-1-Sqaured-1.jpg',
        'type' => 'plafondlamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'nevo' => array(
        'name' => 'Nevo',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Nevo-SP2392481_61-1-Sqaured-1.jpg',
        'type' => 'plafondlamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'trackrail' => array(
        'name' => 'Trackrail',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3-Fase-Trackrail-Wit-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'voeding-eindstuk' => array(
        'name' => 'Voeding Eindstuk',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Voeding-Eindstuk-SP2141004ABL-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'hoek-connector' => array(
        'name' => 'Hoek Connector',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hoek-Connector-SP2141012ABL-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'kruis-connector' => array(
        'name' => 'Kruis Connector',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Kruis-Connector-SP2141018AB-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'magnatic-tracklight' => array(
        'name' => 'Magnatic Tracklight',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Magnatic-Tracklight-SP2142102BBW-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'connector' => array(
        'name' => 'Connector',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Connector-SP2141010AB-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'magnatic-rail-27x30mm' => array(
        'name' => 'Magnatic Rail 27x30mm',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Magnatic-Rail-27x30mm-SP2132001BB-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'koppel-hoekstuk' => array(
        'name' => 'Koppel Hoekstuk',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Koppel-Hoekstuk-SP2142012ABB-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'led-hoek-tracklight' => array(
        'name' => 'LED Hoek Tracklight',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/LED-Hoek-Tracklight-SP2142100EABW-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'molos-led' => array(
        'name' => 'Molos LED',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Molos-LED-SP2165524TBBSW-1-Sqaured-1.jpg',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'molos-gu10' => array(
        'name' => 'Molos GU10',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Molos-LED-SP2165524TBW-1-Sqaured-1.jpg',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'dassia' => array(
        'name' => 'Dassia',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Dassia-SP2875169-030741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'volos' => array(
        'name' => 'Volos',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Volos-SP2875169-034741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'woody-shades' => array(
        'name' => 'Woody Shades',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Woody-Shade-420-SP2875169-001775-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'wood',
        'kleur' => 'zwart',
    ),
    'suede-dots-hoog' => array(
        'name' => 'Suede Dots Hoog',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Dots-SP0102171-Hoog-1-Sqaured-1.jpg',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'blauw',
    ),
    'suede-dots' => array(
        'name' => 'Suede Dots',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Dots-SP0102171-1-Sqaured-1.jpg',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'rood',
    ),
    'suede-leave' => array(
        'name' => 'Suede Leave',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Leave-SP012173-1-Sqaured-1.jpg',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'rood',
    ),
    'mirando-220' => array(
        'name' => 'Mirando 220',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-220-SP0104175_3-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'brown',
    ),
    'mirando-160' => array(
        'name' => 'Mirando 160',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-160-SP0104174_2-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'hookd' => array(
        'name' => 'Hookd',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hookd-SP032252001-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'electric-wheel' => array(
        'name' => 'Electric Wheel',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Electric-Wheel-SP032252003-1-Sqaured-1.jpg',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'spool' => array(
        'name' => 'Spool',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Spool-Sp032252004-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'wasslight' => array(
        'name' => 'Wasslight',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Wasslight-SP032252006-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'groen',
    ),
    'bendy' => array(
        'name' => 'Bendy',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Bendy-SP032252008-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'zen' => array(
        'name' => 'Zen',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hanglamp-ZEN-SP30215013K-1203-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'grijs',
    ),
    'alpha' => array(
        'name' => 'Alpha',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Alpha-Hanglamp-SP302148013K-1206-1-Squared-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'blauw',
    ),
    'blade-y' => array(
        'name' => 'Blade Y',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hanglamp-Blade-Y-SP302153003K-1209-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'blauw',
    ),
    'zen-oval' => array(
        'name' => 'Zen Oval',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/40007442045-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    )
);

// Filter logic
$selected_type = isset($_GET['type']) ? $_GET['type'] : '';
$selected_materiaal = isset($_GET['materiaal']) ? $_GET['materiaal'] : '';
$selected_kleur = isset($_GET['kleur']) ? $_GET['kleur'] : '';

$filtered_products = array_filter($products, function($product) use ($selected_type, $selected_materiaal, $selected_kleur) {
    $type_match = empty($selected_type) || $product['type'] === $selected_type;
    
    $materiaal_match = empty($selected_materiaal) || (
        is_array($product['materiaal']) ? 
        in_array($selected_materiaal, $product['materiaal']) : 
        $product['materiaal'] === $selected_materiaal
    );

    $kleur_match = empty($selected_kleur) || (
        is_array($product['kleur']) ? 
        in_array($selected_kleur, $product['kleur']) : 
        $product['kleur'] === $selected_kleur
    );

    return $type_match && $materiaal_match && $kleur_match;
});
?>

<div style="background: #0A0E11; padding: 20px; margin-bottom: 40px;">
    <form method="GET" action="">
        <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
    <!-- Type Filter -->
    <div style="min-width: 150px; display: flex; align-items: flex-end; gap: 10px;">
        <div>
            <label style="color: #BE924A; display: block; margin-bottom: 5px;">Type</label>
            <select name="type" style="width: 100%; padding: 8px; background: #142832; color: #BE924A; border: 1px solid #BE924A; border-radius: 5px;">
                <option value="">Alle types</option>
                <option value="vloerlamp" <?php echo $selected_type === 'vloerlamp' ? 'selected' : ''; ?>>Vloerlamp</option>
                <option value="hanglamp" <?php echo $selected_type === 'hanglamp' ? 'selected' : ''; ?>>Hanglamp</option>
                <option value="wandlamp" <?php echo $selected_type === 'wandlamp' ? 'selected' : ''; ?>>Wandlamp</option>
            </select>
        </div>
        <!-- Materiaal Filter -->
<div style="min-width: 150px;">
    <label style="color: #BE924A; display: block; margin-bottom: 5px;">Materiaal</label>
    <select name="materiaal" style="width: 100%; padding: 8px; background: #142832; color: #BE924A; border: 1px solid #BE924A; border-radius: 5px;">
        <option value="">Alle materialen</option>
        <option value="metaal" <?php echo $selected_materiaal === 'metaal' ? 'selected' : ''; ?>>Metaal</option>
        <option value="glas" <?php echo $selected_materiaal === 'glas' ? 'selected' : ''; ?>>Glas</option>
        <option value="hout" <?php echo $selected_materiaal === 'hout' ? 'selected' : ''; ?>>Hout</option>
    </select>
</div>

<!-- Kleur Filter -->
<div style="min-width: 150px;">
    <label style="color: #BE924A; display: block; margin-bottom: 5px;">Kleur</label>
    <select name="kleur" style="width: 100%; padding: 8px; background: #142832; color: #BE924A; border: 1px solid #BE924A; border-radius: 5px;">
        <option value="">Alle kleuren</option>
        <option value="zwart" <?php echo $selected_kleur === 'zwart' ? 'selected' : ''; ?>>Zwart</option>
        <option value="wit" <?php echo $selected_kleur === 'wit' ? 'selected' : ''; ?>>Wit</option>
        <option value="goud" <?php echo $selected_kleur === 'goud' ? 'selected' : ''; ?>>Goud</option>
    </select>
</div>
        <button type="submit" style="background: #BE924A; color: white; padding: 8px 20px; border: none; border-radius: 5px; height: fit-content;">Filter</button>
    </div>
</div>
    </form>
</div>

<!-- Display filtered products -->
<div style="max-width: 1200px; margin: 0 auto;">
    <div style="display: flex; flex-wrap: wrap; justify-content: flex-start;">
        <?php foreach ($filtered_products as $product_id => $product): ?>
            <div style="width: calc(25% - 30px); margin: 15px; text-align: center;">
                <a href="<?php echo esc_url(home_url("/product-detail/?id={$product_id}")); ?>">
                    <img src="<?php echo esc_url($product['image']); ?>" 
                         alt="<?php echo esc_attr($product['name']); ?>" 
                         style="width: 275px; height: 275px; object-fit: cover;">
                </a>
                <div style="color: #BE924A; margin-top: 10px; font-size: 18px; text-transform: capitalize;">
                    <?php echo $product['name']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    
<?php get_footer(); ?>