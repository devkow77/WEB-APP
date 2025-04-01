<?php
//Zad 2.4
$text1 = "   Programuję dobrze  ";
$text2 = "dobrze w PHP.  ";

print "\n".strlen($text1);
print "\n".strrev($text2);
print strlen($text1) > strlen($text2) ? "\ntext1" : "\ntext2";
print "\n".json_encode(str_contains($text1, "Programuję"));
print "\n".json_encode(str_starts_with($text2, "dobrze"));

$together = trim($text1).trim($text2);
print "\n".$together;

$text3 = explode(" ", $together);
print_r($text3);

$text2 = str_replace("dobrze", "źle", $text2);
print "\n".$text2;

print "\n".strpos($text2, "PHP");
print "\n".strtoupper($text1);
print "\n".ucfirst($text2);
print "\n".substr($text2, 9, 12);

