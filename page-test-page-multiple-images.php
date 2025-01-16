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
        'materiaal' => 'glas', 'metaal',
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
    'piaqo-shade' => array(
        'name' => 'Piaqo Shade',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Piaqo-Shade-570x720-4_enhanced.png',
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
    'o-light-preston' => array(
        'name' => 'O-Light Preston',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-1200-SP0104113-1-Sqaured-1.jpg',
        'type' => 'ringlamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'o-light' => array(
        'name' => 'O-Light(s),
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
    'sp2132001bb' => array(
        'name' => 'Magnatic Rail 27x30mm - SP2132001BB',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Magnatic-Rail-27x30mm-SP2132001BB-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp2142012abb' => array(
        'name' => 'Koppel Hoekstuk - SP2142012ABB',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Koppel-Hoekstuk-SP2142012ABB-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp2142100eabw' => array(
        'name' => 'LED Hoek Tracklight - SP2142100EABW',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/LED-Hoek-Tracklight-SP2142100EABW-1-Sqaured-1.jpg',
        'type' => 'trackrail',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp2165524tbbsw' => array(
        'name' => 'Molos LED - SP2165524TBBSW',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Molos-LED-SP2165524TBBSW-1-Sqaured-1.jpg',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'sp2165524tww' => array(
        'name' => 'Molos LED - SP2165524TWW',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Molos-LED-SP2165524TWW-1-Sqaured-1.jpg',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'sp2165524tbw' => array(
        'name' => 'Molos LED - SP2165524TBW',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Molos-LED-SP2165524TBW-1-Sqaured-1.jpg',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp2165105ntbbs' => array(
        'name' => 'Molos GU10 - SP2165105NTBBS',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Molos-LED-SP2165524TBW-1-Sqaured-1.jpg',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'sp2165105ntbbs2' => array(
        'name' => 'Molos GU10 - SP2165105NTBBS2',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Molos-GU10-SP2165105NTBBS2-1-Sqaured-1.jpg',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'sp2165105ntbbs3' => array(
        'name' => 'Molos GU10 - SP2165105NTBBS3',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Molos-GU10-SP2165105NTBBS3-1-Sqaured-1.jpg',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp2875169-030741' => array(
        'name' => 'Dassia - SP2875169-030741',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Dassia-SP2875169-030741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'sp2875169-031741' => array(
        'name' => 'Dassia - SP2875169-031741',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Dassia-SP2875169-031741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'groen',
    ),
    'sp2875169-033741' => array(
        'name' => 'Dassia - SP2875169-033741',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Dassia-SP2875169-033741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp2875169-034741' => array(
        'name' => 'Volos - SP2875169-034741',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Volos-SP2875169-034741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'sp2875169-036741' => array(
        'name' => 'Volos - SP2875169-036741',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Volos-SP2875169-036741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'blauw',
    ),
    'sp2875169-035741' => array(
        'name' => 'Volos - SP2875169-035741',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Volos-SP2875169-035741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'groen',
    ),
    'sp2875169-037741' => array(
        'name' => 'Volos - SP2875169-037741',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Volos-SP2875169-037741-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp2875169-001775' => array(
        'name' => 'Woody Shade 420 - SP2875169-001775',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Woody-Shade-420-SP2875169-001775-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'wood',
        'kleur' => 'zwart',
    ),
    'sp2875169-002775' => array(
        'name' => 'Woody Shade 510 - SP2875169-002775',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Woody-Shade-510-SP2875169-002775-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'wood',
        'kleur' => 'wit',
    ),
    'sp2875169-003775' => array(
        'name' => 'Woody Shade 510 - SP2875169-003775',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Woody-Shade-610-SP2875169-003775-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'wood',
        'kleur' => 'silver',
    ),
    'sp0102171-hoog' => array(
        'name' => 'Suede Dots - SP0102171 Hoog',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Dots-SP0102171-Hoog-1-Sqaured-1.jpg',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'blauw',
    ),
    'sp0102171' => array(
        'name' => 'Suede Dots - SP0102171',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Dots-SP0102171-1-Sqaured-1.jpg',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'rood',
    ),
    'sp012173' => array(
        'name' => 'Suede Leave - SP012173',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Leave-SP012173-1-Sqaured-1.jpg',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'rood',
    ),
    'sp010417-3' => array(
        'name' => 'Mirando 220 - SP010417-3',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-220-SP0104175_3-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'brown',
    ),
    'sp0104174-2' => array(
        'name' => 'Mirando 160 - SP0104174-2',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-160-SP0104174_2-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'sp0104174-1' => array(
        'name' => 'Mirando 160 - SP0104174-1',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-160-SP0104174_1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp0104174-3' => array(
        'name' => 'Mirando 160 - SP0104174-3',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-160-SP0104174_3-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'brown',
    ),
    'sp0104175-2' => array(
        'name' => 'Mirando 220 - SP0104175-2',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-220-SP0104175_2-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'sp0104175-1' => array(
        'name' => 'Mirando 220 - SP0104175-1',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-220-SP0104175_1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp032252001' => array(
        'name' => 'Hookd - SP032252001',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hookd-SP032252001-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'sp032252003' => array(
        'name' => 'Electric Wheel - SP032252003',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Electric-Wheel-SP032252003-1-Sqaured-1.jpg',
        'type' => 'tafellamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'sp032252004' => array(
        'name' => 'Spool - SP032252004',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Spool-Sp032252004-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp032252006' => array(
        'name' => 'Wasslight - SP032252006',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Wasslight-SP032252006-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'groen',
    ),
    'sp032252008' => array(
        'name' => 'Bendy - SP032252008',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Bendy-SP032252008-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp30215013k-1203' => array(
        'name' => 'ZEN - SP30215013K-1203',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hanglamp-ZEN-SP30215013K-1203-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'grijs',
    ),
    'sp302148013k-1206' => array(
        'name' => 'Alpha - SP302148013K-1206',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Alpha-Hanglamp-SP302148013K-1206-1-Squared-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'blauw',
    ),
    'sp302153003k-1209' => array(
        'name' => 'Blade Y - SP302153003K-1209',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hanglamp-Blade-Y-SP302153003K-1209-1-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'blauw',
    ),
    'sp302151003k-1213' => array(
        'name' => 'Zen Oval - SP302151003K-1213',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/40007442045-Sqaured-1.jpg',
        'type' => 'hanglamp',
        'materiaal' => 'metaal',
        'kleur' => 'goud',
    ),
    'sp2150105mbbs' => array(
        'name' => 'Chill Out Sqaure -SP2150105MBBS',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Chill-Out-Sqaure-SP2150105MBBS.png',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp2150105mwbs' => array(
        'name' => 'Chill Out Sqaure - SP2150105MWBS',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Chill-Out-Sqaure-SP2150105MWBS.png',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'so2110105trw' => array(
        'name' => 'Trimmess Chill Out - SO2110105TRW',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Trimmess-Chill-Out-So2110105TRW.png',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'wit',
    ),
    'so2110105trb' => array(
        'name' => 'Trimmess Chill Out - SO2110105TRB',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Trimmess-Chill-Out-So2110105TRB.png',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => 'zwart',
    ),
    'sp517bs03765d02' => array(
        'name' => 'Piro Zwart - SP517BS03765D02',
        'image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Piro-Zwart.png',
        'type' => 'spotlight',
        'materiaal' => 'metaal',
        'kleur' => ['zwart', 'wit'],
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
<div style="display: flex; flex-direction: column; gap: 30px;">
    <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
        <?php 
        $counter = 0;
        foreach ($filtered_products as $product_id => $product): 
            if ($counter === 4) {
                echo '</div><div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">';
                $counter = 0;
            }
        ?>
            <div style="text-align: center; display: inline-block;">
                <a href="https://www.spinlight.nl/test-product-display/?product=<?php echo $product_id; ?>">
                    <img src="<?php echo $product['image']; ?>" 
                         alt="<?php echo $product['name']; ?>" 
                         style="width: 275px; height: 275px;">
                </a>
                <div style="color: #BE924A; margin-top: 10px; font-size: 18px; text-transform: capitalize;">
                    <?php echo $product['name']; ?>
                </div>
            </div>
        <?php 
            $counter++;
        endforeach; 
        ?>
    </div>
</div>
    
<?php get_footer(); ?>