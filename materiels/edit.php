<?php
include '../includes/header.php';
require '../config/database.php';
$error = '';
if(isset($_GET['id'])){
 $stmt=$pdo->prepare("SELECT * FROM materiels WHERE id=?");
 $stmt->execute([$_GET['id']]);
 $mat=$stmt->fetch();
 if(!$mat) header("Location: index.php");
}
if(isset($_POST['edit'])){
    $nom = trim($_POST['nom']);
    $type = trim($_POST['type']);
    $etat = trim($_POST['etat']);
    $date = $_POST['date'];
    if(empty($nom) || empty($type) || empty($etat) || empty($date)){
        $error = 'Tous les champs sont obligatoires.';
    } else {
        $pdo->prepare("UPDATE materiels SET nom=?, type=?, etat=?, date_achat=? WHERE id=?")
        ->execute([$nom,$type,$etat,$date,$_GET['id']]);
        header("Location: index.php");
    }
}
?>
<h2>Modifier Matériel</h2>
<?php if($error): ?><p class="error"><?= $error ?></p><?php endif; ?>
<form method="POST">
<input name="nom" value="<?= htmlspecialchars($mat['nom']) ?>" required>
<input name="type" value="<?= htmlspecialchars($mat['type']) ?>" required>
<input name="etat" value="<?= htmlspecialchars($mat['etat']) ?>" required>
<input type="date" name="date" value="<?= $mat['date_achat'] ?>" required>
<button name="edit">Modifier</button>
</form>
<?php include '../includes/footer.php'; ?>