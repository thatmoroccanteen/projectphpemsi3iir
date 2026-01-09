<?php
session_start();
require '../config/database.php';
if(isset($_POST['login'])){
  echo "Debug: POST received<br>";
  $stmt=$pdo->prepare("SELECT * FROM utilisateurs WHERE username=?");
  $stmt->execute([$_POST['username']]);
  $u=$stmt->fetch();
  if($u){
    echo "Debug: User found<br>";
    if($_POST['password'] === $u['password']){
      echo "Debug: Password correct<br>";
      $_SESSION['user']=$u['username'];
      header("Location: ../index.php");
      exit;
    } else {
      echo "Debug: Password incorrect<br>";
      $error="Identifiants incorrects";
    }
  } else {
    echo "Debug: User not found<br>";
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
</div>
  <div class="login-container" style="max-width:350px;margin:auto;margin-top:80px;">
    <form method="POST" class="login-form">
      <h2 style="text-align:center;margin-bottom:20px;">Connexion</h2>
      <?php if($error): ?><p class="error" style="text-align:center;"><?= $error ?></p><?php endif; ?>
      <div style="margin-bottom:15px;">
        <input name="username" type="text" placeholder="Nom d'utilisateur" required autofocus>
      </div>
      <div style="margin-bottom:15px;">
        <input type="password" name="password" placeholder="Mot de passe" required>
      </div>
      <button name="login" style="margin-top:10px;">Se connecter</button>
    </form>
  </div>
</form>
</body>
</html>