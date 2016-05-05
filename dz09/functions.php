<?php

include 'config.php';

function checkIfUserExists($username) {
  global $conn;
  $sql = "SELECT * FROM users WHERE username=?";
  $query = $conn->prepare($sql);
  $query->bind_param('s', $username);
  $query->execute();
  $query->store_result();
  if ($query->num_rows > 0) {
    echo 'korisnik postoji';
    return true;
  } else {
    echo 'korisnik ne postoji';
    return false;
  }
  $query->close();
}

function getImeAndPrezimeForUsername($username) {
  global $conn;
  $sql = "SELECT ime,prezime FROM users WHERE username=?";
  $query = $conn->prepare($sql);
  $query->bind_param('s', $username);
  $query->execute();
  $query->store_result();
  $query->bind_result($ime, $prezime);
  $returnvalue = "";
  while ($query->fetch()) {
    $returnvalue = $ime . " " . $prezime;
  }
  $query->free_result();
  $query->close();
  return $returnvalue;
}

function dodajKorisnik($ime, $prezime, $username, $password) {
  global $conn;
  if (!checkIfUserExists($username)) {
    $insert = "INSERT INTO users (ime,prezime,username,pass) VALUES (?,?,?,?)";
    $query = $conn->prepare($insert);
    $query->bind_param('ssss',$ime,$prezime,$username,md5($password));
    $query->execute();
    $query->close();
    echo "Uspešna registracija";
  } else {
    echo "Korisnik vec postoji!";
  }
}

function proveriKorisnika($username, $password) {
  global $conn;
  $sql = "SELECT * FROM users WHERE username=? AND pass=?";
  $query = $conn->prepare($sql);
  $query->bind_param('ss', $username, md5($password));
  $query->execute();
  $query->store_result();
  if ($query->num_rows > 0) {
    return 1;
  } else {
    return 0;
  }
  $query->close();
}

function getAllUsers() {
  global $conn;
  $userinfo = "SELECT * FROM users";
  if ($stmt = $conn->prepare($userinfo)) {
    $stmt->execute();
    if (!$stmt->execute()) {
      echo $stmt->error . ' in query: ' . $userinfo;
    } else {
      $parameters = array();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {
        array_push($parameters, $row);
      }
      $stmt->close();
      return $parameters;
    }
    $stmt->close();
  }
}
?>