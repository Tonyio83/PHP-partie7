<?php
$page = 'Exercice 8'; //déclaration d'une variable pour afficher le numéro de l'exercice dans le html
$message1 = '';
$message2 = '';
include 'header.php'; //inclus le header et la navbar
if (!empty($_POST['gender']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
    $message1 = 'Bonjour ' . htmlspecialchars($_POST['gender']) . ' ' .htmlspecialchars($_POST['lastname']). ' ' .htmlspecialchars($_POST['firstname']). ',';
}
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['myFile']) AND $_FILES['myFile']['error'] == 0)
{
    //Verifie si l'extension est autorisée
    $fileInfos = pathinfo($_FILES['myFile']['name']);
    $fileExtension = $fileInfos['extension'];               
    if ($fileExtension == 'pdf')
        {
            // On peut affiche le message suivant                       
            $message2 = 'l\'envoi du ' .$_FILES['myFile']['name']. ' a bien été reçu !';
        }
        else
        {
            $message2 = 'veuillez envoyer le fichier en format PDF.';                                          
        }        
}
else {
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 border border-dark p-5">
            <h2 class="text-center">Formulaire</h2>
            <form method="post" action="ex8.php" enctype="multipart/form-data">               
                <div class="form-group">
                    <label class="mr-sm-2" for="formCustomSelect">Civilité</label>
                    <select class="custom-select mr-sm-2" id="formCustomSelect" name="gender">
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
                <div class="form-group">
                    <label for="FormControlFile">Envoi du fichier PDF</label>
                    <input type="file" class="form-control-file" name="myFile" id="FormControlFile">
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-info">Envoyer</button>
                </div>
            </form>        
        </div>
    </div>
</div>
<?php } ?>
<div class="text-center display-4">
    <p><?= $message1 ?></p>
    <p><?= $message2 ?></p>
</div>
<?php
include 'footer.php' //inclus le footer ?>