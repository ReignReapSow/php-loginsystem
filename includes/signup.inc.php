<?php
    include 'dbh/dbh.mysqli.inc.php';
    /////////////////////////////
    //INSERTS DATA INTO DATABASE
    ////////////////////////////

    //mysqli_real_escape_string == escapes all coding characters
    $first = mysqli_real_escape_string( $conn(), $_POST['first']);
    $last = mysqli_real_escape_string( $conn(), $_POST['last']);
    $email = mysqli_real_escape_string( $conn(), $_POST['email']);
    $uid = mysqli_real_escape_string( $conn(), $_POST['uid']);
    $pwd = mysqli_real_escape_string( $conn(), $_POST['pwd']);


    //INSERT DATA INTO THE DATABASE
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ( $first, $last, $email, $uid, $pwd )";
    mysqli_query($conn, $sql);

    //redirects to index.php with a browser confirmation of signup=success
    header("Location: ../index.php?signup=success");    