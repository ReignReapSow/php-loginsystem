<?php

    include("includes/dbh/dbh.mysqli.inc.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prepared Statments1</title>
</head>
<body>


<?php
    $data="Admin";
    //Created a template
    $sql = "SELECT * FROM users WHERE user_uid=? ;";

    //Create a prepared statement
    $stmt = mysqli_stmt_init($conn);

    //Prepare the prepared statemnt
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed";
    }else {
        // SQL statment worked

        //Bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        //Run parameters inside database
        mysqli_stmt_execute();
    }

       while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'] . "<br>";
        }

?>

    <!-- BROWSER-Sync -->
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.3'><\/script>".replace("HOST", location.hostname));
    //]]></script>
</body>
</html>