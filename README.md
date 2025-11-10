# Bijouterie - Gestion d'Atelier

Ce projet est une application web conçue pour la gestion complète d'un atelier de bijouterie. Elle permet de suivre les processus de création et de réparation de bijoux, en assignant des tâches spécifiques à différents corps de métier (fondeur, sertisseur, polisseur) sous la supervision d'un chef d'atelier.

## Fonctionnalités

- **Gestion des utilisateurs par rôles** : Authentification et droits spécifiques pour chaque rôle (Chef, Fondeur, Sertisseur, Polisseur).
- **Suivi de la création de bijoux** : Processus complet de la conception à la finalisation d'un nouveau bijou.
- **Suivi des réparations** : Gestion des bijoux confiés pour réparation.
- **Gestion des tâches** : Assignation et suivi des différentes étapes de fabrication ou de réparation.
- **Upload d'images** : Ajout de photos pour les créations et les réparations.
- **Estimation des coûts** : Saisie des prix estimés et finaux pour chaque pièce.
- **Historique et tableaux de bord** : Visualisation des travaux effectués et en cours pour chaque rôle.

## Technologies utilisées

- **Backend** : PHP 8.0 (sans framework)
- **Base de données** : MySQL / MariaDB
- **Serveur web** : Apache (XAMPP)

## Prérequis et Installation

Pour lancer ce projet en local, vous aurez besoin d'un environnement de serveur web avec PHP et MySQL. Le plus simple est d'utiliser XAMPP.

1.  **Prérequis** : Assurez-vous d'avoir [XAMPP](https://www.apachefriends.org/fr/index.html) installé sur votre machine.

2.  **Cloner le projet** : Si ce n'est pas déjà fait, placez le dossier du projet `bijouterie` dans le répertoire `htdocs` de votre installation XAMPP.
 
3.  **Créer la base de données** :
    - Lancez XAMPP et démarrez les modules Apache et MySQL.
    - Accédez à phpMyAdmin (`http://localhost/phpmyadmin`).
    - Créez une nouvelle base de données nommée `bijouterie`.
    - Allez dans l'onglet "Importer", sélectionnez le fichier `Database used/bijouterie (2).sql` présent dans le projet, puis exécutez l'importation.

4.  **Configuration** : Aucune configuration supplémentaire n'est nécessaire si vous utilisez une installation XAMPP par défaut. Les identifiants de connexion à la base de données dans `connection.php` (`root` sans mot de passe) correspondent à ceux de XAMPP.

## Utilisation

1.  Une fois l'installation terminée, accédez à l'application via votre navigateur à l'adresse :
    [localhost/bijouterie/login_form.php]

2.  Vous pouvez vous connecter avec les comptes par défaut créés par le script SQL. Par exemple :
    - **Rôle** : Chef
    - **Nom d'utilisateur** : chef
    - **Mot de passe** : chef

    - **Rôle** : Fondeur
    - **Nom d'utilisateur** : fondeur
    - **Mot de passe** : fondeur

    *(Et ainsi de suite pour `sertisseur` et `polisseur`)*

## Structure des dossiers

-   **Fichiers `.php` à la racine** : Contiennent la logique principale de l'application.
    -   `login.php` / `signup.php` : Gestion de la connexion et de l'inscription.
    -   `acceuil.php` / `dashboard_*.php` : Pages d'accueil et tableaux de bord pour les différents rôles.
    -   `creation_bijoux.php` / `reparation_bijoux.php` : Formulaires et listes pour la gestion des bijoux.
    -   `*_process.php` : Fichiers de traitement des formulaires.
    -   `connection.php` : Gère la connexion à la base de données.
-   **`/Database used/`** : Contient le dump SQL pour initialiser la base de données.
-   **`/images/`** : Contient les images statiques de l'interface.
-   **`/photos_creation/`** et **`/photos_reparation/`** : Dossiers où sont stockées les images uploadées pour les bijoux.
-   **Fichiers `.css`** : Fichiers de style pour l'apparence de l'application.
