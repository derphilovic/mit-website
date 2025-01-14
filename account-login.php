<?php
$usrname = $_POST["username"];
$email = $_POST["email"];
$pswrd = $_POST["passw"];

if (! $usrname && ! $email) {
    die("Nutzername oder Email eingeben!");
}

if (! $pswrd){
die("Passwort eigeben!");
}

$host = "localhost";
$dbname = "message_db";
$usernme = "root";
$password = "";

$conn = mysqli_connect($host, $usernme, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error! Fuck you!" . mysqli_connect_error());
 };

 $sql = "SELECT id, username, email, password FROM users";

  