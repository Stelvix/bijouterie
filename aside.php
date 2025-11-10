<aside id="aside">
    <nav id="nav-aside">
        <li><a href="acceuil.php"><i class="fas fa-sign-in-alt"></i> Accueil</a></li>
         <li><a href="verification_travail.php"><i class="fas fa-check-circle"></i> Vérification du travail</a></li>
        <li><a href="creation_bijoux.php"><i class="fas fa-gem"></i> Création de bijoux</a></li>
        <li><a href="reparation_bijoux.php"><i class="fas fa-tools"></i> Réparation de bijoux</a></li>
        <li><a href="historique.php"><i class="fas fa-history"></i> Historique des travaux</a></li>
        <li><a href="logout.php" class="logout" onclick="return confirmerDeconnexion();">
            <i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
    </nav>
</aside>

<script>
function confirmerDeconnexion() {
    return confirm("Voulez-vous vraiment vous déconnecter ?");
}
</script>
