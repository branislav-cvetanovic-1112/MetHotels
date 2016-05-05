<?php
session_start();
include("functions.php");
if (isset($_POST['login'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $password = $_POST['password'];
  if (!empty($username) && !empty($password)) {
    if (proveriKorisnika($username, $password)) {
      $_SESSION['username'] = $username;
    } else {
      echo "Pogresan username ili password";
    }
  } else {
    echo "Niste uneli sve podatke";
  }
}
if (isset($_SESSION['username'])) {
  echo "Logovan si kao: " . $_SESSION['username'];
} else {
  ?>
  <form action="login.php" method="POST">
    Username: <input type="text" name="username"/><br/>
    Password: <input type="password" name="password"/><br/>
    <input type="submit" name="submit" value="Loguj se"/>
  </form>
  <?php
}
?>