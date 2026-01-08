<?php
include '../includes/header.php';
require '../config/database.php';
$error = '';
if(isset($_POST['add'])){
    $nom = trim($_POST['nom']);
    $service = trim($_POST['service']);
    if(empty($nom) || empty($service)){
        $error = 'Tous les champs sont obligatoires.';
    } else {
        $pdo->prepare("INSERT INTO employes VALUES(NULL,?,?)")
        ->execute([$nom,$service]);
        header("Location: index.php");
    }
}
?>
<h2>Ajouter Employé</h2>
<?php if($error): ?><p class="error"><?= $error ?></p><?php endif; ?>
<form method="POST">
<input name="nom" placeholder="Nom" required>
<input name="service" placeholder="Service" required>
<button name="add">Ajouter</button>
</form>
<?php include '../includes/footer.php'; ?>