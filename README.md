# Application de Gestion du Matériel Informatique

Projet PHP pur utilisant PDO pour la gestion du matériel informatique dans une entreprise.

## Niveau
3IIR EMSI Maroc

## Technologies
- PHP 7+
- PDO (MySQL)
- HTML/CSS
- XAMPP (Apache + MySQL)

## Installation
1. Installer XAMPP.
2. Placer le dossier `gestion_materiel` dans `C:\xampp\htdocs\`.
3. Démarrer Apache et MySQL dans XAMPP.
4. Importer la base de données ou utiliser le script de setup si nécessaire.
5. Accéder à `http://localhost/gestion_materiel/auth/login.php`.

## Utilisateur par défaut
- Nom d'utilisateur: admin
- Mot de passe: admin

## Fonctionnalités
- Authentification des utilisateurs
- Gestion des employés (ajouter, modifier, supprimer, lister)
- Gestion des matériels (ajouter, modifier, supprimer, lister)

## Structure du projet
- `auth/`: Connexion et déconnexion
- `config/`: Configuration de la base de données
- `employes/`: Gestion des employés
- `materiels/`: Gestion des matériels
- `includes/`: En-têtes et pieds de page
- `assets/`: Styles CSS