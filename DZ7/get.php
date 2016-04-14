<?php

$ime = $_GET['ime'];
$prezime = $_GET['prezime'];
$datum = $_GET['datum'];

if (isset($_GET['submit'])) {
  echo "Podaci: " . $ime . " " . $prezime . " " . $datum;
}
$bday = new DateTime($datum);
$today = new DateTime(date("Y/m/d"));
$diff = $today->diff($bday);
echo nl2br("\r\n");
printf('i mator je: ' . '%d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
?>

