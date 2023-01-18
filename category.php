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
			$category = $_GET['category'];
			echo strtoupper($category);
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
    <a href="index.php"><img src="img/bbc.jpg" /></a>
  </div>

  <div class="nav">
    <div class="wrapper">
			<a href="index.php">HOME</a>
			<?php
				$category = $_GET['category'];
				if($category == 'world') {
					echo "<a class='foc' href='category.php?category=WORLD'>WORLD</a>";
				} else {
					echo "<a href='category.php?category=world'>WORLD</a>";
				}
				if($category == 'economy') {
					echo "<a class='foc' href='category.php?category=economy'>ECONOMY</a>";
				} else {
					echo "<a href='category.php?category=economy'>ECONOMY</a>";
				}
				if(isset($_SESSION['username'])) {
					echo "<a href='administration.php'>ADMINISTRATION</a>";
					echo "<a href='input.php'>ENTRY</a>";
					echo "<a href='logout.php'>LOGOUT</a>";
				} else {
					echo "<a href='categorys.php'>ADMINISTRATION</a>";
					echo "<a href='login.php'>Login</a>";
				}
			?>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
				<?php

					define('UPLPATH', 'img/');
					$category = $_GET['category'];
					$query = "SELECT * FROM news WHERE category='$category' AND archives=0";
					$result = mysqli_query($dbc, $query);
					echo "<h1>$category</h1>";
					while($row = mysqli_fetch_array($result)) {
						echo "<article>
							<div class='news'>
							<div class='news_image'><img src='" .UPLPATH.$row['image']. "'></div>
							<h4><a href='article.php?id=".$row['id']."'>".$row['title']."</a></h4>
							<h5>".$row['details']."</h5>
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
