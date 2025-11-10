<aside id="aside">
    <nav id="nav-aside">
        <li><a href="acceuil_fondeur.php"><i class="fas fa-sign-in-alt"></i> Accueil</a></li>
         <li><a href="bijoux_a_reparer.php"><i class="fas fa-check-circle"></i> Bijoux à reparer.</a></li>
        <li><a href="missions.php"><i class="fas fa-gem"></i>Missions</a></li>
         <li><a href="logout.php" class="logout" onclick="return confirmerDeconnexion();">
            <i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
    </nav>
</aside>

<script>
function confirmerDeconnexion() {
    return confirm("Voulez-vous vraiment vous déconnecter ?");
}
</script>
