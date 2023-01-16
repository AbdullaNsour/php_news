<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
	<title>NASLOVNICA</title>
	<style>

	</style>
</head>
<body>
  <div class="logo">
    <a href="index.php"><img src="bbc.jpg" /></a>
  </div>

  <div class="nav">
    <div class="wrapper">
      <a class="foc" href="index.php">HOME</a>
      <a href="kategorija.php?kategorija=svijet">WORLD</a>
      <a href="kategorija.php?kategorija=ekonomija">ECONOMY</a>
			<?php
				if(isset($_SESSION['username'])) {
					echo "<a href='administracija.php'>ADMINISTRATION</a>";
					echo "<a href='unos.php'>ENTRY</a>";
					echo "<a href='logout.php'>LOGOUT</a>";
				} else {
					echo "<a href='registracija.php'>REGISTRACIJA</a>";
					echo "<a href='login.php'>login</a>";
				}
			?>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
      <h1 id="svijet">SVIJET</h1>
			<?php
				include 'connect.php';
				define('UPLPATH', 'img/');
			?>
			<div class="sport">
				<?php
					$query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='svijet' LIMIT 4";
					$result = mysqli_query($dbc, $query);
					while($row = mysqli_fetch_array($result)) {
						echo "<article>
							<div class='news'>
							<div class='news_image'><img src='" .UPLPATH.$row['slika']. "'></div>
							<h4><a href='clanak.php?id=".$row['id']."'>".$row['naslov']."</a></h4>
							<h5>".$row['sazetak']."</h5>
							</div>
							</article>";
					}?>
			</div>

			<h1 id="ekonomija">EKONOMIJA</h1>
			<div class="ekonomija">
				<?php
					$query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='ekonomija' LIMIT 4";
					$result = mysqli_query($dbc, $query);
					while($row = mysqli_fetch_array($result)) {
						echo "<article>
							<div class='news'>
							<div class='news_image'><img src='" .UPLPATH.$row['slika']. "'></div>
							<h4><a href='clanak.php?id=".$row['id']."'>".$row['naslov']."</a></h4>
							<h5>".$row['sazetak']."</h5>
							</div>
							</article>";
					}?>
			</div>
    </div>
  </div>

  <footer>
  <div class="wrapper">
      <br/><p>Project assignment from the course <i>Web Application Programming</i></p>
      <br/><p>Author of the project: <b>Mario Vidovic</b><br/>alnsour.194@gmail.com</p>
			<br/><p>Year of manufacture: 2023.</p>
    </div>
  </footer>
</body>
</html>
