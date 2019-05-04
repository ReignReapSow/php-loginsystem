<?php

    include 'includes/dbh/dbh.mysqli.inc.php';

?>
<!-- TODO

-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login System</title>
</head>
<body>

<?php
    //INSERT DATA INTO THE DATABASE
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ( 'Daniel', 'Nielsen', 'usemmtuts@gmail.com', 'Admin', 'test123' );";
    $result = mysqli_query($conn, $sql );

?>  

</body>
</html>
