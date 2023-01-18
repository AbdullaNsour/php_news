<?php
  include 'connect.php';
  define('UPLPATH', 'img/');

  if ($dbc && isset($_POST['submit'])) {
    $date = date('d.m.Y.');
    $time = date('H:i');
    $title = $_POST['title'];
    $details = $_POST['details'];
    $text = $_POST['text'];
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];
    if (isset($_POST['archives'])) {
      $archives = 1;
    } else {
      $archives = 0;
    }

    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/img/'. $_FILES["image"]['name']);
    
    $query = "INSERT INTO news (date, time, title, details, text, image, category, archives) VALUES ('$date', '$time', '$title', '$details', '$text', '$image', '$category', '$archives')";

    $result = mysqli_query($dbc,$query) or die('Error querying database.');
    header('Location:input.php');
  }

  mysqli_close($dbc);
?>
