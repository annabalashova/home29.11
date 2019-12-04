<?php


$year = array();
for ($i = 2000; $i <= 2019; $i++) {
    $year[] = $i;;
}
$arrayrand = array();
for($i=0; $i<20; $i++) {
    $arrayrand[] = mt_rand(0, 300);
}
$c = array_combine($year, $arrayrand);
print_r($c);

$color = array();
for($i=0; $i<13; $i++) {
    $color[] = sprintf('#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255));
}
print_r($color);


