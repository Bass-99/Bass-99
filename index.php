<?php
session_start();

// Gestion de la langue
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr','en'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

function t($fr,$en){
    global $lang;
    return $lang==='en' ? $en : $fr;
}
?>
<!doctype html>
<html lang="<?= $lang ?>">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title><?= t('IT & Ingénierie Pédagogique — Solutions Tech & Pédagogie','IT & Instructional Engineering — Tech & Teaching Solutions') ?> — itpedago</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Header -->
<header class="site-header" role="banner">
  <div class="container header-inner">
    <div class="brand">
      <img src="https://static.vecteezy.com/system/resources/previews/005/928/014/non_2x/it-logo-design-for-information-technology-company-logo-design-vector.jpg" alt="Logo IT" width="50" height="50" style="border-radius:4px;">
      <span class="brand-name"><?= t('itpedago','itpedago') ?></span>
    </div>
    <nav class="main-nav" aria-label="Navigation principale">
      <ul>
        <li><a href="index.php" class="active"><?= htmlspecialchars(t('Accueil','Home')) ?></a></li>
        <li><a href="services.php"><?= htmlspecialchars(t('Services','Services')) ?></a></li>
        <li><a href="solutions.php"><?= htmlspecialchars(t('Solutions','Solutions')) ?></a></li>
        <li><a href="blog.php"><?= htmlspecialchars(t('Blog','Blog')) ?></a></li>
        <li><a href="contact.php"><?= htmlspecialchars(t('Contact','Contact')) ?></a></li>
      </ul>
    </nav>
    <div class="header-actions">
      <div class="lang-switch" role="group">
        <a href="?lang=fr" class="<?= ($lang==='fr')?'active':'' ?>">FR</a> | 
        <a href="?lang=en" class="<?= ($lang==='en')?'active':'' ?>">EN</a>
      </div>
      <?php if(isset($_SESSION['user'])): ?>
        <a class="btn btn-outline" href="espace_membre.php"><?= t('Mon espace','My area') ?></a>
        <a class="btn btn-primary" href="logout.php"><?= t('Déconnexion','Logout') ?></a>
      <?php else: ?>
        <a class="btn btn-outline" href="inscription.php"><?= t('S\'inscrire','Sign up') ?></a>
        <a class="btn btn-primary" href="connexion.php"><?= t('Connexion','Login') ?></a>
      <?php endif; ?>
    </div>
  </div>
</header>

<main role="main">
  
  <!-- Enhanced Hero Section with compelling messaging -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1><?= t('Développer','Develop') ?></h1>
        <h2><?= t('Apprendre & Innover','Learn & Innovate') ?></h2>
        <p><?= t('Transformez votre approche pédagogique avec les meilleures solutions technologiques. Formations complètes, consulting stratégique et support continu.','Transform your teaching approach with cutting-edge tech solutions. Complete training, strategic consulting, and continuous support.') ?></p>
        <div style="display: flex; gap: 16px; margin-top: 32px;">
          <a href="inscription.php" class="btn btn-primary"><?= t('Commencer Maintenant','Get Started Now') ?></a>
          <a href="services.php" class="btn btn-outline"><?= t('Découvrir les Services','Explore Services') ?></a>
        </div>
      </div>
      <div class="hero-aside">
        <p><?= t('Nous vous accompagnons dans votre transformation numérique en proposant des solutions intégrées : formations en développement web et mobile, consulting en transformation pédagogique, et support technique 24/7.','We support your digital transformation with integrated solutions: web & mobile development training, pedagogical consulting, and 24/7 technical support.') ?></p>
      </div>
    </div>
  </section>

  <!-- Services Showcase Section - showing key services -->
  <section class="resources">
    <div class="container">
      <div style="text-align: center; margin-bottom: 3rem;">
        <h2 style="font-size: 2rem; color: var(--color-primary); margin-bottom: 0.5rem;"><?= t('Nos Services Clés','Our Key Services') ?></h2>
        <p style="color: var(--color-text);"><?= t('Explorez notre gamme complète de solutions pour la technologie et la pédagogie','Explore our complete range of technology and pedagogy solutions') ?></p>
      </div>
      <div class="cards-grid">
        
        <!-- Service 1: Web Development -->
        <div class="card card-primary">
          <div class="card-decoration"></div>
          <h3><?= t('Développement Web','Web Development') ?></h3>
          <p><?= t('HTML, CSS, JavaScript, React, Node.js et technologies backend modernes. Créez des sites web performants et responsifs.','HTML, CSS, JavaScript, React, Node.js and modern backend technologies. Build high-performance responsive websites.') ?></p>
          <a href="services.php" class="btn btn-card"><?= t('En savoir plus','Learn more') ?></a>
        </div>

        <!-- Service 2: Mobile Apps -->
        <div class="card card-secondary">
          <div class="card-decoration"></div>
          <h3><?= t('Applications Mobiles','Mobile Apps') ?></h3>
          <p><?= t('Flutter, React Native et développement natif. Déploiement sur iOS et Android avec support multiplateforme.','Flutter, React Native and native development. Deploy on iOS and Android with cross-platform support.') ?></p>
          <a href="services.php" class="btn btn-card"><?= t('En savoir plus','Learn more') ?></a>
        </div>

        <!-- Service 3: Strategic Consulting -->
        <div class="card card-accent">
          <div class="card-decoration"></div>
          <h3><?= t('Conseil Stratégique','Strategic Consulting') ?></h3>
          <p><?= t('Diagnostic pédagogique complet, stratégie digitale et optimisation des processus d\'apprentissage.','Complete pedagogical assessment, digital strategy and learning process optimization.') ?></p>
          <a href="solutions.php" class="btn btn-card"><?= t('En savoir plus','Learn more') ?></a>
        </div>

        <!-- Service 4: Digital Transformation -->
        <div class="card card-orange">
          <div class="card-decoration"></div>
          <h3><?= t('Transformation Numérique','Digital Transformation') ?></h3>
          <p><?= t('Implémentation d\'outils modernes, plateforme e-learning personnalisée et accompagnement complet.','Implementation of modern tools, custom e-learning platform and comprehensive support.') ?></p>
          <a href="solutions.php" class="btn btn-card"><?= t('En savoir plus','Learn more') ?></a>
        </div>

        <!-- Service 5: UI/UX Design -->
        <div class="card card-light">
          <div class="card-decoration"></div>
          <h3><?= t('Design UI/UX','UI/UX Design') ?></h3>
          <p><?= t('Principes de design, wireframes et maquettes interactives. Créez des expériences utilisateur exceptionnelles.','Design principles, wireframes and interactive mockups. Create exceptional user experiences.') ?></p>
          <a href="services.php" class="btn btn-card"><?= t('En savoir plus','Learn more') ?></a>
        </div>

        <!-- Service 6: 24/7 Support -->
        <div class="card card-light">
          <div class="card-decoration"></div>
          <h3><?= t('Support 24/7','24/7 Support') ?></h3>
          <p><?= t('Support technique continu, mises à jour régulières, formation des utilisateurs et évolution continue.','Continuous technical support, regular updates, user training and ongoing evolution.') ?></p>
          <a href="solutions.php" class="btn btn-card"><?= t('En savoir plus','Learn more') ?></a>
        </div>

      </div>
    </div>
  </section>

  <!-- Featured Solutions Section -->
  <section class="solutions-showcase" style="background: var(--color-light); padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 3rem;">
        <h2 style="font-size: 2rem; color: var(--color-primary); margin-bottom: 0.5rem;"><?= t('Nos Solutions Populaires','Our Popular Solutions') ?></h2>
        <p style="color: var(--color-text);"><?= t('Des solutions éprouvées pour transformer votre approche pédagogique','Proven solutions to transform your teaching approach') ?></p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <!-- Solution 1 -->
        <div class="card card-primary">
          <h3><?= t('Bootcamps Intensifs','Intensive Bootcamps') ?></h3>
          <ul style="list-style: none; padding: 0;">
            <li style="padding: 8px 0;"><strong>✓</strong> <?= t('Formation accélérée 12 semaines','12-week accelerated training') ?></li>
            <li style="padding: 8px 0;"><strong>✓</strong> <?= t('Projets réels en entreprise','Real-world company projects') ?></li>
            <li style="padding: 8px 0;"><strong>✓</strong> <?= t('Certification reconnue','Industry recognized certification') ?></li>
            <li style="padding: 8px 0;"><strong>✓</strong> <?= t('Job placement assistance','Job placement assistance') ?></li>
          </ul>
          <a href="solutions.php" class="btn btn-card" style="margin-top: 1rem;"><?= t('Détails','Details') ?></a>
        </div>

        <!-- Solution 2 -->
        <div class="card card-secondary">
          <h3><?= t('Plateforme E-Learning','E-Learning Platform') ?></h3>
          <ul style="list-style: none; padding: 0;">
            <li style="padding: 8px 0;"><strong>✓</strong> <?= t('Adaptée à vos besoins','Tailored to your needs') ?></li>
            <li style="padding: 8px 0;"><strong>✓</strong> <?= t('Intégration LMS complète','Complete LMS integration') ?></li>
            <li style="padding: 8px 0;"><strong>✓</strong> <?= t('Analytics et reporting','Analytics and reporting') ?></li>
            <li style="padding: 8px 0;"><strong>✓</strong> <?= t('Support et maintenance','Support and maintenance') ?></li>
          </ul>
          <a href="solutions.php" class="btn btn-card" style="margin-top: 1rem;"><?= t('Détails','Details') ?></a>
        </div>

      </div>
    </div>
  </section>

  <!-- Featured Blog Articles -->
  <section class="blog-showcase" style="padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 3rem;">
        <h2 style="font-size: 2rem; color: var(--color-primary); margin-bottom: 0.5rem;"><?= t('Nos Derniers Articles','Our Latest Articles') ?></h2>
        <p style="color: var(--color-text);"><?= t('Insights et tendances dans la tech et la pédagogie','Insights and trends in tech and pedagogy') ?></p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
        
        <!-- Article 1 -->
        <div class="card card-accent">
          <h3><?= t('React.js en 2025','React.js in 2025') ?></h3>
          <p style="font-size: 13px; color: #666; margin: 0.5rem 0;"><?= t('15 novembre 2025','November 15, 2025') ?></p>
          <p><?= t('Les dernières tendances et meilleures pratiques en développement React pour 2025.','Latest trends and best practices in React development for 2025.') ?></p>
          <a href="blog.php" class="btn btn-card"><?= t('Lire','Read') ?></a>
        </div>

        <!-- Article 2 -->
        <div class="card card-light">
          <h3><?= t('UX Design Pédagogique','Educational UX Design') ?></h3>
          <p style="font-size: 13px; color: #666; margin: 0.5rem 0;"><?= t('10 novembre 2025','November 10, 2025') ?></p>
          <p><?= t('Comment créer des interfaces intuitives qui engagent les apprenants.','How to create intuitive interfaces that engage learners.') ?></p>
          <a href="blog.php" class="btn btn-card"><?= t('Lire','Read') ?></a>
        </div>

        <!-- Article 3 -->
        <div class="card card-light">
          <h3><?= t('DevOps Modernes','Modern DevOps') ?></h3>
          <p style="font-size: 13px; color: #666; margin: 0.5rem 0;"><?= t('5 novembre 2025','November 5, 2025') ?></p>
          <p><?= t('Automatisation et amélioration du workflow de développement.','Automation and improvement of development workflow.') ?></p>
          <a href="blog.php" class="btn btn-card"><?= t('Lire','Read') ?></a>
        </div>

      </div>
      <div style="text-align: center; margin-top: 3rem;">
        <a href="blog.php" class="btn btn-primary"><?= t('Voir tous les articles','View all articles') ?></a>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="cta-section" style="background: var(--color-primary); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
      <h2 style="font-size: 2rem; margin-bottom: 1rem;"><?= t('Prêt à Commencer?','Ready to Get Started?') ?></h2>
      <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;"><?= t('Rejoignez des centaines d\'apprenants qui ont transformé leur carrière avec nos solutions.','Join hundreds of learners who have transformed their career with our solutions.') ?></p>
      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <a href="inscription.php" class="btn btn-primary" style="background: white; color: var(--color-primary);"><?= t('S\'inscrire Maintenant','Sign Up Now') ?></a>
        <a href="contact.php" class="btn" style="background: transparent; border: 2px solid white; color: white;"><?= t('Nous Contacter','Contact Us') ?></a>
      </div>
    </div>
  </section>

</main>

<!-- Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <h4><?= t('Entreprise','Company') ?></h4>
        <ul>
          <li><a href="index.php"><?= t('Accueil','Home') ?></a></li>
          <li><a href="services.php"><?= t('Services','Services') ?></a></li>
          <li><a href="solutions.php"><?= t('Solutions','Solutions') ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4><?= t('Ressources','Resources') ?></h4>
        <ul>
          <li><a href="blog.php"><?= t('Blog','Blog') ?></a></li>
          <li><a href="contact.php"><?= t('Contact','Contact') ?></a></li>
          <li><a href="#"><?= t('Documentation','Documentation') ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4><?= t('Communauté','Community') ?></h4>
        <ul>
          <li><a href="#">GitHub</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4><?= t('Légal','Legal') ?></h4>
        <ul>
          <li><a href="#"><?= t('Mentions légales','Legal notice') ?></a></li>
          <li><a href="#"><?= t('Confidentialité','Privacy') ?></a></li>
          <li><a href="#"><?= t('CGU','Terms') ?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p><?= t('Copyright © 2025 IT & Ingénierie Pédagogique','Copyright © 2025 IT & Instructional Engineering') ?></p>
    </div>
  </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
