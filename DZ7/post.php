<?php

$type = $_POST['type'];
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$datum = $_POST['datum'];
//echo "Podaci: " . $ime . " " . $prezime . " " . $datum;
$bday = new DateTime($datum);
$today = new DateTime(date("Y/m/d"));
$diff = $today->diff($bday);
echo nl2br("\r\n" . 'i mator je: ');

if ($type == "json") {
  header("Content-type: application/json");
  $resenje = array('%d godina, %d meseci, %d dana', $diff->y, $diff->m, $diff->d);
  echo json_encode($resenje);
} else {
  header("Content-type: text/xml");
  $resenje = printf('%d godina, %d meseci, %d dana', $diff->y, $diff->m, $diff->d);
  $xml = new SimpleXMLElement('<root/>');
  array_walk_recursive($resenje, array($xml, 'addChild'));
  print $xml->asXML();
}
?>