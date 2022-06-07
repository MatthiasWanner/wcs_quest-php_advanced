<?php
// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Matthias';
$message = 'How are you today ?';
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe', 'ukulele'];

echo $twig->render('products.html.twig', ['name' => $name, 'message' => $message, 'products' => $products]);
