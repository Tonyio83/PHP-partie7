<?php
$page = 'Exercice 1'; //déclaration d'une variable pour afficher le numéro de l'exercice dans le html
include 'header.php'; //inclus le header et la navbar
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 border border-dark p-5">
            <h2 class="text-center">Formulaire</h2>
            <form method="get" action="user.php">
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Dupont">
                </div>
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input class="form-control" id="firstname" name="firstname" type="text" placeholder="Jean">  
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-info">Envoyer</button>
                </div>
            </form>        
        </div>
    </div>
</div>
<?php include 'footer.php' //inclus le footer ?>