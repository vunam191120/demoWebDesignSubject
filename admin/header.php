<?php
require_once "dbconnect.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=l, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css?v=<34>" type="text/css">
  <script src="js/script.js"></script>
</head>

<body>
  <img class="title" src="images/banner_home3.png">
  <div class="header">
    <h2 id="brand">Pluuu</h2>
<!-- Set the session of admin in order to chose the login or logout button -->
    <?php
    if(!isset($_SESSION['usernameAdmin']) && !isset($_SESSION['username'])){ ?>
      <h4 class="loginHomeBtn"><a href="login.php">Log in</a></h4>
    <?php }
    if(isset($_SESSION['usernameAdmin']) || isset($_SESSION['username'])) { ?>
      <h4 class="loginHomeBtn"><a href="logout.php">Log out</a></h4>      
    <?php } ?>
    
<!--navigation -->
    <nav>
      <?php if (isset($_SESSION['usernameAdmin'])) { ?>
        <a href="home_admin.php">Home</a>
      <?php } else { ?>
        <a href="home_user.php">Home</a>
      <?php } ?>
      <?php if (!isset($_SESSION['usernameAdmin'])) { ?>      
      <a href="#about">About</a>
      <?php } ?>
      <?php if (isset($_SESSION['usernameAdmin'])) { ?>      
      <a href="manage_category.php">Manage Category</a>
      <?php } ?>       
      <?php if (!isset($_SESSION['usernameAdmin'])) { ?>
        <a href="home_admin.php">Admin</a>
      <?php } else { ?>
        <a href="manage_product.php">Manage Product</a>
      <?php } ?>
      <?php if (isset($_SESSION['usernameAdmin'])) { ?>
        <a href="add_product.php">Add Product</a>
        <a href="add_category.php">Add Category</a>
        <a href="product.php">Product</a>
      <?php } else { ?>
        <a href="product.php">Product</a>
      <?php } ?>
    </nav>
    <h1 id="title1">SPRING 1955 Herabit</h1>
    <h1 id="title2"><a href="product.php">View Collection</a></h1>
      <h1 id="title3"><a href="#footer">Get in touch</a></h1> 
  </div>
  <br><br>
</body>

</html>