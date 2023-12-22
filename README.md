# Party Planner Application

## Description

Bienvenue sur Party Planner, une application web pour ajouter et visualiser des Fêtes festifs. Les utilisateurs peuvent consulter les prochaines fêtes à venir et gérer leurs propres Fêtes.

### Caractéristiques

- Affichage des Fêtes à venir
- Création et gestion des Fêtes personnels
- Connexion et inscription des utilisateurs

## Technologie

- **Front-end**: HTML, CSS, JavaScript
- **Back-end**: PHP
- **Base de données**: MySQL 8

## Installation

### Prérequis

- Serveur web avec support PHP (WAMP pour Windows, MAMP pour macOS, LAMP pour Linux)
- MySQL 8

Il est recommandé d'installer WAMP, MAMP ou LAMP, qui incluent à la fois un serveur web, PHP et MySQL, facilitant ainsi la mise en place de l'environnement nécessaire.

### Configuration de la base de données

1. Importez la base de données depuis le fichier `party_planner_db.sql`.
   - Accédez à phpMyAdmin.
   - Importez le fichier SQL.

### Configuration du serveur

1. Modifiez le fichier `includes/config.php` :
   - `DB_SERVER` : URL de la base de données.
   - `DB_USERNAME` : Nom d'utilisateur pour la base de données.
   - `DB_PASSWORD` : Mot de passe de l'utilisateur.

## Structure des fichiers

- `index.php` : Page de connexion.
- `inscription.php` : Formulaire d'inscription.
- `profil.php` : Informations de l'utilisateur connecté.
- `my-events.php` : Liste des Fêtes créés par l'utilisateur.
- `event-list.php` : Liste de tous les Fêtes.
- `event-details.php` : Détails d'un Fête spécifique.
- `creation-event.php` : Formulaire d'ajout d'Fête.
- `login.php` : Logique de connexion et redirection.
- `logout.php` : Logique de déconnexion.

### Dossiers

- `includes` : Fichiers PHP communs (`config.php`, `header.php`, `footer.php`).
- `css` : Fichiers CSS.
- `js` : Fichiers JavaScript.

## Base de données

Le fichier `party_planner_db.sql` contient la structure de la base de données avec des données initiales.
