<?php

/*

<html>
    <head>
        <link href="gp.css" rel="stylesheet"/>
        <title>Login Check</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="Schedule.css" type="text/css" rel="stylesheet"/>
    </head>
</html>

*/
    require_once('mysql_connectt.php');

    //get user data from prev page and create queries

    $username = $_POST["NewUser"];
    $firstname = $_POST["NewFirst"];
    $lastname = $_POST["NewLast"];
    $password = $_POST["NewPassword"];
    
    $checkusername = "SELECT username FROM user WHERE username = '$username'";

    $adduser = "INSERT INTO user (username, firstname, lastname, password) VALUES ('$username', '$firstname', '$lastname', '$password')";

    //Check username and insert user info into database

    if (!($dbc->query($checkusername))) {
        echo "username checked " . $dbc->insert_id . "</br>";
        if ($dbc->query($adduser)) {
            echo "user added " . $dbc->insert_id . "</br>";
        } else {
            die("Error ($dbc->errno) $dbc->error<br>SQL = $adduser\n");
        }
    } else {
        echo 'This username was taken, please return to the <html><a href="Signup.html">Create User Page</a></html> and try again';
    }

    /*
    echo $username;
    echo $firstname;
    echo $lastname;
    echo $password;
    */

?>