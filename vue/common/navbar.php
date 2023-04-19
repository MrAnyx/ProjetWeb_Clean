<?php require __DIR__.'../../controller/menus_controller.php' ?>

<nav class="navbar navbar-expand-md navbar-dark sticky-top opaque-navbar bg-dark" id = "menu">
  <div class="container-fluid">
    <a href="index.php" class="navbar-brand"> <img src="./src/logofooter.png" alt="logo header" id = "logoHeader" style="width:92px;height:57px;"> </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php
        if(isset($_SESSION['id'])){
          echo '<li class="nav-item mr-2">
          <div class="dropdown" id="theme">
          <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administration</button>                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a class="dropdown-item" href="newAdmin.php">Ajouter un admin</a>
          <a class="dropdown-item" href="newArticle.php">Ajouter un article</a>
          <a class="dropdown-item" href="newPlayer.php">Ajouter un joueur</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./gestionAdmins.php">Gestion des admins</a>
          <a class="dropdown-item" href="./gestionArticles.php">Gestion des articles</a>
          <a class="dropdown-item" href="./gestionJoueurs.php">Gestion des joueurs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./gestionContacts.php">Consulter les messages</a>
          <div class="dropdown-divider"></div>
          <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout" class="dropdown-item text-danger text-white">Logout</button>
          </form>
          </div>
          </div>
          </li>
          ';
        }
        ?>
        <?php
        foreach ($menus as $menu) {?>
          <li class="nav-item <?php if(isActive($menu)) {?> active <?php }?>">
            <a class="nav-link" href="<?php echo $menu['liens'];?>"><?php echo $menu['nom'];?></a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
