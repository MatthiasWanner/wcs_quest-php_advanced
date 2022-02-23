<?php
use App\Learn\Foo;
require __DIR__ . '/../vendor/autoload.php';

$foo = new Foo('Hello');
?>

<?= $foo->classInfos() ?>