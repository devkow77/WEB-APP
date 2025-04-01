<?php
//Zad 2.6

function ctf(float $c){
    if($c == null){
        print "Nie podano wartosci!";
        return null;
    }

    return ($c * 9/5) + 32;
}

print "\n".ctf(30);
