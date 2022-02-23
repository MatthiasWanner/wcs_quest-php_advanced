<?php
use App\Wcs\Hello;

require __DIR__ . '/../vendor/autoload.php';

$wcs = new Hello();
?>

<?= $wcs->talk() ?>