<?php
require __DIR__ . '/Common/header.php';
require __DIR__ . '/Common/navbar.php';

require __DIR__ . '/../Models/Articles/Article.php';
require __DIR__ . '/../Models/Articles/ArticleRepository.php';
require __DIR__ . '/../Models/Commentaires/Commentaire.php';
require __DIR__ . '/../Models/Commentaires/CommentaireRepository.php';

?>

<div class="mb-4"></div>

<!-- si l'utilisateur entre plusieurs mots -->
<?php if(searchNotAvailable()){ ?>

    <div class="row justify-content-center">
        <div class="alert alert-danger" role="alert">
            Entrez un seul mot clé
        </div>
    </div>

<?php } ?>

<!-- formulaire de recherche -->
<form class="container" action="./includes/search.inc.php" method="post">
    <div class="row justify-content-center">
        <div class="input-group col-10 col-md-8">
            <input type="text" class="form-control" placeholder="Rechercher..." name="search">
            <div class="input-group-append">
                <button class="input-group-text btn btn-outline-danger" type="submit" name="submit">Rechercher</button>
            </div>
        </div>
    </div>
</form>



<!-- affichage de tous les articles -->
<section class="details-card mt-4">
    <div class="container">
        <div class="row justify-content-center">

            <?php

            if(doSearch()){
                $listeArticles = ArticleController::findAllSearch($_GET['word']);
                if($listeArticles == null){
                    echo '<div class="col-10 col-md-8 col-lg-6 alert alert-danger text-center">
                    Aucun article n\'a été trouvé
                    </div>';
                }
                else {
                    foreach($listeArticles as $article){

                        $nbCom = CommentaireRepository::nbCom($article->getId());

                        ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card-content">
                                <div class="card-img">
                                    <img src="<?php echo $article->getImage(); ?>">
                                    <span class="ml-3"><h4><?php echo $article->getDateUpload(); ?></h4></span>

                                    <div class="views rounded-top text-light">
                                        <i class="far fa-eye mr-2"></i><?php echo $article->getVues(); ?>
                                        <i class="fas fa-comments ml-3 mr-2"></i><?php echo $nbCom; ?>
                                    </div>

                                </div>
                                <div class="card-desc">
                                    <h5><?php echo $article->getTitre(); ?></h5>
                                    <div><?php echo $article->getDescription(); ?></div>
                                    <a href="./articleFull.php?id=<?php echo $article->getId(); ?>" class="btn-card" >Lire</a>
                                </div>
                            </div>
                        </div>


                        <?php
                    }
                }
            }else{

                $listeArticles = ArticleRepository::findAll();

                if($listeArticles == null){
                    echo '<div class="col-10 col-md-8 col-lg-6 alert alert-danger text-center">
                    Aucun article n\'a été posté
                    </div>';
                }
                else {
                    foreach($listeArticles as $article){

                        $nbCom = CommentaireRepository::nbCom($article->getId());

                        ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card-content">
                                <div class="card-img">
                                    <img src="<?php echo $article->getImage(); ?>">
                                    <span class="ml-3"><h4><?php echo $article->getDateUpload(); ?></h4></span>

                                    <div class="views rounded-top text-light">
                                        <i class="far fa-eye mr-2"></i><?php echo $article->getVues(); ?>
                                        <i class="fas fa-comments ml-3 mr-2"></i><?php echo $nbCom; ?>
                                    </div>

                                </div>
                                <div class="card-desc">
                                    <h5><?php echo $article->getTitre(); ?></h5>
                                    <div><?php echo $article->getDescription(); ?></div>
                                    <a href="./articleFull.php?id=<?php echo $article->getId(); ?>" class="btn-card" >Lire</a>
                                </div>
                            </div>
                        </div>

                        <?php
                    }


                }

            }
            ?>
        </div>
    </div>
</section>






<?php require __DIR__ . '/Common/footer.php'; ?>
