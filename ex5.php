<?php
    $page = 'Exercice 5'; //déclaration d'une variable pour afficher le numéro de l'exercice dans le html
    $message = '';
    include 'header.php'; //inclus le header et la navbar
    if (!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname']))
    {
        $message = 'Bonjour, ' .strip_tags($_POST['gender']). ' ' .strip_tags($_POST['lastname']). ' ' .strip_tags($_POST['firstname']);
    }
 else 
    {
        $message = 'Veuillez remplir tous les champs.';
    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 border border-dark p-5">
            <h2 class="text-center">Formulaire</h2>
            <form method="post" action="ex5.php">               
                <div class="form-group">
                    <label class="mr-sm-2" for="FormCustomSelect">Civilité</label>
                    <select class="custom-select mr-sm-2" id="FormCustomSelect" name="gender">
                        <option selected>Choisir...</option>
                        <option>Madame</option>
                        <option>Monsieur</option>
                    </select>
                </div>
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
<div class="text-center display-4">
    <p><?= $message ?></p>
</div>
<?php
include 'footer.php' //inclus le footer ?>