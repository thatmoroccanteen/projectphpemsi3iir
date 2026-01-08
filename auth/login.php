<?php
session_start();
require '../config/database.php';
if(isset($_POST['login'])){
 $stmt=$pdo->prepare("SELECT * FROM utilisateurs WHERE username=?");
 $stmt->execute([$_POST['username']]);
 $u=$stmt->fetch();
 if($u && password_verify($_POST['password'],$u['password'])){
  $_SESSION['user']=$u['username'];
  header("Location: ../index.php");
  exit;
 } else {
  $error="Identifiants incorrects";
 }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion - Gestion Matériel</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<form method="POST" style="max-width:300px;margin:auto;margin-top:100px;">
<h2>Connexion</h2>
<?php if(isset($error)): ?><p class="error"><?= $error ?></p><?php endif; ?>
<input name="username" placeholder="Nom d'utilisateur" required>
<input type="password" name="password" placeholder="Mot de passe" required>
<button name="login">Se connecter</button>
</form>
</body>
</html>