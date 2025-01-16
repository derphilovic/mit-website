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
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    $valid = 0;
    $validpswrd = 0;
     while($row = $result->fetch_assoc()) {
       if ($row["email"] == $email) {
           $valid = 1;
       }
       if ($row["username"] == $usrname){
        $valid = 1;
       }
       if ($row["password"] == $pswrd){
        $validpswrd = 1;
       }
     }
     if (! $valid) { 
        die("Kein Benutzername oder Email gefunden");
      }
    if (! $validpswrd) {
        die("Falsches Passwort!");
    }
   } 

echo"Eingeloggt!";

/*
dies ist das ende des Projektes...
Ich hab grad keinen Bock weiter zu Programmieren...
Vielleicht werd ich mich in Zukunft nochmal dransetzen
Im laufe des Projektes hab ich einiges neues gelernt
w.z.B. SQL und PHP, dazu hab ich einiges neues über Javascript gelernt.
Ich fand das Projekt echt cool und ich hoffe das wir bald wieder sowas machen.
falls sie ein secret möchten gucken sie das 
https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUXbmV2ZXIgZ29ubmEgZ2l2ZSB5b3UgdXA%3D
*/