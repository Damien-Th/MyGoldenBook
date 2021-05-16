<!-- <?php //require('menu.php');?> -->
<?php require('function.php');?> 
<?php require_once('functions/auth.php');?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title> <?php if(isset($title)) {echo $title;} else { echo "Mon site";} ?> </title>

  </head>
  <body>
    <div class="col-md-8 py-5 px-3 mx-auto">

      <header class="pb-3 mb-5 border-bottom">
      
     

      <nav>
      <ul class="d-flex p-2 bd-highlight">
      <?= nav_menu()?>
      </ul>
      <ul class="navbar-nav">
      <?php if(est_connecte()){
        ?> 
        <li class="nav-item" ><a class="nav-link" href="logout.php">Se déconnecter</a></li>
        <?php
      }
      ?>
      </ul>
      </nav>

      </header>