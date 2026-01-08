<?php
include '../includes/header.php';
require '../config/database.php';
$error = '';
if(isset($_GET['id'])){
 $stmt=$pdo->prepare("SELECT * FROM employes WHERE id=?");
 $stmt->execute([$_GET['id']]);
 $emp=$stmt->fetch();
 if(!$emp) header("Location: index.php");
}
if(isset($_POST['edit'])){
    $nom = trim($_POST['nom']);
    $service = trim($_POST['service']);
    if(empty($nom) || empty($service)){
        $error = 'Tous les champs sont obligatoires.';
    } else {
        $pdo->prepare("UPDATE employes SET nom=?, service=? WHERE id=?")
        ->execute([$nom,$service,$_GET['id']]);
        header("Location: index.php");
    }
}
?>
<h2>Modifier Employé</h2>
<?php if($error): ?><p class="error"><?= $error ?></p><?php endif; ?>
<form method="POST">
<input name="nom" value="<?= htmlspecialchars($emp['nom']) ?>" required>
<input name="service" value="<?= htmlspecialchars($emp['service']) ?>" required>
<button name="edit">Modifier</button>
</form>
<?php include '../includes/footer.php'; ?>