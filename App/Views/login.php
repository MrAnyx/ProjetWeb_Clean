<?php require __DIR__ . '/Common/header.php';?>
<?php require __DIR__ . '/Common/navbar.php';?>





<div class="container-fluid mt-3 mb-3 fadeInDown">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-lg-5">
            <div class="card">
                <?php if(isAdmin()){?>
                    <div class="alert alert-success text-center">Vous êtes connecté</div>
                <?php }else{ ?>
                    <div class="alert alert-warning text-center">Vous êtes deconnecté</div>
                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == "incorrectPassword"){ ?>
                    <div class="row justify-content-center">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Mot de passe incorrect
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>

                <?php }else if(isset($_GET['login']) && $_GET['login'] == "userNotFound"){ ?>
                    <div class="row justify-content-center">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Utilisateur introuvable
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                <?php } ?>

                <div class="fadeIn second">
                    <form action="includes/login.inc.php" method="post">

                        <div class="form-group row justify-content-center">
                            <div class="col-10">
                                <input type="text" id="email_address" class="form-control" placeholder="Username" name="login" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-10">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-outline-primary">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require __DIR__ . '/Common/footer.php';?>
