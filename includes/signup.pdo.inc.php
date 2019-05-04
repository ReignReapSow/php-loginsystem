<?php
try{
    include_once("dbh/dbh.pdo.inc.php");

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    //prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO users
    ( user_first, user_last, user_email, user_uid, user_pwd)values
             ( :fname, :lname, :email, :uid, :pwd)");

    //Binds parameters = values to sql parameter
    $stmt->bindParam(':fname', $first);
    $stmt->bindParam(':lname',$last);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':uid', $uid);
    $stmt->bindParam(':pwd', $pwd);

    $stmt->execute();
    echo"New record created";
}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();

}