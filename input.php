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
  <title>Input PODATAKA</title>
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
    .details {
      height: 70px;
    }
    input {
      width: 290px;
      height: 35px;
      padding-left: 10px;
      margin-bottom: 15px;
    }
    .title, .category {
      width: 350px;
      height: 30px;
      margin-top: 5px;
      margin-left: 10px;
    }
    .image {
      width: 420px;
      margin-top: 10px;
    }
    .category {
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
    <a href="index.php"><img src="img/bbc.jpg" /></a>
  </div>

  <div class="nav">
    <div class="wrapper">
      <a href="index.php">HOME</a>
      <a href="category.php?category=world">WORLD</a>
      <a href="category.php?category=economy">ECONOMY</a>
			<a href="administration.php">ADMINISTRATION</a>
			<a class="foc" href="input.php">ENTRY</a>
			<a href="logout.php">LOGOUT</a>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
      <?php
      include 'connect.php';
      

      if(isset($_SESSION['username'])) {
      echo '<h1>CONTENT ENTRY FORM<br/>IN THE DATABASE</h1>
      <form enctype="multipart/form-data" method="POST" action="script.php">
        <label for="title" required>News title:</label>
        <input name="title" id="title" type="text" class="title" required/>
        <span id="porukaTitle" class="bojaPoruke"></span>
        <br/><br/>

        <label for="details">Short news content (up to 100 characters):</label>
        <br/>
        <span id="porukaAbout" class="bojaPoruke"></span>
        <textarea name="details" id="details" type="text" class="details" required></textarea>
        <br/><br/>

        <label for="text">News content:</label>
        <br/>
        <span id="porukaContent" class="bojaPoruke"></span>
        <textarea name="text" id="text" required></textarea>
        <br/><br/>

        <label for="image">image</label>
        <br/>
        <input name="image" id="image" type="file" class="image" required/>
        <span id="messageImage" class="bojaPoruke"></span>
        <br/>

        <label for="category" required>News category:</label>

        <select name="category" id="category" class="category" required>
          <option value="" disabled selected>Select a category</option>
          <option value="world">World</option>
          <option value="economy">economy</option>
        </select>
        <span id="messageCategory" class="bojaPoruke"></span>
        <br/><br/>

        <label for="archives">Save to archive?</label>
        <input type="checkbox" name="archives" class="option" value="option">
        <br/>

        <input type="reset" class="button_no" value="Undo" />
        <input name="submit" type="submit" class="button_yes" id="slanje" value="save" />
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
