<?php
    $user = 'root';

    include "passwordBDD.php";

    try{
        $dbh = new PDO('mysql:host=localhost;dbname=bdd-php-test',$user,$password);

        $requete = 'SELECT * from user';

        foreach($dbh->query($requete)as $row){
            printRow($row);
        }

        $dbh = null;

    }catch (PDOException $e){
        print "Erreur!:" .$e->getMessage()."<br>";
        die();
    }

    function printRow($row){
        echo 'name : ' . $row['firstName'] . " " . $row['lastName'] . "<br> age : " . $row["age"] . "<br>";
    }
?>