<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: connexion.php');
    exit;
}

// Langue
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr','en'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
// Compatibilité PHP < 7
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

function t($fr, $en) {
    global $lang;
    return $lang === 'en' ? $en : $fr;
}

$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= htmlspecialchars(t('Ressources pédagogiques','Educational resources')) ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <div class="brand">
        <img src="https://static.vecteezy.com/system/resources/previews/005/928/014/non_2x/it-logo-design-for-information-technology-company-logo-design-vector.jpg" alt="Logo IT" width="50" style="border-radius:8px;margin-right:10px;">
        <div class="brand-text">
          <div class="title">IT & Ingénierie Pédagogique</div>
          <div class="subtitle"><?= htmlspecialchars(t('Tech × Pédagogie — solutions sur mesure','Tech × Pedagogy — tailored solutions')) ?></div>
        </div>
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="index.php"><?= htmlspecialchars(t('Accueil','Home')) ?></a></li>
          <li><a href="services.php"><?= htmlspecialchars(t('Services','Services')) ?></a></li>
          <li><a href="solutions.php"><?= htmlspecialchars(t('Solutions','Solutions')) ?></a></li>
          <li><a href="blog.php"><?= htmlspecialchars(t('Blog','Blog')) ?></a></li>
          <li><a href="contact.php"><?= htmlspecialchars(t('Contact','Contact')) ?></a></li>
        </ul>
      </nav>
      <div class="header-actions">
        <a href="logout.php" class="btn btn-outline"><?= htmlspecialchars(t('Déconnexion','Logout')) ?></a>
      </div>
    </div>
  </header>

  <main class="container" style="margin-top:2rem;">
    <h1><?= htmlspecialchars(t('Ressources pédagogiques','Educational Resources')) ?></h1>
    <p><?= htmlspecialchars(t('Bienvenue','Welcome')) ?>, <strong><?= htmlspecialchars($user['name']) ?></strong> 👋</p>

    <section style="margin-top:1.5rem;">
      <h2><?= htmlspecialchars(t('Guides et supports de cours','Guides and Course Materials')) ?></h2>
      <div class="card">
        <ul>
          <li><a href="docs/guide_pedagogique.pdf" target="_blank">📘 <?= htmlspecialchars(t('Guide pédagogique (PDF)','Pedagogical Guide (PDF)')) ?></a></li>
          <li><a href="docs/modele_scorm.zip" download>💾 <?= htmlspecialchars(t('Modèle SCORM - Exemple','SCORM Template - Example')) ?></a></li>
          <li><a href="docs/checklist_accessibilite.pdf" target="_blank">✅ <?= htmlspecialchars(t('Checklist Accessibilité Web','Web Accessibility Checklist')) ?></a></li>
        </ul>
      </div>
    </section>

    <section style="margin-top:2rem;">
      <h2><?= htmlspecialchars(t('Ressources interactives','Interactive Resources')) ?></h2>
      <div class="card">
        <ul>
          <li><a href="https://moodle.org" target="_blank">🌐 Moodle — <?= htmlspecialchars(t('Plateforme d\'apprentissage libre','Open Learning Platform')) ?></a></li>
          <li><a href="https://www.khanacademy.org" target="_blank">🎓 Khan Academy — <?= htmlspecialchars(t('Cours gratuits pour tous','Free courses for everyone')) ?></a></li>
          <li><a href="https://www.coursera.org" target="_blank">💡 Coursera — <?= htmlspecialchars(t('Formations certifiantes','Certified Courses')) ?></a></li>
        </ul>
      </div>
    </section>

    <section style="margin-top:2rem;">
      <h2><?= htmlspecialchars(t('Vidéos de formation','Training Videos')) ?></h2>
      <div class="card" style="display:flex;flex-wrap:wrap;gap:20px;">
        <iframe width="300" height="180" src="https://www.youtube.com/embed/UB1O30fR-EE" title="HTML Crash Course" frameborder="0" allowfullscreen></iframe>
        <iframe width="300" height="180" src="https://www.youtube.com/embed/pQN-pnXPaVg" title="CSS Tutorial" frameborder="0" allowfullscreen></iframe>
        <iframe width="300" height="180" src="https://www.youtube.com/embed/J---aiyznGQ" title="JavaScript Basics" frameborder="0" allowfullscreen></iframe>
      </div>
    </section>

    <div style="margin-top:2rem;">
      <a href="espace_membre.php" class="btn btn-outline">&larr; <?= htmlspecialchars(t('Retour à mon espace','Back to my area')) ?></a>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner" style="display:flex;justify-content:space-between;align-items:center;">
      <div>&copy; <?= date('Y') ?> IT & Ingénierie Pédagogique</div>
      <div class="socials" style="display:flex;gap:10px;">
        <a href="https://facebook.com"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="25" alt="Facebook"></a>
        <a href="https://twitter.com"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" width="25" alt="Twitter"></a>
        <a href="https://linkedin.com"><img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" width="25" alt="LinkedIn"></a>
      </div>
    </div>
  </footer>
</body>
</html>
