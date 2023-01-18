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
			$id = $_GET['id'];
			$query = "SELECT title FROM news WHERE id=$id";
			$result = mysqli_query($dbc, $query);
			while($row = mysqli_fetch_array($result)) {
				echo $row['title'];
			}
		?>
	</title>
	<style>
		.main {
			height: 1400px;
		}
		article {
		  margin-top: 30px;
		  background-color: white;
		  width: 100%;
		  height: auto;
		  padding-bottom: 30px;
		}
		article:hover {
		  background-color: white;
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
			<?php
				if(isset($_SESSION['username'])) {
					echo "<a href='administration.php'>ADMINISTRATION</a>";
					echo "<a href='input.php'>ENTRY</a>";
					echo "<a href='logout.php'>LOGOUT</a>";
				} else {
					echo "<a href='categorys.php'>categorys</a>";
					echo "<a href='login.php'>Login</a>";
				}
			?>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
      <?php
        include 'connect.php';

        $id = $_GET['id'];
        if ($dbc) {
          $query = "SELECT * FROM news WHERE id=$id";
          $result = mysqli_query($dbc, $query);
          while($row = mysqli_fetch_array($result)) {
            echo "
              <article>
              <p class='kat'>".$row['category']."</p>
              <h2>".$row['title']."</h2>
              <p class='datetime'>Objavljeno ".$row['date']." u ".$row['time']."</p>
              <img class='article_image' src='img/".$row['image']."'/>
              <p class='details'>".$row['details']."</p>
              <p class='text'>".$row['text']."</p>
              </article>";
          }
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
