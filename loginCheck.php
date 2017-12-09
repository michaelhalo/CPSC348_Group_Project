<html>
    <head>
        <link href="gp.css" rel="stylesheet"/>
        <title>Sign-up Check</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
</html>

<?php

    require_once('mysql_connectt.php');

    //get login info from login in index

    $username = $_POST["username"];
    $password = $_POST["password"];
    $checkpass = "SELECT password FROM user WHERE username = '$username'";

    $result = $dbc->query($checkpass);

    if ($result) {
        header("Location: profile.php");
        exit;
    } else {
        echo 'Wrong Password, please go back to the <html><a href="index.html">login page</a></html> and try again</br>'; 
    }
?>