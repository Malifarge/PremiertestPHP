<?php
    $firstName= 'Thomas';
    $lastName= 'Malifarge';
    if($firstName === "Thomas"){
        echo "<h1>hello $firstName $lastName </h1>";
    }else{
        echo "<h2>hello Stranger</h2>";
    }

    $limite = strlen($lastName);

    for ($i = 1; $i <= $limite ; $i++){
        echo "$i <br>";
    }

    $fruits = ['apple','pear','banana'];

    foreach ($fruits as &$fruit){
        echo "$fruit <br>";
    }

    include "functions.php";

    hello($firstName, $lastName, 1);
    hello("Jean", $lastName, 0);
    echo somme(1,3)

    ?>