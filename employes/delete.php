<?php
include '../includes/header.php';
require '../config/database.php';
if(isset($_GET['id'])){
 $pdo->prepare("DELETE FROM employes WHERE id=?")->execute([$_GET['id']]);
}
header("Location: index.php");
?>