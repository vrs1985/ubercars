<?php 


if (isset($_GET['exit'])) { 
unset($_SESSION['pass']); 
unset($_SESSION['login']); 
 header("Location: index.php");
  exit;
} 
  ?>