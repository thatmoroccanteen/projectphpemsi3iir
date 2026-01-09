
<?php include 'includes/header.php'; ?>
<main class="content">
<h1>Application de gestion du matériel informatique</h1>
<p>Projet PHP pur - PDO - EMSI 3IIR</p>
<p>Bienvenue, <?= htmlspecialchars($_SESSION['user']) ?> !</p>
<p>Utilisez le menu de navigation pour gérer les employés et le matériel.</p>
<p>Assurez-vous de vous déconnecter lorsque vous avez terminé.</p>
<h2>Fonctionnalités :</h2>
<ul>
<li>Gestion des employés : Ajouter, modifier, supprimer des employés.</li>
<li>Gestion du matériel : Ajouter, modifier, supprimer des matériels.</li>
<li>Attribution du matériel aux employés.</li>
<li>Interface utilisateur simple et intuitive.</li>
</ul>
<p>Bonne gestions !</p>
</main>


<?php include 'includes/footer.php'; ?>