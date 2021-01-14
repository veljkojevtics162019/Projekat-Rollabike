<?php
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$pol = $_POST['pol'];
$adresa = $_POST['adresa'];
$brojtelefona = $_POST['brojtelefona'];
$email = $_POST['email'];
$lozinka = password_hash($_POST['lozinka'], PASSWORD_BCRYPT);

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "rollabike";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    $sql = "INSERT INTO korisnici (id, ime, prezime, pol, adresa, brojtelefona, email, lozinka) VALUES ('','$ime', '$prezime', '$pol', '$adresa', '$brojtelefona', '$email', '$lozinka')";

    if ($conn->query($sql) === TRUE) {
        header("location: ../login/login.html");
      } else {
        echo ('Greska!');
      }
      $conn->close();
    }
?>

