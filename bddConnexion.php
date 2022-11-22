<?php
    $user = 'root';
    
    include "passwordBDD.php";

    $dbh = new PDO('mysql:host=localhost;dbname=bdd-php-test',$user,$password);
?>