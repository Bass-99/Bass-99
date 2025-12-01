<?php
session_start();

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
  <title><?= htmlspecialchars(t('Blog - IT & Ingénierie Pédagogique', 'Blog - IT & Instructional Engineering')) ?></title>
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
          <li><a href="services.php"><?= htmlspecialchars(t('Services','Services')) ?></a></li>
          <li><a href="solutions.php"><?= htmlspecialchars(t('Solutions','Solutions')) ?></a></li>
          <li><a href="blog.php" class="active"><?= htmlspecialchars(t('Blog','Blog')) ?></a></li>
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
    
    <div class="services-parent">
      
      <!-- div1: Title Section -->
      <div class="services-div1">
        <h1><?= htmlspecialchars(t('Notre Blog','Our Blog')) ?></h1>
        <p class="muted"><?= htmlspecialchars(t('Articles récents sur la technologie et la pédagogie.','Recent articles on technology and pedagogy.')) ?></p>
      </div>

      <!-- div2: Featured Article -->
      <div class="services-div2">
        <h2><?= htmlspecialchars(t('Article à la Une','Featured Article')) ?></h2>
        <p><?= htmlspecialchars(t(
            'L\'intégration de l\'IA dans l\'éducation transforme la façon dont nous apprenons. Découvrez les opportunités et les défis de cette révolution pédagogique.',
            'The integration of AI in education is transforming how we learn. Discover the opportunities and challenges of this pedagogical revolution.'
        )) ?></p>
      </div>

      <!-- div3: Blog Post 1 -->
      <div class="services-div3">
        <div class="card card-primary">
          <h3><?= htmlspecialchars(t('React.js en 2025','React.js in 2025')) ?></h3>
          <p class="card-date"><?= t('15 novembre 2025','November 15, 2025') ?></p>
          <p><?= t('Les dernières tendances en développement React et les meilleurs pratiques pour vos projets.','Latest React development trends and best practices for your projects.') ?></p>
          <a href="blog-article-react-2025.php" class="btn btn-outline"><?= t('Lire plus','Read more') ?></a>
        </div>
      </div>

      <!-- div4: Blog Post 2 -->
      <div class="services-div4">
        <div class="card card-secondary">
          <h3><?= htmlspecialchars(t('UX Design pour l\'Éducation','UX Design for Education')) ?></h3>
          <p class="card-date"><?= t('10 novembre 2025','November 10, 2025') ?></p>
          <p><?= t('Comment créer des interfaces intuitives qui engagent les apprenants.','How to create intuitive interfaces that engage learners.') ?></p>
          <a href="blog-article-ux-design.php" class="btn btn-outline"><?= t('Lire plus','Read more') ?></a>
        </div>
      </div>

      <!-- div5: Blog Post 3 -->
      <div class="services-div5">
        <div class="card card-accent">
          <h3><?= htmlspecialchars(t('DevOps pour Startups','DevOps for Startups')) ?></h3>
          <p class="card-date"><?= t('5 novembre 2025','November 5, 2025') ?></p>
          <p><?= t('Automatiser votre déploiement et améliorer votre flux de développement.','Automate your deployment and improve your development workflow.') ?></p>
          <a href="blog-article-devops.php" class="btn btn-outline"><?= t('Lire plus','Read more') ?></a>
        </div>
      </div>

      <!-- div6: Blog Post 4 -->
      <div class="services-div6">
        <div class="card card-success">
          <h3><?= htmlspecialchars(t('Blockchain & Sécurité','Blockchain & Security')) ?></h3>
          <p class="card-date"><?= t('1 novembre 2025','November 1, 2025') ?></p>
          <p><?= t('Les fondamentaux de la blockchain et de la sécurité des données.','Fundamentals of blockchain and data security.') ?></p>
          <a href="blog-article-blockchain.php" class="btn btn-outline"><?= t('Lire plus','Read more') ?></a>
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
