<?php
include("functions.php");
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register / login</title>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="css/styles_less.css">
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
    <header class="container">
      <div class="container-fluid logo"><img src="img/logo-banecve.png" alt="" class="img-responsive"/></div>

      <nav class="container-fluid">
        <ul class="nav nav-pills nav-justified">
          <li><a href="index.html">Home</a></li>
          <li><a href="aboutMe.html">About me</a></li>
          <li><a href="myWork.html">My Work</a></li>
          <li><a href="skills.html">Skills</a></li>
          <li><a href="#footer">Contact</a></li>
          <li class="active"><a href="reglogin.php">login</a></li>
        </ul>
      </nav>
    </header>
    <div class="line">&nbsp;</div>

    <div style="min-height: 500px; padding-top: 50px;" class="container">
      <div class="panel panel-default col-sm-6">
        <div class="panel-heading">
          <h3 class="panel-title">Register</h3>
        </div>
        <div class="panel-body">

          <form name="register" method="post" action="register.php">
            <div class="form-group">
              <label>ime</label>
              <input name="ime" type="text" class="form-control" placeholder="Ime">
            </div>
            <div class="form-group">
              <label>prezime</label>
              <input name="prezime" type="text" class="form-control" placeholder="Prezime">
            </div>
            <div class="form-group">
              <label>korisnicko ime</label>
              <input name="username" type="text" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="password" class="form-control" placeholder="password">
            </div>
            <input class="btn btn-default" type="submit" name="register" value="Register">
          </form>
        </div>
      </div>
      <div class="panel panel-default col-sm-6">
        <div class="panel-heading">
          <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
          <?php
          session_start();
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
            echo "<p><a href='logout.php'>logout</a></p>";
          } else {
            ?>
            <form name="login" method="post" action="">
              <div class="form-group">
                <label>username</label>
                <input name="username" type="text" class="form-control" placeholder="username">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="password">
              </div>
              <input class="btn btn-default" type="submit" name="login" value="Login">
            </form>
            <?php
          }
          ?>
        </div>
      </div>

    </div>









    <div class="container-fluid footerLine">&nbsp;</div>
    <footer class="container-fluid " id="footer">
      <div class="container footer">
        <div class="footerInfoBox col-sm-6">
          <p>Mail : banecve {at} gmail {dot} com</p>
          <p >Call : +38162281600</p>
          <ul> 
            <li><a href="http://www.facebook.com/branislav.cvetanovic" title="Find me on Facebook" target="_blank"> <img src="img/facebook.png" alt="Facebook" width="64" height="64" /></a> </li>
            <li><a href="callto://banecve" title="Add me on Skype" target="_blank"> <img src="img/skype.png" alt="Skype" width="64" height="64" /></a> </li>
            <li><a href="https://plus.google.com/+BranislavCvetanovic" title="Add me on Google +" target="_blank"> <img src="img/google.png" alt="Google plus" width="64" height="64" /></a></li>
          </ul>
          <h4>Career</h4>
          <p>A Front-End Web Coder. Loves to craft user experiences. Writes Clean code.</p>
          <h4>Skills</h4>
          <ul>
            <li>[X]HTML/CSS</li>
            <li>HTML5/CSS3</li>
            <li>PSD to [X]HTML</li>
            <li>PSD to CMS</li>
            <li>[X]HTML to CMS</li>
            <li>Wordpress</li>
            <li>CMS-MS</li>
            <li>TYPO3</li>
          </ul>
        </div>
        <div class="footerContactForm col-sm-6">
          <!--<form name="contact" method="post" action="submitForm.php">
            <div class="form-group">
              <label for="yourName">Your Name</label>
              <input name="yourName" type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="yourEmail">Your Email</label>
              <input name="yourEmail" type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="yourSubject">Your Subject</label>
              <input name="yourSubject" type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <label for="yourDescription">Your Description</label>
              <textarea class="form-control" rows="4" placeholder="Description"></textarea>
            </div>
            <input class="btn btn-default" type="submit" name="send" value="Send">
          </form>-->
        </div>
      </div>
    </footer>
    <div class="footerInfo">Neki Copiright tekst </div>
    <!-- BOOTSTRAP -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
  </body>
</html>