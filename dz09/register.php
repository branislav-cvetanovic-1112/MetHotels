<?php

include("functions.php");

ini_set('display_errors', '0');
error_reporting(E_ALL | E_STRICT);

if (isset($_POST['register'])) {
  $ime = $_POST['ime'];
  $prezime = $_POST['prezime'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (!empty($ime) && !empty($prezime) && !empty($username) && !empty($password)) {
    dodajKorisnik($ime, $prezime, $username, $password);
    echo "Uspešna registracija";
    header("Location: reglogin.php");
  } else {
    echo "Niste popunili sva polja";
  }
}
?>
