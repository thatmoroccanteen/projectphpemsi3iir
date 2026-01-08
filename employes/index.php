<?php
include '../includes/header.php';
require '../config/database.php';
$rows=$pdo->query("SELECT * FROM employes")->fetchAll();
?>
<h2>Employés</h2>
<a href="add.php">Ajouter</a>
<table border="1">
<tr><th>Nom</th><th>Service</th><th>Actions</th></tr>
<?php foreach($rows as $r): ?>
<tr>
<td><?= $r['nom']?></td>
<td><?= $r['service']?></td>
<td>
<a href="edit.php?id=<?= $r['id'] ?>">Modifier</a> |
<a href="delete.php?id=<?= $r['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')">Supprimer</a>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php include '../includes/footer.php'; ?>