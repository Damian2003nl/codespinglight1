<?php
// At the top of your product detail template
$product_id = isset($_GET['id']) ? $_GET['id'] : '';
// Rest of your product detail code remains the same

/*
Template Name: Dynamic Product Display
*/

get_header(); 

// Debugging
echo '<pre>';
echo 'Product ID: ' . $_GET['id'];
var_dump($products);
echo '</pre>';

// Get the product ID from URL

$product_id = isset($_GET['id']) ? $_GET['id'] : '';
$product = isset($products[$product_id]) ? $products[$product_id] : null;

$products = array(
    'aruba' => array(
        'title' => 'Aruba',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Aruba-SP0101119-20_2_0000.png',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Aruba-SP0101119-20_2_0000.png',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Aruba-Vloerlamp-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Aruba-Vloerlamp-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Aruba-Vloerlamp-1024x1024-Image-4.jpg'
        ),
        'description' => 'De Aruba is meer dan alleen een lamp. Het is een elegant stuk dat sfeer en karakter toevoegt aan elke ruimte. Met zijn moderne, minimalistische ontwerp en drie stevige poten past de Aruba in bijna elk interieur, van klassiek tot industrieel. Een must-have voor wie houdt van stijlvol wonen!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Vloerlamp E27.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron E27.',
            'maat' => 'Maat: H.1570mm R=600mm.',
            'kleur_code' => 'Kleur: Zwart 20.',
            'kap' => 'Lampenkap: M55, 590x300x590mm',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Aruba-SP0101119-20.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Aruba-SP0101119-20.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Aruba-SP0101119-20.zip'
             )
    ),
    'croix' => array(
        'title' => 'Croix',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Croix-2_enhanced.png',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Croix-2_enhanced.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Your product description here...',
        'specifications' => array(
            'lamp_type' => 'Categorie: Tafellamp E27 Fitting',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.500mm B.400mm.',
            'kleur_code' => 'Kleur: Brons',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'lampenkap: 300x280x300mm',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Croix-SP0102120-10.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Croix-SP0102120-10.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Croix-SP0102120-10.zip'
        )
    ),
    'cross' => array(
        'title' => 'Cross',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Cross-Vloerlamp-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Cross-Vloerlamp-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Cross-Vloerlamp-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Cross is een stijlvolle en minimalistische vloerlamp die perfect past in elk modern interieur. Met een hoogte van 1750 mm en een slank frame van 40 x 40 mm in radius, straalt deze lamp een elegante eenvoud uit. De lampenkap, met afmetingen van 590 x 300 x 590 mm, voegt een extra vleugje verfijning toe.
De Cross is uitgevoerd in een tijdloze zwarte afwerking en wordt geleverd zonder lichtbron, geschikt voor een E27-fitting. Dit geeft je de vrijheid om een lichtbron te kiezen die perfect past bij jouw gewenste sfeer. Een prachtige keuze voor wie zoekt naar een functionele én decoratieve verlichting!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Vloerlamp E27 Fitting',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.1750mm B.40x40mm.',
            'kleur_code' => 'Kleur: Zwart 20',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: 590x300x590mm',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Cross-SP0101135-10.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Cross-SP0101135-10.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Cross-SP0101135-10.zip'
        )
    ),
    'piaqo-shade' => array(
        'title' => 'Piaqo Shade',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Shade-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Shade-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Shade-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Shade-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Shade-1024x1024-Image-4.jpg'
        ),
        'description' => 'De Piaqo Shade is een verfijnde vloerlamp die modern design combineert met een warme uitstraling. Met een hoogte van 1550 mm en een slanke basis met een radius van 180 mm, vormt deze lamp een subtiele maar stijlvolle toevoeging aan je interieur. De M55 lampenkap, met een formaat van 200 x 180 x 200 mm, geeft de lamp een unieke uitstraling en zorgt voor een sfeervolle lichtverdeling.
Uitgevoerd in een elegante bronskleur (Brons 10), straalt de Piaqo Shade luxe en klasse uit. De lamp werkt op een E27-fitting en wordt geleverd exclusief lichtbron, zodat je zelf kunt kiezen welke verlichting het beste bij je ruimte past. Een ideale keuze voor een warme, stijlvolle ambiance!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Vloerlampo E27 Fitting',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.1550mm B.180mm.',
            'kleur_code' => 'Kleur: Brons 10',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: 200x180x200mm',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Piaqo-Shade.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Piaqo-Shade.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Piaqo-Shade.zip'
        )
    ),
    'straight' => array(
        'title' => 'Straight',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Straight-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Straight-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Straight-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Straight-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Deze stijlvolle vloerlamp biedt een modern en strak design dat in elk interieur tot zijn recht komt. Met een hoogte van 1750 mm en een stevige basis met een radius van 250 mm, is de lamp zowel elegant als functioneel. De lamp is voorzien van een E27-fitting en wordt geleverd exclusief lichtbron, zodat je zelf kunt kiezen voor de perfecte lichtsterkte en sfeer.
Uitgevoerd in de tijdloze kleur Zwart 20, maar ook verkrijgbaar in meerdere kleuren, zodat je de lamp eenvoudig kunt afstemmen op jouw interieur. Een perfecte keuze voor wie op zoek is naar veelzijdige en stijlvolle verlichting!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Vloerlamp E27 Fitting',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.1750mm B.250mm.',
            'kleur_code' => 'Kleur: Zwart 20',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkamp: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Straight-Vloerlamp-SP0101150-20.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Straight-Vloerlamp-SP0101150-20.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Straight-Vloerlamp-SP0101150-20.zip'
        )
    ),
    'piaqo-wall' => array(
        'title' => 'Piaqo Wall',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Wall-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Wall-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Wall-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Piaqo Wall is een elegante wandlamp die functionaliteit combineert met een stijlvol design. Met een compacte hoogte van 250 mm en een radius van 350 mm, biedt deze lamp een subtiele maar moderne uitstraling. De M55 lampenkap, met afmetingen van 200 x 180 x 200 mm, zorgt voor een warme en sfeervolle lichtverdeling.
Uitgevoerd in Zwart 20 en beschikbaar in meerdere kleuren, past de Piaqo Wall moeiteloos in verschillende interieurstijlen. De lamp is voorzien van een E27-fitting en wordt exclusief lichtbron geleverd, waardoor je de flexibiliteit hebt om een lichtbron naar keuze te gebruiken. Een stijlvolle keuze voor verfijnde wandverlichting!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Wandlamp E27 Fitting',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.300mm R.250mm.',
            'kleur_code' => 'Kleur: Zwart 20',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: M55, 200x180x200mm',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Paiqo-Wall-SP239035973.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Paiqo-Wall-SP239035973.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Paiqo-Wall-SP239035973.zip'
        )
    ),
    'juliet-wandlamp' => array(
        'title' => 'Juliet Wandlamp',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Juliet-Wandlamp-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Juliet-Wandlamp-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Juliet-Wandlamp-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Juliet wandlamp combineert elegantie en functionaliteit in een tijdloos design. Met een hoogte van 630 mm en een slanke radius van 147 mm, biedt deze lamp een stijlvolle toevoeging aan elke wand. De lamp is uitgevoerd in een verfijnde combinatie van Metaal Zwart en Opaal Glas, wat zorgt voor een zachte, sfeervolle lichtverspreiding.
Voorzien van een E14-fitting en geleverd exclusief lichtbron, geeft de Juliet je de vrijheid om zelf een geschikte lichtbron te kiezen. Perfect voor het creëren van een gezellige ambiance in moderne of klassieke interieurs. Een verfijnde keuze voor wandverlichting!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Wandlamp E27 Fitting',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.630mm R=147mm.',
            'kleur_code' => 'Kleur: Zwart 20',
            'materiaal' => 'Materiaal: Metaal & Glass',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Juliet-Wandlamp-sp239035973.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Juliet-Wandlamp-sp239035973.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Juliet-Wandlamp-sp239035973.zip'
        )
    ),
    'gala-wandlamp' => array(
        'title' => 'Gala Wandlamp',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Gala-Wandlamp-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Gala-Wandlamp-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Gala-Wandlamp-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Gala wandlamp straalt luxe en elegantie uit, met een ontwerp dat moeiteloos stijl en functionaliteit combineert. Met een hoogte van 320 mm en een radius van 180 mm biedt deze lamp een compact maar opvallend design. Uitgerust met 2x E14-fittingen en geleverd exclusief lichtbronnen, kun je de verlichting naar wens personaliseren.
De Gala is uitgevoerd in de chique kleurcombinatie Mat Zwart & Goud, en is daarnaast verkrijgbaar in twee andere kleuropties, zodat je hem perfect kunt afstemmen op jouw interieur. Een prachtige keuze voor sfeervolle wandverlichting met een luxe uitstraling!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Wandlamp 2xE14 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.320mm R=180mm.',
            'kleur_code' => 'Kleur: Zwart 20 & Goud',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Gala-WandLamp-SP239035975.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Gala-WandLamp-SP239035975.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Gala-WandLamp-SP239035975.zip'
        )
    ),
    'box' => array(
        'title' => 'Box',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/2-Sqaure-Box-Vloerlamp-2_enhanced.png',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/2-Sqaure-Box-Vloerlamp-2_enhanced.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Box vloerlamp combineert modern design met functionaliteit en is een stijlvolle toevoeging aan elke ruimte. Met een hoogte van 1600 mm en een royale M18 lampenkap van 400 x 250 x 400 mm, creëert deze lamp een indrukwekkende uitstraling en een warme, sfeervolle verlichting.
De lamp is uitgerust met een E27-fitting en wordt geleverd exclusief lichtbron, zodat je de lichtbron kunt kiezen die het beste past bij jouw interieur. Verkrijgbaar in Zwart 20 en drie andere kleuren, biedt de Box veelzijdigheid en tijdloze elegantie. Perfect voor wie op zoek is naar een moderne en praktische vloerlamp!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Vloerlamp E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.1600mm',
            'kleur_code' => 'Kleur: Zwart 20',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: M18, 400x250x400mm',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Box-Vloerlamp-SP0101121-20.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Box-Vloerlamp-SP0101121-20.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Box-Vloerlamp-SP0101121-20.zip'
        )
    ),
    'polo' => array(
        'title' => 'Polo',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Polo-2_enhanced.png',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Sqaure-Polo-2_enhanced.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Polo vloerlamp is een compacte en stijlvolle keuze voor sfeervolle verlichting. Met een hoogte van 550 mm en een luxe uitstraling dankzij de Brons 10 afwerking, is deze lamp perfect voor kleinere ruimtes of als subtiel accentstuk. De kap, gemaakt van Fabric Linnen, voegt een warme en natuurlijke textuur toe, ideaal voor een knusse ambiance.
De lamp is voorzien van een E27-fitting en wordt geleverd exclusief lichtbron, waardoor je zelf een lichtbron kunt kiezen die past bij jouw voorkeur. Een elegante en veelzijdige toevoeging aan elk interieur!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Tafellamp E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.550mm',
            'kleur_code' => 'Kleur: Brons 10',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Inclusief',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Polo-SP0102122-10.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Polo-SP0102122-10.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Polo-SP0102122-10.zip'
        )
    ),
    'riagani-table' => array(
        'title' => 'Riagani Table',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/2-Sqaure-Riagani-Table-2_enhanced.png',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/2-Sqaure-Riagani-Table-2_enhanced.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Rigani Table is een moderne tafellamp die stijl en efficiëntie perfect combineert. Met geïntegreerde LED-verlichting van 6 Watt, biedt deze lamp een helderheid van 207 lumen en een warme lichtkleur van 3000K, ideaal voor een gezellige en ontspannen sfeer.
Met een compacte breedte van 290 mm en een hoogte van 300 mm, past de lamp moeiteloos op een bureau, nachtkastje of bijzettafel. De strakke zwarte afwerking geeft de Rigani Table een tijdloos en eigentijds design dat bij elke interieurstijl past. Een perfecte keuze voor sfeervolle en energiezuinige verlichting!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Tafellamp E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: B.290mm H.300mm',
            'kleur_code' => 'Kleur: Zwart 20',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Riagani-Table-SP2875169-124721.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Riagani-Table-SP2875169-124721.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Riagani-Table-SP2875169-124721.zip'
        )
    ),
    'sqaure-wood' => array(
        'title' => 'Sqaure Wood',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Sqaure-Wood-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Sqaure-Wood-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Square Wood vloerlamp biedt een prachtige combinatie van natuurlijke materialen en moderne stijl. Met een hoogte van 540 mm en een breedte van 260 mm, heeft deze lamp een eigentijds design dat perfect past in zowel klassieke als moderne interieurs. Het houten frame in een warme bruine kleur voegt een natuurlijke uitstraling toe aan elke ruimte.
De lamp wordt geleverd met een bijpassende lampenkap van 260 x 360 x 260 mm en is gemaakt van stof in de kleur 68.8016.20, wat zorgt voor een subtiele, sfeervolle lichtverdeling. De E27-fitting is geschikt voor verschillende lichtbronnen (exclusief lichtbron). Een ideale keuze voor een warme en verfijnde sfeer!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Tafellamp E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.540mm B.260mm',
            'kleur_code' => 'Kleur: Brown',
            'materiaal' => 'Materiaal: Hout',
            'kap' => 'Lampenkap: 260x360x260mm',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Sqaure-Wood-SP010223-10.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Sqaure-Wood-SP010223-10.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Sqaure-Wood-SP010223-10.zip'
        )
    ),
    'piaqo-table' => array(
        'title' => 'Piaqo Table',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Table-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Table-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Piaqo-Table-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'De Piaqo Table is een moderne vloerlamp die zowel stijlvol als functioneel is. Met een hoogte van 500 mm en een breedte van 350 mm, past deze lamp perfect op een tafel, bureau of nachtkastje. Het slanke ontwerp in Zwart 20 en het gebruik van metaal geven de lamp een eigentijdse uitstraling die zich gemakkelijk integreert in verschillende interieurstijlen.
De bijbehorende lampenkap heeft afmetingen van 200 x 180 x 200 mm en is gemaakt van stof in de kleur 66038003.20, wat zorgt voor een sfeervolle lichtverspreiding. De lamp is voorzien van een E27-fitting en wordt geleverd exclusief lichtbron, zodat je de ideale lichtbron kunt kiezen voor jouw ruimte. Perfect voor een gezellige en verfijnde ambiance!',
        'specifications' => array(
            'lamp_type' => 'Categorie: Tafellamp E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: H.540mm B.260mm',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: 200x180x200mm',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/FBX-Piaqo-Table-SP0102121-20.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/OBJ-Piaqo-Table-SP0102121-20.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/11/3ds-Piaqo-Table-SP0102121-20.zip'
        )
    ),
    'dual' => array(
        'title' => 'Dual',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Dual-SP2110105A1B-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Dual-SP2110105A1B-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Dual-SP2110105ALGW-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Spotlight E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: Unknown',
            'kleur_code' => 'Kleur: Zwart & Wit',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Dual-SP2110105A1B.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Dual-SP2110105ALGW.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Dual-SP2110105ALGW.zip'
        )
    ),
    'chill-out-sqaure' => array(
        'title' => 'Chill Out Sqaure',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Chill-Out-Sqaure-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Chill-Out-Sqaure-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Chill-Out-Sqaure-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Chill-Out-Sqaure-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categroie: Spotlight E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: Unknown',
            'kleur_code' => 'Kleur: Zwart & Wit',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Chill-Out-Sqaure-SP2150105MWBS.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Chill-Out-Sqaure-SP2150105MWBS.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Chill-Out-Sqaure-SP2150105MWBS.zip'
        )
    ),
    'trimess-chill-out' => array(
        'title' => 'Trimess Chill Out',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Trimmes-Chill-Out-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Trimmes-Chill-Out-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Trimmes-Chill-Out-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Trimmes-Chill-Out-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Trimmes-Chill-Out-1024x1024-Image-4.jpg'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Spotlight E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: Unknown',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Trimess-Chill-out-SP2110105TRB.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Trimess-Chill-out-SP2110105TRB.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Trimess-Chill-out-SP2110105TRB.zip'
        )
    ),
    'coko' => array(
        'title' => 'Coko',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Coko-SP2864174-020776-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Coko-SP2864174-020776-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Spotlight E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: Unknown',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'piro-wit' => array(
        'title' => 'Piro Wit',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Piro-Wit-SP51912S03MW8D02-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Piro-Wit-SP51912S03MW8D02-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Spotlight E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: Unknown',
            'kleur_code' => 'Kleur: Zwart & Wit',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Piro-Wit-SP51912S03MW8D02.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Piro-Wit-SP51912S03MW8D02.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Piro-Wit-SP51912S03MW8D02.zip'
        )
    ),
    'piro-zwart' => array(
        'title' => 'Piro Zwart',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Piro-Zwart.png',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Piro-Zwart.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Spotlight',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: Unknown',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Piro-Zwart-SP517BS03765D02.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Piro-Zwart-SP517BS03765D02.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Piro-Zwart-SP517BS03765D02.zip'
        )
    ),
    'o-light-preston' => array(
        'title' => 'O-Light Preston',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-1200-SP0104113-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-1200-SP0104113-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-1000-SP0104112-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-800-SP0104111-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Ringlight E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: R.1200mm R.1000mm R.800mm',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-O-Light-Preston.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-O-Light-Preston.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-O-Light-Preston.zip'
        )
    ),
    'o-light' => array(
        'title' => 'O-Light',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-SP0104171-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-SP0104171-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-SP0104172-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-SP0104173-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/O-Light-Preston-1024x1024-Image-4.jpg'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Ringlight E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'o-light-tarquin' => array(
        'title' => 'O-Light Tarquin',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-Tarquin-SP239345603-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-Tarquin-SP239345603-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/O-Light-Traquin-SP239345606-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/O-Light-Tarquin-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Ringlight E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-O-Light-Tarquin-SP239345603.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-O-Light-Tarquin-SP239345603.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-O-Light-Tarquin-SP239345603.zip'
        )
    ), 
    'big-floorshades' => array(
        'title' => 'Big Floorshades',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Big-Floorshade2-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Big-Floorshade2-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/BigFloorShadesV2_All_3_i1_0003.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/BigFloorShadesV2_All_3_i1_0000.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Big-Floorshade-1024x1024-Image-1.jpg'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Vloerlamp E27 Fitting.',
            'lichtbron' => 'Lichtbron: Excl. Lichtbron',
            'maat' => 'Maat: Unknown ',
            'kleur_code' => 'Kleur: Wit',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Unknown',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'm55-drumm' => array(
        'title' => 'M55 Drumm',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M55-Drumm-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/M55-Drumm-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Lampen Type: Lampenkap',
            'lichtbron' => 'Lichtbron: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur Goud',
            'materiaal' => 'Materiaal: Kunststof',
            'kap' => 'M55 Drumm, ',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'm67-high-drumm' => array(
        'title' => 'M67 High Drumm',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M67-High-Drumm-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/M67-High-Drumm-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Lampen type: Lampenkap',
            'lichtbron' => 'Lichting Fitting: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Materiaal: Kunststof',
            'kap' => 'M67 High Drumm',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'm10-conisch' => array(
        'title' => 'M10 Conisch',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M10-Conisch-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/M10-Conisch-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Lampen type: Lampenkap',
            'lichtbron' => 'Lichting Fitting: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Materiaal: Kunststof',
            'kap' => 'M10 Conisch, ',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'm62-half-conisch' => array(
        'title' => 'M62 Half Conisch',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M62-Half-Conisch-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/M62-Half-Conisch-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Lampen type: Lampenkap',
            'lichtbron' => 'Lichting Fitting: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Materiaal: Kunststof',
            'kap' => 'M62 Half Conisch, ',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'm40-ovaal' => array(
        'title' => 'M40 Ovaal',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M40-Ovaal-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/M40-Ovaal-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Lampen type: Lampenkap',
            'lichtbron' => 'Lichting Fitting: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Mateeriaal: Kunststof',
            'kap' => 'M40 Ovaal, ',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'm15-q-conisch' => array(
        'title' => 'M15 Q Conisch',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/M15-Q-Conisch-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/M15-Q-Conisch-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Lampen type: Lampenkap',
            'lichtbron' => 'Lichting Fitting: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Goud',
            'materiaal' => 'Materiaal: Kunststof',
            'kap' => 'M15 Q Conisch, ',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'rigani-wall' => array(
        'title' => 'Rigani Wall',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Rigani-Wall2-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Rigani-Wall2-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Rigani-Wall-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Rigani-Wall-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Rigani-Wall-1024x1024-Image-3.jpg'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'E27 Fitting',
            'lichtbron' => 'Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart 20',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'atomo' => array(
        'title' => 'Atomo',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Atomo2-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Atomo2-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Atomo-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Atomo-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Hanglamp',
            'lichtbron' => 'Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart 20',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Atomo-SP239180630.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Atomo-SP239180630.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Atomo-SP239180630.zip'
        )
    ),
    'navi' => array(
        'title' => 'Navi',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Navi-SP239186952-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Navi-SP239186952-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Navi-SP239186953-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Navi-SP239186951-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Navi-SP239186954-1-Sqaured-1.jpg'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Hanglamp',
            'lichtbron' => 'Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart, Goud',
            'materiaal' => 'Materiaal: Metaal, Glas',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'onrid' => array(
        'title' => 'Onrid',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Onrid-SP239030654-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Onrid-SP239030654-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Platfondlamp',
            'lichtbron' => 'Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Wit',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'nevo' => array(
        'title' => 'Nevo',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Nevo-SP2392481_59-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Nevo-SP2392481_59-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Nevo-SP2392481_60-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Nevo-SP2392481_61-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Wandlamp',
            'lichtbron' => 'Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart, Goud & Wit',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'nevo zwart fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Nevo-Zwart-SP239248159.zip',
            'nevo zwart obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Nevo_Zwart_-_SP239248159.zip',
            'nevo zwart 3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Nevo-Zwart-SP239248159.zip',
            'nevo wit fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Nevo-Wit-SP239248160.zip',
            'nevo wit obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Nevo-Wit-SP239248160.zip',
            'nevo wit 3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Nevo-Wit-SP239248160.zip',
            'nevo goud fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Nevo-Goud-SP239248161.zip',
            'nevo goud obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Nevo-Goud-SP239248161.zip',
            'nevo goud 3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Nevo-Goud-SP239248161.zip'
        )
    ),
    'trackrail' => array(
        'title' => 'Trackrail',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/3-Fase-Trackrail-Zwart-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/3-Fase-Trackrail-Zwart-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/3-Fase-Trackrail-Grijs-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/3-Fase-Trackrail-Wit-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Lampen Type: Trackrail',
            'lichtbron' => 'Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart, Grijs & Wit',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'voeding-eindstuk' => array(
        'title' => 'Voeding Eindstuk',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Voeding-Eindstuk-SP2141004ABL-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Voeding-Eindstuk-SP2141004ABL-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Trackrail',
            'lichtbron' => 'Lichtbron: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'hoek-connector' => array(
        'title' => 'Hoek Connector',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hoek-Connector-SP2141012ABL-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Hoek-Connector-SP2141012ABL-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Trackrail',
            'lichtbron' => 'Lichtbron: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'kruis-connector' => array(
        'title' => 'Kruis Connector',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Kruis-Connector-SP2141018AB-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Kruis-Connector-SP2141018AB-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Trackrail',
            'lichtbron' => 'Lichtbron: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'magnatic-tracklight' => array(
        'title' => 'Magnatic Tracklight',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Magnatic-Tracklight-SP2142102BBW-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Magnatic-Tracklight-SP2142102BBW-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Trackrail',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Magnatic-Tracklight-SP2142102BBW.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Magnatic-Tracklight-SP2142102BBW.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Magnatic-Tracklight-SP2142102BBW.zip'
        )
    ),
    'connector' => array(
        'title' => 'Connector',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Connector-SP2141010AB-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Connector-SP2141010AB-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Trackrail',
            'lichtbron' => 'Lichtbron: Geen',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Material: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'magnatic-rail' => array(
        'title' => 'Magnatic Rail',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Magnatic-Rail-27x30mm-SP2132001BB-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Magnatic-Rail-27x30mm-SP2132001BB-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Trackrail',
            'lichtbron' => 'Lichtbron: None',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'koppel-hoekstuk' => array(
        'title' => 'Koppel Hoekstuk',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Koppel-Hoekstuk-SP2142012ABB-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Koppel-Hoekstuk-SP2142012ABB-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Trackrail',
            'lichtbron' => 'Lichtbron: None',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Material: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'led_hoek_tracklight' => array(
        'title' => 'LED Hoek Tracklight',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/LED-Hoek-Tracklight-SP2142100EABW-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/LED-Hoek-Tracklight-SP2142100EABW-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Trackrail',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-LED-Hoek-Tracklight-SP2132100EABW.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-LED-Hoek-Tracklight-SP2132100EABW.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-LED-Hoek-Tracklight-SP2132100EABW.zip'
        )
    ),
    'molos-led' => array(
        'title' => 'Molos LED',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Molos-LED-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Molos-LED-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Molos-LED-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Molos-LED-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Spotlight',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart, Wit & Goud',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Molos-LED-SP2165524T.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Molos-LED-SP2165524T.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Molos-LED-SP2165524T.zip'
        )
    ),
    'molos-gu10' => array(
        'title' => 'Molos GU10',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Molos-Gu10-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Molos-Gu10-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Molos-Gu10-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Molos-Gu10-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Spotlight',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart, Wit & Goud',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Molos-GU10-SP2165105NT.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Molos-GU10-SP2165105NT.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Molos-GU10-SP2165105NT.zip'
        )
    ),
    'dassia' => array(
        'title' => 'Dassia',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Dassia-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Dassia-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Dassia-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Dassia-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Plafondlamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart, Wit & Groen',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Dassia-SP2875169-030741.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Dassia-SP2875169-030741.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Dassia-SP2875169-030741.zip'
        )
    ),
    'volos' => array(
        'title' => 'Volos',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2025/01/Volos-1024x1024-Image-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Volos-1024x1024-Image-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Volos-1024x1024-Image-2.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Volos-1024x1024-Image-3.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2025/01/Volos-1024x1024-Image-4.jpg'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Platfondlamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Zwart, Wit, Groen & Blauw',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Volos-Sp2875169-036741.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Volos-Sp2875169-036741.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Volos-Sp2875169-036741.zip'
        )
    ),
    'woody-shade' => array(
        'title' => 'Woody Shade',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Woody-Shade-420-SP2875169-001775-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Woody-Shade-510-SP2875169-002775-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Woody-Shade-610-SP2875169-003775-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Dassia-SP2875169-033741-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Wood Normal/Light/Darken',
            'materiaal' => 'Materiaal: Wood',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'suede-dots' => array(
        'title' => 'Suede Dots',
        'main_image' => 'hhttps://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Dots-SP0102171-Hoog-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Dots-SP0102171-Hoog-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Dots-SP0102171-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Tafellamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Blauw & Rood',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Custom',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'suede-leave' => array(
        'title' => 'Suede Leaves',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Leave-SP012173-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Suede-Leave-SP012173-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Tafellamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Blauw & Rood',
            'materiaal' => 'Materoaa: Metaal',
            'kap' => 'Lampenkap: Custom',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'mirando-160' => array(
        'title' => 'Mirando 160',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-160-SP0104174_3-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-160-SP0104174_3-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-160-SP0104174_1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-160-SP0104174_2-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Bruin, Wit & Zwart',
            'materiaal' => 'Materiaal" Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'mirando-220' => array(
        'title' => 'Mirando 220',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-220-SP0104175_3-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-220-SP0104175_3-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-220-SP0104175_2-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Mirando-220-SP0104175_1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Bruin, Wit & Zwart',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'hookd' => array(
        'title' => 'Hookd',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hookd-SP032252001-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Hookd-SP032252001-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: ',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'electric-wheel' => array(
        'title' => 'Eletric Wheel',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Electric-Wheel-SP032252003-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Electric-Wheel-SP032252003-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Tafellamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: ',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'spool' => array(
        'title' => 'Spool',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Spool-Sp032252004-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Spool-Sp032252004-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: ',
            'materiaal' => 'Matetriaal": Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/FBX-Spool-Sp032252004.zip',
            'obj' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/OBJ-Spool-Sp032252004.zip',
            '3ds' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/3ds-Spool-Sp032252004.zip'
        )
    ),
    'wasslight' => array(
        'title' => 'Wasslight',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Wasslight-SP032252006-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Wasslight-SP032252006-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Groen',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => 'Lampenkap: Geen',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'bendy' => array(
        'title' => 'Bendy',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Bendy-SP032252008-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Bendy-SP032252008-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Zwart',
            'materiaal' => 'Categorie: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'zen' => array(
        'title' => 'ZEN',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hanglamp-ZEN-SP30215013K-1203-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Hanglamp-ZEN-SP30215013K-1203-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Grijs',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'alpha' => array(
        'title' => 'Alpha',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Alpha-Hanglamp-SP302148013K-1206-1-Squared-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Alpha-Hanglamp-SP302148013K-1206-1-Squared-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Grijs',
            'materiaal' => 'Categorie: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'blade-y' => array(
        'title' => 'Blade Y',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/Hanglamp-Blade-Y-SP302153003K-1209-1-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/Hanglamp-Blade-Y-SP302153003K-1209-1-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categroei: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Blauw',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    ),
    'zen-oval' => array(
        'title' => 'Zen Oval',
        'main_image' => 'https://www.spinlight.nl/wp-content/uploads/2024/12/40007442045-Sqaured-1.jpg',
        'gallery_images' => array(
            'https://www.spinlight.nl/wp-content/uploads/2024/12/40007442045-Sqaured-1.jpg',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png',
            'https://www.spinlight.nl/wp-content/uploads/woocommerce-placeholder.png'
        ),
        'description' => 'Plaats hier je Product Discription',
        'specifications' => array(
            'lamp_type' => 'Categorie: Hanglamp',
            'lichtbron' => 'Lichtbron: Inclusief Lichtbron',
            'maat' => 'Maat: ',
            'kleur_code' => 'Kleur: Orangje',
            'materiaal' => 'Materiaal: Metaal',
            'kap' => '',
        ),
        'downloads' => array(
            'fbx' => '',
            'obj' => '',
            '3ds' => ''
        )
    )
);

// Get the product ID from URL parameter
$product_id = isset($_GET['id']) ? $_GET['id'] : '';

// Define your products array (copy the same array from your gallery page)
$products = array(
    // Copy your entire products array here
);

// Get the selected product
$product = isset($products[$product_id]) ? $products[$product_id] : null;

if ($product): ?>
    <div style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <div style="display: flex; gap: 40px;">
            <div style="flex: 1;">
                <img src="<?php echo esc_url($product['image']); ?>" 
                     alt="<?php echo esc_attr($product['name']); ?>" 
                     style="width: 100%; height: auto;">
            </div>
            <div style="flex: 1;">
                <h1 style="color: #BE924A;"><?php echo $product['name']; ?></h1>
                <div style="margin-top: 20px;">
                    <p><strong>Type:</strong> <?php echo $product['type']; ?></p>
                    <p><strong>Materiaal:</strong> <?php echo is_array($product['materiaal']) ? implode(', ', $product['materiaal']) : $product['materiaal']; ?></p>
                    <p><strong>Kleur:</strong> <?php echo is_array($product['kleur']) ? implode(', ', $product['kleur']) : $product['kleur']; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div style="text-align: center; padding: 50px;">
        <h2>Product niet gevonden</h2>
    </div>
<?php endif;

// Get the selected product
$product = isset($products[$product_id]) ? $products[$product_id] : null;

ini_set('display_errors', 1);
error_reporting(E_ALL);

$product_id = isset($_GET['id']) ? $_GET['id'] : '';
$product = isset($products[$product_id]) ? $products[$product_id] : null;

$current_product = isset($products[$product_id]) ? $products[$product_id] : null;

if (!isset($products[$product_id])) {
    echo "Product not found.";
    exit;
}

if (!array_key_exists($product_id, $products)) {
    echo "Invalid product.";
    exit;
}

$description = !empty($product['description']) ? $product['description'] : 'Description not available.';

$downloads = isset($product['downloads']) && is_array($product['downloads']) 
    ? $product['downloads'] 
    : array('fbx' => '', 'obj' => '', '3ds' => '');
    
$description = isset($product['description']) && is_string($product['description']) 
    ? $product['description'] 
    : 'Description not available.';

if ($product): ?>
    <a style="color: #BE924A; opacity: 100%;" href="https://www.spinlight.nl/producten-gallery/">Producten lijst</a>

<div style="margin-left: 150px; margin-bottom: 20px;">
    <a href="https://www.spinlight.nl/producten-gallery/" style="color: #BE924A; text-decoration: none; display: flex; align-items: center; width: fit-content;">
        <span style="font-size: 20px;">←</span>
        <span style="margin-left: 8px;">Producten lijst</span>
    </a>
</div>

    <h1 style="font-size: 4.063rem; color: #be924a; margin: 0px 0px 10px 0px; margin-left: 150px;"><?php echo $current_product['title']; ?></h1>

<!-- Main image container -->
<div class="product-image-section" style="float: right; margin-right: 150px; width: auto; margin-top: -60px; display: flex; flex-direction: column; align-items: center;">
    <img id="main-image" src="<?php echo $current_product['main_image']; ?>" style="width: auto; height: 570px; margin-bottom: 10px;">
    
    <div id="thumbnail-container" style="display: flex; gap: 10px; justify-content: center;">
        <?php foreach($current_product['gallery_images'] as $index => $image): ?>
            <img class="thumbnail" 
                 src="<?php echo $image; ?>" 
                 style="width: 135px; height: 135px; cursor: pointer;"
                 onclick="changeMainImage('<?php echo $image; ?>', event)"
                 alt="<?php echo $current_product['title'] . ' view ' . ($index + 1); ?>">
        <?php endforeach; ?>
    </div>
</div>

    <h2 style="font-size: 24px; color: #be924a; margin: 30px 0px 5px 0px; margin-left: 150px;">Omschrijving</h2>
    <p style="padding: 20px 1000px 0px 0px; margin-left: 150px;"><?php echo $current_product['description']; ?></p>
    
    <h2 style="padding: 25px 0px 0px 0px; background: #0A0E11; color: #be924a; margin-left: 150px;">Specificaties</h2>
    <div style="background: #0A0E11; padding: 20px; color: #be924a; margin-left: 150px;">
        <?php foreach($current_product['specifications'] as $spec): ?>
            <?php echo $spec; ?><br>
        <?php endforeach; ?>
    </div>
    
    <h2 style="padding: 25px 0px 10px 0px; background: #0A0E11; color: #be924a; margin-left: 150px;">Downloads</h2>
    <div id="download-buttons" style="background: #0A0E11; padding: 20px; text-align: center; margin-left: 150px; margin-bottom: 50px;">
    <?php foreach($current_product['downloads'] as $type => $url): ?>
        <a style="padding: 10px 20px; background: #142832; color: #be924a; text-decoration: none; border: 1px solid #BE924A; border-radius: 5px; margin: 5px;" 
           href="<?php echo $url; ?>">
            Download <?php echo strtoupper($type); ?> File
        </a>
    <?php endforeach; ?>
</div>
<?php endif;

get_footer(); ?>

<script>
function changeMainImage(newSrc, event) {
    event.preventDefault();
    document.getElementById('main-image').src = newSrc;
}
</script>