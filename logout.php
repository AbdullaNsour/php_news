<?php
  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['razina']);
  header("Location:login.php");
?>
