<?php
include_once 'Cylinder1.php';
include_once 'Cricle1.php';

$cricle = new Cricle(3, 'den');
$cylinder = new Cylinder(3, 'den', 4);

echo $cricle->__toString() . '<br/>';
echo $cylinder->__toString();

?>