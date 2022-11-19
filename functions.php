<?php

function hello($firstName, $lastName, int $fruit){
    $fruits = ['apple','pear','banana'];
    echo "<p>Hello $firstName $lastName , you love $fruits[$fruit] </p>";
}

function somme (int $a, int $b){
    $Somme = $a + $b;
    return "<p>$Somme</p>";
}

?>