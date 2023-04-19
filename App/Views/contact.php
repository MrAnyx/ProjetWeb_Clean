<?php
require __DIR__ . '/Common/header.php';
require __DIR__ . '/Common/navbar.php';
?>



<div class="divImageContact mb-3">
    <img src="./src/background_test3.png" class="imgContact">
</div>

<div class="fadeInDown FadeIn first contactForm  article pt-3">

    <div>
        <h4 class="text-center text-dark">Contact</h4>
        <hr class="mx-4 rounded">
    </div>
    <form action="includes/contact.inc.php" method="post">


        <div class="form-group row justify-content-center">
            <div class="col-10">
                <input type="text" id="inputNom" class="form-control" name="nom" placeholder="Nom" required>
            </div>
        </div>


        <div class="form-group row justify-content-center">
            <div class="col-10">
                <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom" required>
            </div>
        </div>


        <div class="form-group row justify-content-center">
            <div class="col-10">
                <input type="email" name="mail" class="form-control" id="inputEmail" placeholder="Email" required>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <div class="col-10">
                <input type="text" name="objet" class="form-control" id="inputObjet" placeholder="Objet" required>
            </div>
        </div>


        <div class="form-group row justify-content-center">
            <div class="col-10">
                <textarea class="form-control" name="message" id="inputMessage" placeholder="Entrez votre message" required></textarea>
            </div>
        </div>


        <div class="form-group row justify-content-center pb-3 mt-4">
            <button type="submit" name="submit" class="btn-card">Envoyer</button>
        </div>

    </form>
</div>


<div class="mobile">

</div>



<?php
require __DIR__ . '/Common/footer.php';
?>
