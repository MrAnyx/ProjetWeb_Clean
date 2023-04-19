<?php
require __DIR__ . "/Common/header.php";
require __DIR__ . "/Common/navbar.php";
require __DIR__ . '/../Controllers/rosterController.php';

$listeJoueurs = rosterController::selectAllPlayers();

if($listeJoueurs == null){
    echo '
    <div class="container-fluid mt-3">
    <div class="row justify-content-center">
    <div class="col-10 col-md-8 col-lg-6 alert alert-danger text-center">
    Aucun joueur trouvé
    </div>
    </div>
    </div>';
}else{

    ?>

    <table class="table table-striped" class="roster">
        <thead class="thead-dark" class="roster">
            <tr class="roster">
                <th class="roster img_col"></th>
                <th class="roster">Nom</th>
                <th class="roster">Prenom</th>
                <th class="roster">Numero</th>
                <th class="roster">Position</th>
                <th class="roster">Taille</th>
                <th class="roster">Poids</th>
            </tr>
        </thead>
        <tbody class="roster">
            <?php foreach($listeJoueurs as $joueur){?>

                <tr>
                    <td style="width: 6vw;" class="img_col"><center><div class="div_roster p-0"><img src="src/tete.jpg" class="img_roster" /></div></center></td>
                    <td><?php echo $joueur->getNom(); ?></td>
                    <td><?php echo $joueur->getPrenom(); ?></td>
                    <td><?php echo $joueur->getNumero(); ?></td>
                    <td><?php echo $joueur->getPosition(); ?></td>
                    <td><?php echo $joueur->getTaille(); ?></td>
                    <td><?php echo $joueur->getPoids(); ?></td>
                </tr>



            <?php } ?>
        </tbody>
    </table>
<?php } ?>



<?php require __DIR__ . "/Common/footer.php";?>
