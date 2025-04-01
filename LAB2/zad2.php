<?php
//Zad 2.2
$a = 4;
define("B", 10);
$c = 4.0;
$d = 5.667;

echo "\na+B = ".($a+B);
echo "\na/B = ".($a/B);
echo "\na^B = ".($a**B);
print "\nB%a = ".(B%$a);
print "\na == B = ".json_encode($a==B); // konwertuje true na "true" i odwrotnie
print "\na > b = ".json_encode($a > B);
if($a > B){
    print "\na > b = true";
}else{
    print "\na > b = false";
}
print "\na > b = ".($a > B ? "true" : "false");
print "\na == c = ".($a == $c ? "true" : "false");
print "\na === c = ".($a === $c ? "true" : "false");
print "\nd bez przecinka = ".(floor($d));
print "\nd do 2 miejsc po przecinku = ".(round($d, 2));

