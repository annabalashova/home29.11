<?php

$a = 5;
function sum($b){
    global $a;
    $c = $a + $b;
    return $c;
}
echo sum(4);
