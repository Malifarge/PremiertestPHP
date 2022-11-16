<?php
    $firstName= 'Jean';
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

    $fruits = ['pomme','poire','banane'];

    foreach ($fruits as &$fruit){
        echo "$fruit <br>";
    }
    ?>