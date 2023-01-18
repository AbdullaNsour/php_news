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
      <a href="category.php?category=world">WORLD</a>
      <a href="category.php?category=economy">ECONOMY</a>
			<a class="foc" href="administration.php">ADMINISTRATION</a>
			<a href="input.php">ENTRY</a>
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
					$User_name = $_SESSION['username'];
					$uspjesnaPrijava = true;
					if($_SESSION['level'] == 1) {
						$admin = true;
					} else {
						$admin = false;
					}

					if (($uspjesnaPrijava == true && $admin == true) || (isset($_SESSION['$username'])) && $_SESSION['$level'] == 1) {
	          $query = "SELECT * FROM news";
	          $result = mysqli_query($dbc, $query);
	          while($row = mysqli_fetch_array($result)) {
	            echo "<form enctype='multipart/form-data' method='POST' action=''>
	                <br/><br/><hr/><br/><br/><label for='title' required>News title:</label>
	                <input name='title' type='text' class='title' value='".$row['title']."' style='width:240px;height:30px;padding-left:5px;font-weight:bold;'/>
	                <br/><br/>

	                <label for='details'>Short news content (up to 50 characters):</label>
	                <br/>
	                <textarea name='details' type='text' class='details' style='width:400px;height:70px;padding:7px;'>".$row['details']."</textarea>
	                <br/><br/>

	                <label for='text'>News content:</label>
	                <br/>
	                <textarea name='text' style='width:400px;height:180px;padding:7px;'>".$row['text']."</textarea>
	                <br/><br/>

	                <label for='image'>image</label>
	                <br/>
	                <img src='img/".$row['image']."' style='width:150px;' />
	                <br/>
	                <input name='image' type='file' value='".$row['image']."'>
	                <br/><br/>

	                <label for='category'>News category::</label><br/>
	                <select name='category' class='form-field-textual' style='width:240px;height:30px;padding-left:5px;margin-top:5px;'>
										<option value='".$row['category']."' disabled selected>".$row['category']."</option>
										<option value='World'>World</option>
										<option value='Economy'>Economy</option>
	                </select>
	                <br/><br/>
	              ";

	            if($row['archives'] == 0) {
	              echo "Save to archive?
	              <input type='checkbox' name='archives' class='option' value='option'>";
	            } else {
	              echo "The article is in the archive.
	              <input type='checkbox' name='archives' class='option' value='option' checked>";
	            }

	          	echo "
		            <br/><br/><br/>
		            <input type='hidden' name='id' class='form-field-textual' value='".$row['id']."'>
		            <input type='reset' style='padding:5px 10px;' value='cancel' />
		            <input name='update' type='submit' style='padding:5px 10px;margin-left:10px;' value='Accept' />
		            <input name='delete' type='submit' style='padding:5px 10px;margin-left:10px;' value='Delete' />
	          	</form><br/><br/>";
	          }
	        } else if ($uspjesnaPrijava == true && $admin == false) {
						echo '<div class="welcome_nadmin"><p>Hi, <span>' . $User_name . '</span>!<br/><br/>You have successfully logged in, but you are not an administrator and therefore do not have sufficient rights to access this page..<br/><br/><br/></p></div>';
 					} else if (isset($_SESSION['username']) && $_SESSION['level'] == 0) {
 						echo '<div class="welcome_nadmin"><p>Hi, <span>' . $_SESSION['$username'] . '</span>!<br/><br/>You have successfully logged in, but you are not an administrator and therefore do not have sufficient rights to access this page..<br/><br/><br/></p></div>';
 					}
				} else if ($uspjesnaPrijava == false) {
					header('Location: login.php');
				}

        if(isset($_POST['delete'])) {
          $id = $_POST['id'];
          $query = "DELETE FROM news WHERE id=$id";
          $result = mysqli_query($dbc, $query);
        }

        if(isset($_POST['update'])) {
					$title = $_POST['title'];
			    $details = $_POST['details'];
			    $text = $_POST['text'];
			    $category = $_POST['category'];
			    $image = $_FILES['image']['name'];
			    $tempImage = $_FILES['image']['tmp_name'];
					$id=$_POST['id'];
			    if (isset($_POST['archives'])) {
			      $archives = 1;
			    } else {
			      $archives = 0;
			    }

			    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/img/'. $_FILES["image"]['name']);

					$query = "UPDATE news SET title='$title', details='$details', text='$text', image='$image', category='$category', archives='$archives' WHERE id=$id";
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
