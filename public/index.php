<?php
use CowSay\Cow;
require __DIR__ . '/../vendor/autoload.php';

$bessie = new Cow('Hello, Farm!');
$bessie->setTongue('U')->setEyes('-o')->setPoop('🌻');
$output = $bessie->say();
echo $output;
?>


