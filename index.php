
<!-- TODO

-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login System</title>


</head>
<style> <!-- CSS STYLE -->
    a{
        background: green;
        color: #fff;
        box-shadow: -2px 1px;
        width: 20px;
        height: 10px;
    }

</style>
<body>

<form action="includes/signup.pdo.inc.php" method="POST">
    <input type="text" name="first" placeholder="FirstName" required><br>
    <input type="text" name="last" placeholder="LastName" required><br>
    <input type="text" name="email" placeholder="E-mail"><br>
    <input type="text" name="uid" placeholder="Username" required><br>
    <input type="password" name="pwd" placeholder="Password" required><br>
    <button type="submit">Sign Up</button>
</form>

<a href="preparedStatements.php">Prepared Statements</a>
</body>
</html>
