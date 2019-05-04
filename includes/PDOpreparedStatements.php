<?php
    include("includes/dbh/dbh.pdo.inc.php");

    //  Prepared Statmeents

    //Gets data from database
    $stmt = $conn->prepare("SELECT * FROM users");

