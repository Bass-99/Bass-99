<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: connexion.php');
    exit;
}
$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Espace membre</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="container" style="max-width:800px;margin-top:2rem">
<h1>Bienvenue, <?= htmlspecialchars($user['name']) ?> 👋</h1>
<p class="muted">Vous êtes connecté avec l’adresse : <strong><?= htmlspecialchars($user['email']) ?></strong></p>

<div class="card">
<h3>Vos ressources</h3>
<ul>
<li><a href="resources.php">Accéder aux ressources pédagogiques</a></li>
<li><a href="services.php">Découvrir nos services</a></li>
</ul>
</div>

<a href="logout.php" class="btn btn-outline" style="margin-top:1rem">Se déconnecter</a>
</main>
</body>
</html>
