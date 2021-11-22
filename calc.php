<?php
require 'point_class.php';
$point1 = new Point();
$xa = $point1->x=4;
$ya = $point1->y=5;
$za = $point1->z=6;
$point2 = clone $point1;
$xb = $point2->x=7;
$yb = $point2->y=8;
$zb = $point2->z=9;
echo "Расстояние между точками A($xa,$ya,$za) и В($xb,$yb,$zb): ";
echo sqrt(pow(($xb  - $xa),2) + pow(($yb - $ya),2) + pow(($zb - $za),2));
