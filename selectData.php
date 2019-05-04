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
    $sql = "SELECT * FROM projects;";
    //query code

    $result = mysqli_query($conn, $sql );
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0 ){
        echo 'database loginsystem connected, ';
        
        //FETCHES all results from $results
        while ($row = mysqli_fetch_assoc($result)) {

            echo $row['project_name'] . "<br>";

        }
    }
?>  

</body>
</html>
