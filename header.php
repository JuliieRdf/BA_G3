
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


        <a class="navbar-brand"><h1>Bordeaux Déraille</h1></a>


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
            <button class="btn btn-outline-success me-2"  type="submit" style="border-width : 0; "><img src="/source/images/search.png" alt="" alt="Bootstrap" width="36px" height="auto"></button>
          </form>
          <a class="btn btn-primary m-1" href="/views/backend/dashboard.php" role="button" style=" border-width : 0; background-color: #6D071A; line-height: 29px; text-align: center; color: #FFFFFF;">Admin</a>
          <a class="btn btn-primary m-1" href="/views/backend/login.php" role="button" style=" border-width : 0; background-color: #6D071A; color: #FFFFFF;">Se connecter</a>
        </div>
    </div>
    <div class="trait"></div>
  </nav>
</header> 