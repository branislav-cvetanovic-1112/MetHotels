<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BC-1112 - DZ07</title>
    <link href="css/normalize.css" rel="stylesheet" type="text/css"/>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/styles_less.css" />
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body>
    <div class="container">
      <h1>ZADATAK 7</h1>
      <p>Napraviti POST I GET servis po izboru i prikazati njegov ra d kroz POSTMAN. Servisi moraju da rade nešto korisno (da imaju argumente koji se obrađuju zarad nekog rezultata).</p>
      <p>Domaći zadatak smestiti na GitHub sa  imenom commit-a IT255-DZXX-ime-prezime-brojindeksai poslati na mejl: vuk.vasic@metropolitan.ac.rs sa naslovom IT255–DZ07.</p>
      <p style="font-weight: bold">php skripte racunaju koliko je neka osoba mlada...</p>
      <div class="col-sm-6">
        <h1>POST forma</h1>
        <form action="post.php" method="POST" class="">
          <div class="form-group">
            <select name="type">
              <option value="json">json</option>
              <option value="xml">xml</option>
            </select> 
          </div>
          <div class="form-group">
            Ime: <input type="text" name="ime"/> <br/>
          </div>
          <div class="form-group">
            Prezime: <input type="text" name="prezime"/> <br/>
          </div>
          <div class="form-group">
            Format datuma: D/M/Y<br/>
            Datum rođenja: <input type="date" name="datum"/> <br/>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Pošalji post zahtev"/>
          </div>
        </form>
      </div>
      <div class="col-sm-6">
        <h1>GET forma</h1>
        <form action="get.php" method="GET" class="">
          <div class="form-group">
            <select name="type">
              <option value="json">json</option>
              <option value="xml">xml</option>
            </select> 
          </div>
          <div class="form-group">
            Ime: <input type="text" name="ime"/> <br/>
          </div>
          <div class="form-group">
            Prezime: <input type="text" name="prezime"/> <br/>
          </div>
          <div class="form-group">
            Format datuma: D/M/Y<br/>
            Datum rođenja: <input type="date" name="datum"/> <br/>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Pošalji get zahtev"/>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

