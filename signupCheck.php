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

    //get user data from prev page and create queries

    $username = $_POST["NewUser"];
    $firstname = $_POST["NewFirst"];
    $lastname = $_POST["NewLast"];
    $password = $_POST["NewPassword"];

    $hashedpassword = password_hash($password, PASSWORD_BRCYPT);
    
    $checkusername = "SELECT username FROM user WHERE username = '$username'";

    $adduser = "INSERT INTO user (username, firstname, lastname, password) VALUES ('$username', '$firstname', '$lastname', '$password')";

    //Check username and insert user info into database

    $result = $dbc->query($checkusername);

    if (mysql_num_rows($result)==0) {
        if ($dbc->query($adduser)) {
            echo "Signup successful!</br>";
        } else {
            die("Error ($dbc->errno) $dbc->error<br>SQL = $adduser\n");
        }
    } else {
        echo 'This username was taken, please return to the <html><a href="Signup.html">Create User Page</a></html> and try again</br>';
        echo $username; 
    }

    /*
    echo $username;
    echo $firstname;
    echo $lastname;
    echo $password;
    */

?>