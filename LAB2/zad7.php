<?php
//Zad 2.7
$l = 10;

function rd(&$val){ // albo global ale wtedy ustawiamy statycznie jaka zmienna a nie dynamicznie
    $val = random_int(1, 50);
    return $val;
}

print "\n".rd($l);
print "\n".$l;
