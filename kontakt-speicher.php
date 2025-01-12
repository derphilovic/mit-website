<?php 
$name = $_POST["name"];
$message = $_POST["message"];
$typeofmsg = $_POST["typeofmsg"];

if ( ! $name) {
    die("Name eingeben!");
}
if ( ! $message) {
    die("Nachricht eingeben!");
}

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

 if (mysqli_connect_errno()) {
    die("Connection error! Fuck you!" . mysqli_connect_error());
 };

$sql = "INSERT INTO message (name, message, typeofmsg)
        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( !mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
};

mysqli_stmt_bind_param($stmt, "ssi", $name, $message, $typeofmsg);
mysqli_stmt_execute($stmt);
echo "Nachricht gespeichert!";