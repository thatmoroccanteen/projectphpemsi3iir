<?php
session_start();
if(!isset($_SESSION['user'])){
 header("Location: /gestion_materiel/auth/login.php");
 exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Gestion Matériel</title>
<link rel="stylesheet" href="/gestion_materiel/assets/style.css">
</head>
<body>
<nav>
<a href="/gestion_materiel/index.php">Accueil</a> |
<a href="/gestion_materiel/employes/index.php">Employés</a> |
<a href="/gestion_materiel/materiels/index.php">Matériels</a> |
<a href="/gestion_materiel/auth/logout.php">Déconnexion</a>
</nav>
<hr>