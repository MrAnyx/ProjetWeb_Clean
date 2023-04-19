<?php
require __DIR__ . "/Common/header.php";
require __DIR__ . "/Common/navbar.php";
require __DIR__ . "/../Controllers/articleFullController.php";

// récupère tous les champs pour afficher l'article
$currentArticle = articleFullController::showArticle($_GET['id']);

// recupère le nombre de commentaire pour l'afficher
$nbCom = articleFullController::nbCom($_GET['id']);

// update le nombre de vues
articleFullController::updateViews($currentArticle);

//récupère tous les commentaire correspondant à l'article
$listeCommentaires = articleFullController::showCom($_GET['id']);

//récupère les 3 derniers articles hors celui courant
$listeSuggestions = articleFullController::showSuggestions($_GET['id'])
?>

<!-- page pour afficher l'article en entier -->


<div class="container-fluid mt-3 mb-3">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-lg-10"> <!-- div qui correspond a l'article + les suggestions a coté -->
            <div class="row justify-content-center">

                <div class="col-xs-12 col-lg-8 justify-content-center">  <!-- div qui correspond a l'article-->

                    <div class="article rounded">
                        <div class="articleImage rounded-top">
                            <img src="<?php echo $currentArticle->getImage(); ?>" class="imageArticle">
                            <a href="./albumFull.php?idAlbum=<?php echo $currentArticle->getAlbum();?>"class="voirAlbum rounded">Voir l'album</a>
                        </div>
                        <div class="ArticleContenu mt-3 pb-1">

                            <i><h3><?php echo mb_strtoupper($currentArticle->getTitre(), 'UTF-8'); ?></h3></i>
                            <small>publié le <?php echo $currentArticle->getDateUpload().'<i class="far fa-eye mr-2 ml-4"></i>'.$currentArticle->getVues().'<i class="fas fa-comments ml-3 mr-2"></i>'.$nbCom; ?></small>

                            <p class="mt-4 mb-4 text-justify"> <?php echo $currentArticle->getDescription(); ?> </p>

                        </div>
                    </div>


                    <div class="article rounded mt-3 pt-3">
                        <h4 class="text-secondary text-center">Poster un commentaire</h4>
                        <hr class="separatorCommentaire ml-5 mr-5" >
                        <form action="includes/newCommentaire.inc.php?id=<?php echo $_GET['id']; ?>" method="post"> <!-- pour l'id, il faut remettre celui de l'article -->
                            <div class="form-group row justify-content-center">
                                <div class="col-10">
                                    <input type="text" class="form-control mt-2" placeholder="Nom" name="nom" maxlength="30" required>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-10">
                                    <textarea class="form-control" name="commentaire" style="width:100%;min-height:150px;" placeholder="Commentaire ..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <button type="submit" name="submit" class="btn-card mb-4">Poster</button>
                            </div>
                        </form>
                    </div>

                    <div class="article rounded mt-3 mb-3 p-3">
                        <h4 class="text-secondary text-center">Commentaires</h4>
                        <hr class="separatorCommentaire ml-5 mr-5" >

                        <?php

                        if ($listeCommentaires == null) {
                            echo '<div class="alert alert-danger text-center">
                            Aucun commentaire
                            </div>';
                        }
                        else{



                            foreach($listeCommentaires as $row){
                                echo '<div class="article rounded mt-3 p-3">';

                                if(isAdmin()){
                                    echo '<a class="close mr-2" aria-label="Close" href="./includes/removeCom.inc.php?id='.$row->getId().'&numArticle='.$_GET['id'].'">
                                    <span aria-hidden="true" style="font-size:35px;">&times;</span>
                                    </a>';
                                }


                                echo '<h5>'.$row->getNom().'</h5>
                                <small>posté le '.$row->getDateCommentaire().'</small>
                                <div class="text-dark mt-3 text-justify">
                                <i>'.$row->getCommentaire().'</i>
                                </div>

                                </div>';
                            }
                        }



                        ?>

                    </div>



                </div>


                <?php if($listeSuggestions != null){ ?>


                <!-- suggestion -->
                <!-- on peut ajouter la class "article" pour ajouter une couleur de fond et l'ombre à la partie suggestions -->
                <div class="col-xs-12 col-lg-3 rounded ml-3 mr-3 mb-4 suggestions"> <!-- div qui correspond aux suggesitions -->

                    <h4 class="text-secondary text-center mt-3">Voir aussi</h4>
                    <hr class="separatorCommentaire">

                    <div class="row justify-content-center pl-3 pr-3">
                        <div class="col-xs-12"> <!-- div qui correspond a un article de la suggestion -->

                            <?php
                            foreach($listeSuggestions as $result){
                                echo '<div class="card-content mb-3 rounded">
                                <div class="card-img">
                                <img src="'.$result->getImage().'">
                                <span class="ml-3"><h4>'.$result->getDateUpload().'</h4></span>
                                </div>
                                <div class="card-desc">
                                <h5>'.$result->getTitre().'</h5>
                                <div>'.$result->getDescription().'</div>
                                <a href="./articleFull.php?id='.$result->getId().'" class="btn-card">Lire</a>
                                </div>
                                </div>';
                            }

                            ?>



                        </div>
                    </div>
                </div>
            <?php } ?>



            </div>
        </div>
    </div>
</div>


<?php require __DIR__ . "/Common/footer.php" ?>
