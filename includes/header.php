<header>
    <nav>
        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>
            <!-- Liens pour les utilisateurs connectés -->
            <a href="profil.php">Profil</a>
            <a href="my-events.php">Mes Fêtes</a>
            <a href="event-liste.php">Liste des Fêtes</a>
            <a href="creation-event.php">Créer un Fête</a>
            <a href="logout.php">Déconnexion</a>
        <?php else : ?>
            <!-- Liens pour les visiteurs non connectés -->
            <a href="index.php">Accueil</a>
            <a href="inscription.php">Inscription</a>
        <?php endif; ?>
    </nav>
</header>