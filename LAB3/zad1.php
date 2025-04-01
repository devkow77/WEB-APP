<?php
    $fruits = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];
    
    //Wyświetlenie owoców z pętlą foreach z { }
    foreach($fruits as $fruit){
        print $fruit.PHP_EOL;
    }
    
    printf("\n");

    //Wyświetlenie owoców z pętlą foreach z endforeach
    foreach($fruits as $fruit):
        printf("$fruit\n");
    endforeach;
?>
 