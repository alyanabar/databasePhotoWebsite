<?php
    $servername = 'localhost';
    $username = 'root';
    $password = ''; //Zjrl3
    $dbname = 'barrera';
    
    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
?>