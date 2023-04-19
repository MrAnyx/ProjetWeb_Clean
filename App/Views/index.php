<?php
require __DIR__ . '/Common/header.php';
require __DIR__ . '/Common/navbar.php';


require __DIR__ . '/../Controllers/indexController.php';
$lastArticle = indexController::showIndex();

if($lastArticle == null){
    echo '
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-6 alert alert-danger text-center">Aucun article n\'a été posté</div>
        </div>
    </div>';

}

else{
?>


<div class="lastAlbum">
    <img src="<?php echo $lastArticle->getImage(); ?>">
    <center>
        <div class="link justify-content-center">
            <h1 class="text-light"><?php echo mb_strtoupper($lastArticle->getTitre(), 'UTF-8'); ?></h1>
            <div class="href mt-4">
                <a href="./articleFull.php?id=<?php echo $lastArticle->getId(); ?>" class="btn btn-danger">Voir l'article</a>
                <a href="./albumFull.php?idAlbum=<?php echo $lastArticle->getAlbum(); ?>" class="btn btn-secondary">Voir l'album</a>
            </div>
        </div>
    </center>
</div>


<?php } ?>

<!-- div sur la présentation du club -->
<div class="container-fluid mt-5">
    <div class="row justify-content-center pt-3 pb-3 article ml-2 mr-2 rounded">
        <div class="row-xs-12 col-md-6">
            <h3>Présentation du club</h3>
            <p class="align-middle text-justify">Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.

                Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.

                Post hoc impie perpetratum quod in aliis quoque iam timebatur, tamquam licentia crudelitati indulta per suspicionum nebulas aestimati quidam noxii damnabantur. quorum pars necati, alii puniti bonorum multatione actique laribus suis extorres nullo sibi relicto praeter querelas et lacrimas, stipe conlaticia victitabant, et civili iustoque imperio ad voluntatem converso cruentam, claudebantur opulentae domus et clarae.
            </p>
        </div>
        <div class="col-xs-12 col-md-6 map">
            <iframe width="99.9%" height="100%" scrolling="no" src="https://www.openstreetmap.org/export/embed.html?bbox=1.2771906844864134%2C45.84848729735463%2C1.3047852508316284%2C45.85845573051733&amp;layer=mapnik&amp;marker=45.8534717372837%2C1.2909879676590208" style="border: 1px solid black"></iframe>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="card mx-2 my-2 article col-10 col-lg-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Entrainement 1</h5>
                <h6 class="card-subtitle mb-2 text-muted">MARDI</h6>
                <p class="card-text">De 19h à 21h30 pour les séniors et de 19h à 21h pour les juniors.</p>
                <p class="card-text">Au terrain de la basse <a href="#" data-toggle="modal" data-target="#exampleModal">(cf. plan)</a>.</p>
            </div>
        </div><div class="card mx-2 my-2 article col-10 col-lg-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Entrainement 2</h5>
                <h6 class="card-subtitle mb-2 text-muted">JEUDI</h6>
                <p class="card-text">De 19h à 21h30 pour les séniors et de 19h à 21h pour les juniors.</p>
                <p class="card-text">Au terrain de la basse <a href="#" data-toggle="modal" data-target="#exampleModal">(cf. plan)</a>.</p>
            </div>
        </div>
    </div>
</div>



<!-- fullscreen map -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Map</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body carte">
                <iframe width="100%" height="100%" style="border: 1px solid black;" allowfullscreen src="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_304970?scaleControl=false&miniMap=false&scrollWheelZoom=true&zoomControl=true&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=none&captionBar=false"></iframe>
            </div>
        </div>
    </div>
</div>





<div class="container mt-5">
    <div class="row justify-content-center ml-3 mr-3">

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-content">
                <div class="card-img">
                    <img src="./src/belette1.jpg">
                </div>
                <div class="card-desc">
                    <h5>Belette chef</h5>
                    <div>f dshfl sqdhlf kjsqdh lfkjqsdh flkjqs flkjqs dfhlks qjfhlq sdhf lksjdhf kqlsj flkqjsdh fkjlqsh flkjsqh flkjqs hlfkjsq hfkjq sdhlfkj qshflkj qsdhfk zekf hezufl hez fhksqdhf jdqshlf ksdqh f</div>
                    <a href="#" class="btn-card">Lire</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-content">
                <div class="card-img">
                    <img src="./src/belette2.jpg">
                </div>
                <div class="card-desc">
                    <h5>Belette entraineur</h5>
                    <div>f dshfl sqdhlf kjsqdh lfkjqsdh flkjqs flkjqs dfhlks qjfhlq sdhf lksjdhf kqlsj flkqjsdh fkjlqsh flkjsqh flkjqs hlfkjsq hfkjq sdhlfkj qshflkj qsdhfk zekf hezufl hez fhksqdhf jdqshlf ksdqh f</div>
                    <a href="#" class="btn-card">Lire</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card-content">
                <div class="card-img">
                    <img src="./src/belette3.jpg">
                </div>
                <div class="card-desc">
                    <h5>belette chef équipe</h5>
                    <div>f dshfl sqdhlf kjsqdh lfkjqsdh flkjqs flkjqs dfhlks qjfhlq sdhf lksjdhf kqlsj flkqjsdh fkjlqsh flkjsqh flkjqs hlfkjsq hfkjq sdhlfkj qshflkj qsdhfk zekf hezufl hez fhksqdhf jdqshlf ksdqh f</div>
                    <a href="#" class="btn-card">Lire</a>
                </div>
            </div>
        </div>

    </div>


</div>






<?php require __DIR__ . '/Common/footer.php';?>
