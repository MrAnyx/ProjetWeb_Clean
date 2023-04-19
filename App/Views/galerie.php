<?php
require __DIR__ . '/Common/header.php';
require __DIR__ . '/Common/navbar.php';
require __DIR__ . '/../Controllers/galerieController.php';
$listeAlbums = galerieController::showAll();
?>


<section class="details-card mt-4">
    <div class="container">
        <div class="row justify-content-center">



            <?php if($listeAlbums == null){
                echo '<div class="col-10 col-md-8 col-lg-6 alert alert-danger text-center">Aucun album n\'a été posté</div>';
            } else{
                foreach($listeAlbums as $album){

                    echo '
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card-content">
                            <div class="card-img album_collection">
                                <img src="'.$album->getImage().'">
                                <span class="ml-3"><h4>'.$album->getDateUpload().'</h4></span>
                                <a href="./albumFull.php?idAlbum='.$album->getAlbum().'" class="btn-card boutonVoirAlbum" >Voir l\'album</a>
                                <h5>'.$album->getTitre().'</h5>
                            </div>
                        </div>
                    </div>';


                }
            }?>

        </div>
    </div>
</section>

<?php require __DIR__ . '/Common/footer.php';?>
