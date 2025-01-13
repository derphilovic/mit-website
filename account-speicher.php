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
    die("Name eingeben!");
}
if (! $username) {
    die("Nutzername eingeben!");
}
if (! $email) {
    die("Email eingeben!");
}
if (! $adress) {
    die("Adresse eingeben!");
}
if (! $passw) {
    die("Passwort eingeben!");
}

if ($passw  != $passwrpt) {
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