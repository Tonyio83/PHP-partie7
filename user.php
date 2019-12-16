<?php
    $page = 'Exercice 3';
    include 'header.php';
?>
<div class="text-center display-4">
    <p>Bonjour, <?= htmlspecialchars($_GET['firstname']). ' ' .htmlspecialchars($_GET['lastname']); ?> !</p>    
</div>
<?php include 'footer.php'; ?>