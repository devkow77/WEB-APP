<?php
//Zad 2.5

$n = 3.5;
$note;

switch($n){
    case ($n >= 2 && $n < 3):
        $note = "niedostateczny";
    break;
        case ($n >= 3 && $n < 4):
        $note = "dostateczny";
    break;
        case ($n >= 4 && $n < 5):
        $note = "dobry";
    break;
    case 5:
        $note = "bardzo dobry";
    break;
    default:
        $note = "";
    break;
}

print "\nOcena (switch): ".$note;

$note = match(true){
    ($n >= 2 && $n < 3) => "niedostateczny",
    ($n >= 3 && $n < 4) => "dostateczny",
    ($n >= 4 && $n < 5) => "dobry",
    ($n == 5) => "bardzo dobry",
    default => ""
};

print "\nOcena (match): ".$note;
