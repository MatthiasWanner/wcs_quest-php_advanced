<?php
use App\Learn\Foo;
use App\Wcs\Hello;
require __DIR__ . '/../vendor/autoload.php';

$foo = new Foo('Hello');
$wcs = new Hello();
?>

<?= $foo->classInfos() ?>

</br>

<?= $wcs->talk() ?>