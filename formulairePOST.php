<?php

    $firstName = ($_POST["firstName"]);
    $lastName = ($_POST["lastName"]);
    $age = ($_POST["age"]);

    include "passwordBDD.php";

    try{
        $conn = new PDO('mysql:host=localhost;dbname=bdd-php-test',$user,$password);

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `user` (`firstName`, `lastName`, `age`) VALUES ('$firstName', '$lastName','$age')";

        $conn->exec($sql);

        echo "New user created successfully";
    } catch(PDOException $e){
        print "Erreur!:" .$e->getMessage()."<br>";
    }

?>