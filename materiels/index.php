<?php
include '../includes/header.php';
require '../config/database.php';
$m=$pdo->query("SELECT * FROM materiels")->fetchAll();
?>
<h2>Matériels</h2>
<a href="add.php">Ajouter</a>
<table border="1">
<tr><th>Nom</th><th>Type</th><th>État</th><th>Date</th><th>Actions</th></tr>
<?php foreach($m as $r): ?>
<tr>
<td><?= $r['nom']?></td>
<td><?= $r['type']?></td>
<td><?= $r['etat']?></td>
<td><?= $r['date_achat']?></td>
<td>
<a href="edit.php?id=<?= $r['id'] ?>">Modifier</a> |
<a href="delete.php?id=<?= $r['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce matériel ?')">Supprimer</a>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php include '../includes/footer.php'; ?>