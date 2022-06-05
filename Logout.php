<?php
  require_once('connect.php');
  $_SESSION['login'];
  session_destroy();
  header("Location:Login.php");
?>