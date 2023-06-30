<?php
    //Ejercicio 1
    //Hugo Erhubey Quintana Ledesma
    $numbers = array();
    
    for ($i=0; $i < 10; $i++) {
        $number = readline("Ingresa el dato número ".($i+1).": ");
        
        array_push($numbers, $number);
    }
    
    print "Los números ingresados sin ordenar son: \n";
    
    for ($i=0; $i < count($numbers); $i++) {
        print ($i+1).". ".$numbers[$i]."\n";
    }
    
    sort($numbers, SORT_NUMERIC);
    
    print "Los números ingresados, ordenados de forma ascendente, son: \n";
    for ($i=0; $i < count($numbers); $i++) {
        print ($i+1).". ".$numbers[$i]."\n";
    }
?>