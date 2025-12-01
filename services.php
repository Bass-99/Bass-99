<?php
session_start();

// Gestion de la langue : ?lang=fr ou ?lang=en
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

function t($fr, $en) {
    global $lang;
    return $lang === 'en' ? $en : $fr;
}
?>
<!doctype html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= htmlspecialchars(t('Services - IT & Ingénierie Pédagogique', 'Services - IT & Instructional Engineering')) ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- ===== HEADER ===== -->
  <header class="site-header" role="banner">
    <div class="container header-inner">
      <div class="brand">
        <img src="https://static.vecteezy.com/system/resources/previews/005/928/014/non_2x/it-logo-design-for-information-technology-company-logo-design-vector.jpg" 
             alt="Logo IT" width="60" height="60" style="border-radius:8px; margin-right:10px;">
        <div class="brand-text">
          <div class="title"><?= htmlspecialchars(t('IT & Ingénierie Pédagogique','IT & Instructional Engineering')) ?></div>
          <div class="subtitle"><?= htmlspecialchars(t('Tech × Pédagogie — solutions sur mesure','Tech × Pedagogy — tailored solutions')) ?></div>
        </div>
      </div>

      <nav class="main-nav" aria-label="Navigation principale">
        <ul>
          <li><a href="index.php"><?= htmlspecialchars(t('Accueil','Home')) ?></a></li>
          <li><a href="services.php" class="active"><?= htmlspecialchars(t('Services','Services')) ?></a></li>
          <li><a href="solutions.php"><?= htmlspecialchars(t('Solutions','Solutions')) ?></a></li>
          <li><a href="blog.php"><?= htmlspecialchars(t('Blog','Blog')) ?></a></li>
          <li><a href="contact.php"><?= htmlspecialchars(t('Contact','Contact')) ?></a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <div class="lang-switch">
          <a href="?lang=fr" class="<?= ($lang==='fr')?'active':'' ?>">FR</a> | 
          <a href="?lang=en" class="<?= ($lang==='en')?'active':'' ?>">EN</a>
        </div>
        <?php if(isset($_SESSION['user'])): ?>
          <a class="btn btn-outline" href="espace_membre.php"><?= htmlspecialchars(t('Mon espace','My area')) ?></a>
          <a class="btn btn-primary" href="logout.php"><?= htmlspecialchars(t('Déconnexion','Logout')) ?></a>
        <?php else: ?>
          <a class="btn btn-outline" href="inscription.php"><?= htmlspecialchars(t('S\'inscrire','Sign up')) ?></a>
          <a class="btn btn-primary" href="connexion.php"><?= htmlspecialchars(t('Connexion','Login')) ?></a>
        <?php endif; ?>
      </div>
    </div>
  </header>

  <!-- ===== MAIN WITH GRID LAYOUT ===== -->
  <main class="container" role="main">
    
    <!-- Restructured with CSS Grid parent layout -->
    <div class="services-parent">
      
      <!-- div1: Title Section (full width) -->
      <div class="services-div1">
        <h1><?= htmlspecialchars(t('Nos Services','Our Services')) ?></h1>
        <p class="muted"><?= htmlspecialchars(t('Découvrez notre programme complet de développement Web et Applications mobiles.','Explore our comprehensive Web & App Development program.')) ?></p>
      </div>

      <!-- div2: Web & App Development Header -->
      <div class="services-div2">
        <h2><?= htmlspecialchars(t('Web & App Development','Web & App Development')) ?></h2>
        <p><?= htmlspecialchars(t(
            'Notre programme Web & App Development est conçu pour former des développeurs complets capables de créer des sites web modernes et des applications mobiles performantes.',
            'Our Web & App Development program is designed to train complete developers capable of building modern websites and high-performance mobile applications.'
        )) ?></p>
      </div>

      <!-- div3: Modules Principaux -->
      <div class="services-div3">
        <div class="card card-primary">
          <h3><?= htmlspecialchars(t('Modules Principaux','Main Modules')) ?></h3>
          <ul class="module-list">
            <li><strong><?= t('HTML & CSS','HTML & CSS') ?> :</strong> <?= t('Structure et style des pages web, responsive design, bonnes pratiques','Structure and styling of web pages, responsive design, best practices') ?></li>
            <li><strong><?= t('JavaScript & Frameworks','JavaScript & Frameworks') ?> :</strong> <?= t('Programmation dynamique, DOM, React.js, Vue.js','Dynamic programming, DOM, React.js, Vue.js') ?></li>
            <li><strong><?= t('Backend Development','Backend Development') ?> :</strong> <?= t('PHP, Node.js, bases de données MySQL / MongoDB, REST APIs','PHP, Node.js, MySQL / MongoDB databases, REST APIs') ?></li>
          </ul>
        </div>
      </div>

      <!-- div4: Mobile & Versioning -->
      <div class="services-div4">
        <div class="card card-secondary">
          <h3><?= htmlspecialchars(t('Mobile & Collaboration','Mobile & Collaboration')) ?></h3>
          <ul class="module-list">
            <li><strong><?= t('Mobile App Development','Mobile App Development') ?> :</strong> <?= t('Flutter, React Native, déploiement sur iOS et Android','Flutter, React Native, deployment on iOS and Android') ?></li>
            <li><strong><?= t('Versioning & Collaboration','Versioning & Collaboration') ?> :</strong> <?= t('Git, GitHub, workflow agile, travail en équipe','Git, GitHub, agile workflow, teamwork') ?></li>
            <li><strong><?= t('UI/UX Design','UI/UX Design') ?> :</strong> <?= t('Principes de design, wireframes, maquettes interactives','Design principles, wireframes, interactive mockups') ?></li>
          </ul>
        </div>
      </div>

      <!-- div5: Projets pratiques -->
      <div class="services-div5">
        <div class="card card-accent">
          <h3><?= htmlspecialchars(t('Projets pratiques','Hands-on Projects')) ?></h3>
          <ul class="module-list">
            <li><?= t('Création d\'un site web responsive complet','Build a fully responsive website') ?></li>
            <li><?= t('Développement d\'une application mobile fonctionnelle','Develop a functional mobile app') ?></li>
            <li><?= t('Mise en place d\'une API REST et intégration frontend','Setup a REST API and integrate with frontend') ?></li>
            <li><?= t('Projet final intégrant web et mobile','Final project integrating web and mobile') ?></li>
          </ul>
        </div>
      </div>

      <!-- div6: Compétences acquises -->
      <div class="services-div6">
        <div class="card card-success">
          <h3><?= htmlspecialchars(t('Compétences acquises','Skills Acquired')) ?></h3>
          <ul class="module-list">
            <li><?= t('Maîtrise des technologies front-end et back-end','Master front-end and back-end technologies') ?></li>
            <li><?= t('Capacité à créer des applications mobiles multiplateformes','Ability to build cross-platform mobile apps') ?></li>
            <li><?= t('Compréhension des bonnes pratiques UI/UX','Understanding UI/UX best practices') ?></li>
            <li><?= t('Travail collaboratif avec Git et GitHub','Collaborative work with Git and GitHub') ?></li>
          </ul>
        </div>
      </div>

    </div>

  </main>

  <!-- ===== FOOTER ===== -->
  <footer class="site-footer" style="margin-top:2rem;">
    <div class="container footer-inner" style="display:flex; justify-content:space-between; align-items:center;">
      <div>
        <strong><?= htmlspecialchars(t('IT & Ingénierie Pédagogique','IT & Instructional Engineering')) ?></strong>
        <p class="muted"><?= htmlspecialchars(t('Téléphone : +33 1 23 45 67 89 · Adresse fictive, Paris','Phone: +33 1 23 45 67 89 · Fake address, Paris')) ?></p>
      </div>
      <div class="socials" style="display:flex; gap:10px;">
        <a href="https://facebook.com" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="30"></a>
        <a href="https://twitter.com" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" width="30"></a>
        <a href="https://linkedin.com" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn" width="30"></a>
      </div>
    </div>
  </footer>

</body>
</html>
