<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
  <title>UNOS PODATAKA</title>
  <style>
    .main {
      height: 1150px;
    }
    h1 {
      text-align: center;
      padding: 35px 0;
    }
    textarea {
      width: 420px;
      height: 250px;
      margin-top: 5px;
      margin-bottom: 15px;
      padding: 9px 0 0 11px;
    }
    .sazetak {
      height: 70px;
    }
    input {
      width: 290px;
      height: 35px;
      padding-left: 10px;
      margin-bottom: 15px;
    }
    .naslov, .kategorija {
      width: 350px;
      height: 30px;
      margin-top: 5px;
      margin-left: 10px;
    }
    .slika {
      width: 420px;
      margin-top: 10px;
    }
    .kategorija {
      width: 190px;
      height: 35px;
      padding-left: 4px;
    }
    .option {
      width: 16px;
      height: 17px;
      margin-left: 5px;
    }
    .button_yes, .button_no {
      border: 1.5px solid black;
      width: 135px;
      height: 35px;
      margin-top: 20px;
      margin-left: 30px;
      background-color: #D9D9D9;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    	border-radius: 7px;
    }
    .button_yes:hover {
      background-color: #2EB82E;
      color: white;
    }
    .button_no:hover {
      background-color: #CC0000;
      color: white;
    }
    .bojaPoruke {
      margin-top: -10px;
    }
  </style>
</head>
<body>
  <div class="logo">
    <a href="index.php"><img src="bbc.jpg" /></a>
  </div>

  <div class="nav">
    <div class="wrapper">
      <a href="index.php">HOME</a>
      <a href="kategorija.php?kategorija=svijet">WORLD</a>
      <a href="kategorija.php?kategorija=ekonomija">ECONOMY</a>
			<a href="administracija.php">ADMINISTRATION</a>
			<a class="foc" href="unos.php">ENTRY</a>
			<a href="logout.php">LOGOUT</a>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
      <?php
      include 'connect.php';
      

      if(isset($_SESSION['username'])) {
      echo '<h1>CONTENT ENTRY FORM<br/>IN THE DATABASE</h1>
      <form enctype="multipart/form-data" method="POST" action="skripta.php">
        <label for="naslov" required>News title:</label>
        <input name="naslov" id="naslov" type="text" class="naslov" required/>
        <span id="porukaTitle" class="bojaPoruke"></span>
        <br/><br/>

        <label for="sazetak">Short news content (up to 100 characters):</label>
        <br/>
        <span id="porukaAbout" class="bojaPoruke"></span>
        <textarea name="sazetak" id="sazetak" type="text" class="sazetak" required></textarea>
        <br/><br/>

        <label for="tekst">News content:</label>
        <br/>
        <span id="porukaContent" class="bojaPoruke"></span>
        <textarea name="tekst" id="tekst" required></textarea>
        <br/><br/>

        <label for="slika">image</label>
        <br/>
        <input name="slika" id="slika" type="file" class="slika" required/>
        <span id="porukaSlika" class="bojaPoruke"></span>
        <br/>

        <label for="kategorija" required>News category:</label>

        <select name="kategorija" id="kategorija" class="kategorija" required>
          <option value="" disabled selected>Select a category</option>
          <option value="svijet">World</option>
          <option value="ekonomija">economy</option>
        </select>
        <span id="porukaKategorija" class="bojaPoruke"></span>
        <br/><br/>

        <label for="arhiva">Save to archive?</label>
        <input type="checkbox" name="arhiva" class="option" value="option">
        <br/>

        <input type="reset" class="button_no" value="Poništi" />
        <input name="submit" type="submit" class="button_yes" id="slanje" value="Pohrani" />
      </form>';
    }?>
    </div>
  </div>

  <footer>
  <div class="wrapper">
      <br/><p>Project assignment from the course <i>Web Application Programming</i></p>
      <br/><p>Author of the project: <b>Mario Vidovic</b><br/>alnsour.194@gmail.com</p>
			<br/><p>Year of manufacture: 2023.</p>
    </div>
  </footer>

  <script src="check.js"></script>
</body>
</html>
