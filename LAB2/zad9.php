<?php
//Zad 2.9
$array = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];


print "\n".count($array);
foreach($array as $fruit){
    print "\n".$fruit;
}
array_push($array, "lemon");
array_pop($array);

print("\n");
sort($array, SORT_DESC);
foreach($array as $fruit){
    print "\n".$fruit;
}
