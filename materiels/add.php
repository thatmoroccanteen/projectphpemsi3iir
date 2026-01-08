<?php
include '../includes/header.php';
require '../config/database.php';
$error = '';
if(isset($_POST['add'])){
    $nom = trim($_POST['nom']);
    $type = trim($_POST['type']);
    $etat = trim($_POST['etat']);
    $date = $_POST['date'];
    if(empty($nom) || empty($type) || empty($etat) || empty($date)){
        $error = 'Tous les champs sont obligatoires.';
    } else {
        $pdo->prepare("INSERT INTO materiels VALUES(NULL,?,?,?,?)")
        ->execute([$nom,$type,$etat,$date]);
        header("Location: index.php");
    }
}
?>
<h2>Ajouter Matériel</h2>
<?php if($error): ?><p class="error"><?= $error ?></p><?php endif; ?>
<form method="POST">
<input name="nom" placeholder="Nom" required>
<input name="type" placeholder="Type" required>
<input name="etat" placeholder="État" required>
<input type="date" name="date" required>
<button name="add">Ajouter</button>
</form>
<?php include '../includes/footer.php'; ?>