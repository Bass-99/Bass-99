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
  <title><?= htmlspecialchars(t('Solutions - IT & Ingénierie Pédagogique', 'Solutions - IT & Instructional Engineering')) ?></title>
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
          <li><a href="solutions.php" class="active"><?= htmlspecialchars(t('Solutions','Solutions')) ?></a></li>
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
    
    <div class="services-parent">
      
      <!-- div1: Title Section (full width) -->
      <div class="services-div1">
        <h1><?= htmlspecialchars(t('Nos Solutions','Our Solutions')) ?></h1>
        <p class="muted"><?= htmlspecialchars(t('Des solutions innovantes adaptées à vos besoins spécifiques.','Innovative solutions tailored to your specific needs.')) ?></p>
      </div>

      <!-- div2: Solutions Overview -->
      <div class="services-div2">
        <h2><?= htmlspecialchars(t('Transformez votre Pédagogie','Transform Your Pedagogy')) ?></h2>
        <p><?= htmlspecialchars(t(
            'Nous proposons des solutions complètes pour intégrer la technologie dans vos processus pédagogiques, améliorant l\'engagement des apprenants et les résultats d\'apprentissage.',
            'We offer comprehensive solutions to integrate technology into your teaching processes, improving learner engagement and learning outcomes.'
        )) ?></p>
      </div>

      <!-- div3: Formation Solutions -->
      <div class="services-div3">
        <div class="card card-primary">
          <h3><?= htmlspecialchars(t('Formations Personnalisées','Customized Training')) ?></h3>
          <ul class="module-list">
            <li><?= t('Bootcamps intensifs de développement','Intensive development bootcamps') ?></li>
            <li><?= t('Formation à la demande sur mesure','On-demand custom training') ?></li>
            <li><?= t('Mentorat 1-to-1 avec experts','1-on-1 mentoring with experts') ?></li>
            <li><?= t('Certifications reconnues par l\'industrie','Industry-recognized certifications') ?></li>
          </ul>
        </div>
      </div>

      <!-- div4: Digital Transformation -->
      <div class="services-div4">
        <div class="card card-secondary">
          <h3><?= htmlspecialchars(t('Transformation Numérique','Digital Transformation')) ?></h3>
          <ul class="module-list">
            <li><?= t('Audit technologique complet','Complete technology audit') ?></li>
            <li><?= t('Implémentation d\'outils pédagogiques modernes','Implementation of modern teaching tools') ?></li>
            <li><?= t('Plateforme e-learning personnalisée','Custom e-learning platform') ?></li>
            <li><?= t('Support et accompagnement continu','Continuous support and coaching') ?></li>
          </ul>
        </div>
      </div>

      <!-- div5: Consulting Services -->
      <div class="services-div5">
        <div class="card card-accent">
          <h3><?= htmlspecialchars(t('Conseil Stratégique','Strategic Consulting')) ?></h3>
          <ul class="module-list">
            <li><?= t('Diagnostic des besoins pédagogiques','Pedagogical needs assessment') ?></li>
            <li><?= t('Stratégie digitale pour l\'éducation','Digital strategy for education') ?></li>
            <li><?= t('Optimisation des processus d\'apprentissage','Learning process optimization') ?></li>
            <li><?= t('Plan de transition et déploiement','Transition plan and rollout') ?></li>
          </ul>
        </div>
      </div>

      <!-- div6: Support & Maintenance -->
      <div class="services-div6">
        <div class="card card-success">
          <h3><?= htmlspecialchars(t('Support & Maintenance','Support & Maintenance')) ?></h3>
          <ul class="module-list">
            <li><?= t('Support technique 24/7','24/7 technical support') ?></li>
            <li><?= t('Mises à jour et maintenance régulière','Regular updates and maintenance') ?></li>
            <li><?= t('Formation des utilisateurs finaux','End-user training') ?></li>
            <li><?= t('Évolution continue de vos solutions','Continuous solution evolution') ?></li>
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
