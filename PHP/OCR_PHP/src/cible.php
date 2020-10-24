<p>Bonjour <?php echo htmlspecialchars($_POST['nom']); ?>!</p>
<p>Ton email est: <?php echo htmlspecialchars($_POST['email']); ?></p>
<p>Ton message est: <?php echo htmlspecialchars($_POST['message']); ?></p>
<p>Si tu veux faire des modification, <a href="formulaire.php">clique ici</a>
    pour revenir à la page de formulaire.</p>