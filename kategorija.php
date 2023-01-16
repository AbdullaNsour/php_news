<?php
	session_start();
	include 'connect.php';
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
	<title>
		<?php
			$kategorija = $_GET['kategorija'];
			echo strtoupper($kategorija);
		?>
	</title>
	<style>
		article {
			margin-bottom: 10px;
			padding-bottom: 10px;
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
			<?php
				$kategorija = $_GET['kategorija'];
				if($kategorija == 'svijet') {
					echo "<a class='foc' href='kategorija.php?kategorija=svijet'>WORLD</a>";
				} else {
					echo "<a href='kategorija.php?kategorija=svijet'>WORLD</a>";
				}
				if($kategorija == 'ekonomija') {
					echo "<a class='foc' href='kategorija.php?kategorija=ekonomija'>ECONOMY</a>";
				} else {
					echo "<a href='kategorija.php?kategorija=ekonomija'>ECONOMY</a>";
				}
				if(isset($_SESSION['username'])) {
					echo "<a href='administracija.php'>ADMINISTRATION</a>";
					echo "<a href='unos.php'>ENTRY</a>";
					echo "<a href='logout.php'>LOGOUT</a>";
				} else {
					echo "<a href='registracija.php'>ADMINISTRATION</a>";
					echo "<a href='login.php'>Login</a>";
				}
			?>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
				<?php

					define('UPLPATH', 'img/');
					$kategorija = $_GET['kategorija'];
					$query = "SELECT * FROM vijesti WHERE kategorija='$kategorija' AND arhiva=0";
					$result = mysqli_query($dbc, $query);
					echo "<h1>$kategorija</h1>";
					while($row = mysqli_fetch_array($result)) {
						echo "<article>
							<div class='news'>
							<div class='news_image'><img src='" .UPLPATH.$row['slika']. "'></div>
							<h4><a href='clanak.php?id=".$row['id']."'>".$row['naslov']."</a></h4>
							<h5>".$row['sazetak']."</h5>
							</div>
							</article>";
					}
				?>
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
