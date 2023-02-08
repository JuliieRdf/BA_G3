<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Art</title>
  <!-- Load CSS -->
  <link rel="stylesheet" href="source/css/index.css">
  <link rel="stylesheet" href="/source/css/slide.css">
  <link rel="stylesheet" href="/source/css/header.css">
  <link rel="stylesheet" href="/source/css/footer.css">
  <link rel="stylesheet" href="/source/css/formgeneral.css">

  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Modification après bootstrap -->

  <link rel="stylesheet" href="/source/css/dashboard.css">

  <!-- Typos -->

  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>

<header>

  <nav class="navbar navbar-expand-lg-bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.php">
        <img class="logo" src="/source/images/Logo_noir.png" alt="Logo Bordeaux déraille" width="171" height="auto">


        <a class="navbar-brand">
          <h1>Bordeaux Déraille</h1>
        </a>


        <!--right align-->

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/views/backend/dashboard.php">Admin</a>
            </li>
          </ul>
        </div>



        <div class="d-flex">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="Search">
            <button class="btn btn-outline-success me-2" type="submit" style="border-width : 0; "><img src="/source/images/search.png" alt="" alt="Bootstrap" width="36px" height="auto"></button>
          </form>
          <a class="btn btn-primary m-1" href="/views/backend/dashboard.php" role="button" style=" border-width : 0; background-color: #6D071A; line-height: 29px; text-align: center; color: #FFFFFF;">Admin</a>

          <a class="btn btn-primary m-1" href="/views/backend/security/login.php" role="button" style=" border-width : 0; background-color: #6D071A; color: #FFFFFF;">
          <?php 
          if(isset($_SESSION["pseudo"])){
            echo ($_SESSION["pseudo"]);
          } else {
            echo ('Se connecter');
          }
          ?>
          </a>
          


        </div>
    </div>
    <div class="trait"></div>
  </nav>
</header>