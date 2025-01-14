<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <script src="https://kit.fontawesome.com/431ac6197f.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Shop</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<section id="header">
<a href="index.html"><img src="graphics/2.png" class="logo" alt=""></a>
<div>
    <ul id="navbar">
        <li><a href="index.html">Start</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="about.html">Über uns</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
        <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
        <li><a  class="active"  href="account.html"><i class="fa-solid fa-user"></i></a></li>
    </ul>
</div>
</section>
<?php
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$adress = $_POST["adress"];
$passw = $_POST["passw"];
$passwrpt = $_POST["passwrpt"];

$host = "localhost";
$dbname = "message_db";
$usernme = "root";
$password = "";

$conn = mysqli_connect($host, $usernme, $password, $dbname);

 if (mysqli_connect_errno()) {
    die("Connection error! Fuck you!" . mysqli_connect_error());
 };

 $sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if ($row["email"] == $email) {
          die("Email schon in benutzung");
      }
      if ($row["username"] == $username){
          die("Nutzername schon in verwendung");
      }
    }
  } 
  
  if (! $name) {
    echo'<button onclick="history.back()"><i class="fa-solid fa-arrow-left"></i></button>';
    die("Name eingeben!");
}
if (! $username) {
    echo'<button onclick="history.back()"><i class="fa-solid fa-arrow-left"></i></button>';
    die("Nutzername eingeben!");
}
if (! $email) {
    echo'<button onclick="history.back()"><i class="fa-solid fa-arrow-left"></i></button>';
    die("Email eingeben!");
}
if (! $adress) {
    echo'<button onclick="history.back()"><i class="fa-solid fa-arrow-left"></i></button>';
    die("Adresse eingeben!");
}
if (! $passw) {
    echo'<button onclick="history.back()"><i class="fa-solid fa-arrow-left"></i></button>';
    die("Passwort eingeben!");
}

if ($passw  != $passwrpt) {
    echo'<button onclick="history.back()"><i class="fa-solid fa-arrow-left"></i></button>';
die("Passwort falsch wiederholt");
}

$sqql = "INSERT INTO users (name, username, email, adress, password)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( !mysqli_stmt_prepare($stmt, $sqql)) {
    die(mysqli_error($conn));
};

mysqli_stmt_bind_param($stmt, "sssss", $name, $username, $email, $adress, $passw);
mysqli_stmt_execute($stmt);
echo "Account erstellt!";
echo '<div id=\"login_link\">
                <a href="log-in.html">Log in</a>
                </div>'; 