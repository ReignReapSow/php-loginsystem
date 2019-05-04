<?php
    //MySQLI CONNECTION
    $servername = 'localhost';
    $username = 'root';
    $pass = 'reignreapsow';
    $db = 'loginsystem';

    //MYSQLI CONNECTION
    $conn = mysqli_connect($servername, $username, $pass, $db);

//    // mysqli connection check
//    $sql = "SELECT * FROM users;";
//    $result = mysqli_query($conn, $sql );
//    $resultCheck = mysqli_num_rows($result);
//    if($resultCheck > 0 ){
//        echo 'database loginsystem connected ';
//
//    }
//    else{
//        echo 'database loginsystem is not connected';
//    }