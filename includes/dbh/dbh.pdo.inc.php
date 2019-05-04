<?php
    //PDO CONNECTION
    $servername = 'localhost';
    $username = 'root';
    $pass = 'reignreapsow';
    $db = 'loginsystem';

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $pass);
        // SET the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Database loginsystem connected";

    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }



    //PDO close connection
    // $conn = null;

