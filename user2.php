<?php
    $page = 'Exercice 4';
    include 'header.php';
?>
<div class="text-center display-4">
    <p>Bonjour, <?= htmlspecialchars($_POST['firstname']). ' ' .htmlspecialchars($_POST['lastname']); ?> !</p>    
</div>
<?php include 'footer.php'; ?>