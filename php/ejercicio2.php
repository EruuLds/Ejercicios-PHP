<?php
    //Ejercicio 2
    //Hugo Erhubey Quintana Ledesma
    
    $word = readline("Ingresa una palabra y te diré si es un palíndromo: ");
    
    $inputWord = trim($word);
    $finalWord = str_replace(
        array('A', 'Á', 'á', 'B', 'C', 'D', 'E', 'É','é', 'F', 'G', 'H', 'I', 'í','í', 'J', 'K', 'L', 'M', 'N', 'Ñ','O', 'Ó', 'ó', 'P', 'Q', 'R', 'S', 'T','U', 'Ú', 'Ü','ü','ú', 'V', 'W', 'X', 'Y', 'Z'),
        array('a', 'a', 'a', 'b', 'c', 'd', 'e', 'e','e', 'f', 'g', 'h', 'i', 'i','i', 'j', 'k', 'l', 'm', 'n', 'ñ','o', 'o', 'o', 'p', 'q', 'r', 's', 't','u', 'u', 'u','u','u', 'v', 'w', 'x', 'y', 'z'),
        $inputWord
    );
    
    $reversedWord = strrev($finalWord);
    
    if ($finalWord == $reversedWord) {
        print "La palabra '".$word."' Sí es un palíndromo.";
    }
    else {
        print "La palabra '".$word."' NO es un palíndromo.";
    }
?>