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
	<title>ADMINISTRATION</title>
  <style>
    .main {
      padding: 70px 0;
			height: auto;
    }
    .warning {
      width: 74%;
      margin-left: 13%;
      padding: 30px 20px;
      border: 2px solid #EA212D;
      text-align: center;
      font-size: 21px;
    }
    hr {
      display: block;
      width: 100%;
      border: 4px solid black;
    }
		.main h2 {
			text-align: center;
			padding: 0;
			margin-top: -30px;
		}
		.main p {
			margin-top: 35px;
		  font-size: 21px;
		}
		.main span {
			font-weight: bold;
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
      <a href="kategorija.php?kategorija=svijet">WORLD</a>
      <a href="kategorija.php?kategorija=ekonomija">ECONOMY</a>
			<a class="foc" href="administracija.php">ADMINISTRATION</a>
			<a href="unos.php">ENTRY</a>
			<a href='logout.php'>LOGOUT</a>
    </div>
  </div>

  <div class="main">
    <div class="wrapper">
			<h2>ADMINISTRATION</h2>
			<?php
				include 'connect.php';
				$uspjesnaPrijava = false;
				if(isset($_SESSION['username'])) {
					$imeKorisnika = $_SESSION['username'];
					$uspjesnaPrijava = true;
					if($_SESSION['razina'] == 1) {
						$admin = true;
					} else {
						$admin = false;
					}

					if (($uspjesnaPrijava == true && $admin == true) || (isset($_SESSION['$username'])) && $_SESSION['$level'] == 1) {
	          $query = "SELECT * FROM vijesti";
	          $result = mysqli_query($dbc, $query);
	          while($row = mysqli_fetch_array($result)) {
	            echo "<form enctype='multipart/form-data' method='POST' action=''>
	                <br/><br/><hr/><br/><br/><label for='naslov' required>Naslov vijesti:</label>
	                <input name='naslov' type='text' class='naslov' value='".$row['naslov']."' style='width:240px;height:30px;padding-left:5px;font-weight:bold;'/>
	                <br/><br/>

	                <label for='sazetak'>Kratki sadržaj vijesti (do 50 znakova):</label>
	                <br/>
	                <textarea name='sazetak' type='text' class='sazetak' style='width:400px;height:70px;padding:7px;'>".$row['sazetak']."</textarea>
	                <br/><br/>

	                <label for='tekst'>Sadržaj vijesti:</label>
	                <br/>
	                <textarea name='tekst' style='width:400px;height:180px;padding:7px;'>".$row['tekst']."</textarea>
	                <br/><br/>

	                <label for='slika'>Slika</label>
	                <br/>
	                <img src='img/".$row['slika']."' style='width:150px;' />
	                <br/>
	                <input name='slika' type='file' value='".$row['slika']."'>
	                <br/><br/>

	                <label for='kategorija'>Kategorija vijesti:</label><br/>
	                <select name='kategorija' class='form-field-textual' style='width:240px;height:30px;padding-left:5px;margin-top:5px;'>
										<option value='".$row['kategorija']."' disabled selected>".$row['kategorija']."</option>
										<option value='svijet'>Svijet</option>
										<option value='ekonomija'>Ekonomija</option>
	                </select>
	                <br/><br/>
	              ";

	            if($row['arhiva'] == 0) {
	              echo "Spremiti u arhivu?
	              <input type='checkbox' name='arhiva' class='option' value='option'>";
	            } else {
	              echo "Članak je u arhivi.
	              <input type='checkbox' name='arhiva' class='option' value='option' checked>";
	            }

	          	echo "
		            <br/><br/><br/>
		            <input type='hidden' name='id' class='form-field-textual' value='".$row['id']."'>
		            <input type='reset' style='padding:5px 10px;' value='Poništi' />
		            <input name='update' type='submit' style='padding:5px 10px;margin-left:10px;' value='Prihvati' />
		            <input name='delete' type='submit' style='padding:5px 10px;margin-left:10px;' value='Izbriši' />
	          	</form><br/><br/>";
	          }
	        } else if ($uspjesnaPrijava == true && $admin == false) {
						echo '<div class="welcome_nadmin"><p>Bok, <span>' . $imeKorisnika . '</span>!<br/><br/>You have successfully logged in, but you are not an administrator and therefore do not have sufficient rights to access this page..<br/><br/><br/></p></div>';
 					} else if (isset($_SESSION['username']) && $_SESSION['level'] == 0) {
 						echo '<div class="welcome_nadmin"><p>Bok, <span>' . $_SESSION['$username'] . '</span>!<br/><br/>You have successfully logged in, but you are not an administrator and therefore do not have sufficient rights to access this page..<br/><br/><br/></p></div>';
 					}
				} else if ($uspjesnaPrijava == false) {
					header('Location: login.php');
				}

        if(isset($_POST['delete'])) {
          $id = $_POST['id'];
          $query = "DELETE FROM vijesti WHERE id=$id";
          $result = mysqli_query($dbc, $query);
        }

        if(isset($_POST['update'])) {
					$naslov = $_POST['naslov'];
			    $sazetak = $_POST['sazetak'];
			    $tekst = $_POST['tekst'];
			    $kategorija = $_POST['kategorija'];
			    $slika = $_FILES['slika']['name'];
			    $tempSlika = $_FILES['slika']['tmp_name'];
					$id=$_POST['id'];
			    if (isset($_POST['arhiva'])) {
			      $arhiva = 1;
			    } else {
			      $arhiva = 0;
			    }

			    move_uploaded_file($_FILES['slika']['tmp_name'], __DIR__.'/img/'. $_FILES["slika"]['name']);

					$query = "UPDATE vijesti SET naslov='$naslov', sazetak='$sazetak', tekst='$tekst', slika='$slika', kategorija='$kategorija', arhiva='$arhiva' WHERE id=$id";
			    $result = mysqli_query($dbc,$query) or die('Error querying database.');
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
