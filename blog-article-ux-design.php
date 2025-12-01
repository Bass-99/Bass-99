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
  <title><?= htmlspecialchars(t('UX Design pour l\'Éducation', 'UX Design for Education')) ?></title>
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

  <!-- ===== MAIN CONTENT ===== -->
  <main class="container article-main" role="main">
    
    <div style="margin-top: 2rem; margin-bottom: 1rem;">
      <a href="blog.php" class="btn btn-outline" style="display: inline-flex; gap: 8px;">
        ← <?= t('Retour au Blog', 'Back to Blog') ?>
      </a>
    </div>

    <article class="article-container">
      
      <div class="article-header">
        <h1><?= t('UX Design pour l\'Éducation', 'UX Design for Education') ?></h1>
        <p class="article-meta">
          <?= t('10 novembre 2025', 'November 10, 2025') ?> | 
          <?= t('Par IT & Ingénierie Pédagogique', 'By IT & Instructional Engineering') ?>
        </p>
      </div>

      <div class="article-content">
        
        <section>
          <h2><?= t('🎨 Principes fondamentaux de l\'UX pour l\'éducation', '🎨 Fundamental Principles of UX for Education') ?></h2>
          
          <h3><?= t('Accessibilité et Inclusivité', 'Accessibility and Inclusivity') ?></h3>
          <p><?= t(
            'L\'accessibilité n\'est pas une option dans l\'éducation - c\'est une nécessité. Les interfaces doivent accommoder les apprenants avec des handicaps visuels, auditifs ou moteurs. 
            <br><br>
            Les contrastes de couleur doivent être suffisants (ratio WCAG AA minimum 4.5:1), les textes doivent être redimensionnables, et les contenus vidéo nécessitent des sous-titres. 
            <br><br>
            Une interface véritablement inclusive crée un environnement où chaque apprenant se sent bienvenu et capable d\'apprendre efficacement.',
            'Accessibility is not optional in education - it\'s a necessity. Interfaces must accommodate learners with visual, hearing, or motor disabilities. 
            <br><br>
            Color contrasts must be sufficient (minimum WCAG AA ratio 4.5:1), text must be resizable, and video content requires captions. 
            <br><br>
            A truly inclusive interface creates an environment where every learner feels welcome and able to learn effectively.'
          ) ?></p>

          <h3><?= t('Clarté et Simplicité', 'Clarity and Simplicity') ?></h3>
          <p><?= t(
            'Les apprenants n\'ont pas besoin de design flashy - ils ont besoin de clarté. Les interfaces d\'apprentissage doivent être intuitives et non surchargées. 
            <br><br>
            L\'utilisation d\'une hiérarchie visuelle claire, d\'espaces blancs appropriés et de typographie lisible guide naturellement l\'utilisateur à travers le contenu. 
            <br><br>
            La règle d\'or : si une fonction ou un élément n\'aide pas l\'apprenant, supprimez-le.',
            'Learners don\'t need flashy design - they need clarity. Learning interfaces must be intuitive and uncluttered. 
            <br><br>
            Using a clear visual hierarchy, appropriate white space, and readable typography naturally guides the user through the content. 
            <br><br>
            The golden rule: if a feature or element doesn\'t help the learner, remove it.'
          ) ?></p>

          <h3><?= t('Retours et Engagement', 'Feedback and Engagement') ?></h3>
          <p><?= t(
            'Les apprenants ont besoin de retours immédiats sur leurs actions. Un système de notification clair, des confirmations visuelles et des messages d\'erreur constructifs maintiennent l\'engagement. 
            <br><br>
            Les micro-interactions (animations subtiles, changements de couleur) créent une sensation de réactivité et de contrôle. 
            <br><br>
            L\'engagement naît de la confiance que l\'apprenant a envers l\'interface - chaque interaction doit renforcer cette confiance.',
            'Learners need immediate feedback on their actions. A clear notification system, visual confirmations, and constructive error messages maintain engagement. 
            <br><br>
            Micro-interactions (subtle animations, color changes) create a sense of responsiveness and control. 
            <br><br>
            Engagement comes from the learner\'s trust in the interface - every interaction must reinforce that trust.'
          ) ?></p>
        </section>

        <section style="margin-top: 2rem;">
          <h2><?= t('📊 Tableau : Éléments clés de l\'UX pour l\'Éducation', '📊 Table: Key Elements of UX for Education') ?></h2>
          
          <table class="article-table">
            <thead>
              <tr>
                <th><?= t('Élément', 'Element') ?></th>
                <th><?= t('Description', 'Description') ?></th>
                <th><?= t('Impact sur l\'Apprentissage', 'Impact on Learning') ?></th>
                <th><?= t('Exemple de Mise en Œuvre', 'Implementation Example') ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?= t('Navigation intuitive', 'Intuitive Navigation') ?></td>
                <td><?= t('Menu clair et structuré', 'Clear and structured menu') ?></td>
                <td><?= t('Réduit la confusion', 'Reduces confusion') ?></td>
                <td><?= t('Menu hiérarchisé avec breadcrumbs', 'Hierarchical menu with breadcrumbs') ?></td>
              </tr>
              <tr>
                <td><?= t('Feedback visuel', 'Visual Feedback') ?></td>
                <td><?= t('Confirmations d\'actions', 'Action confirmations') ?></td>
                <td><?= t('Augmente la confiance', 'Increases confidence') ?></td>
                <td><?= t('Animations de hover, checkmarks', 'Hover animations, checkmarks') ?></td>
              </tr>
              <tr>
                <td><?= t('Typographie lisible', 'Readable Typography') ?></td>
                <td><?= t('Polices >= 14px pour le corps', 'Fonts >= 14px for body') ?></td>
                <td><?= t('Réduit la fatigue oculaire', 'Reduces eye strain') ?></td>
                <td><?= t('Segoe UI, Roboto, line-height 1.6', 'Segoe UI, Roboto, line-height 1.6') ?></td>
              </tr>
              <tr>
                <td><?= t('Contraste suffisant', 'Sufficient Contrast') ?></td>
                <td><?= t('Ratio WCAG AA (4.5:1)', 'WCAG AA ratio (4.5:1)') ?></td>
                <td><?= t('Améliore l\'accessibilité', 'Improves accessibility') ?></td>
                <td><?= t('Noir sur blanc ou couleurs testées', 'Black on white or tested colors') ?></td>
              </tr>
              <tr>
                <td><?= t('Responsive Design', 'Responsive Design') ?></td>
                <td><?= t('S\'adapte à tous les écrans', 'Adapts to all screens') ?></td>
                <td><?= t('Apprentissage flexible', 'Flexible learning') ?></td>
                <td><?= t('Mobile-first, media queries', 'Mobile-first, media queries') ?></td>
              </tr>
              <tr>
                <td><?= t('Espaces blancs', 'White Space') ?></td>
                <td><?= t('Marges et padding appropriés', 'Appropriate margins and padding') ?></td>
                <td><?= t('Clarifie le contenu', 'Clarifies content') ?></td>
                <td><?= t('Padding: 2rem, gap: 1rem', 'Padding: 2rem, gap: 1rem') ?></td>
              </tr>
              <tr>
                <td><?= t('Système de couleurs', 'Color System') ?></td>
                <td><?= t('Palette cohérente et limitée', 'Consistent and limited palette') ?></td>
                <td><?= t('Guide l\'attention', 'Guides attention') ?></td>
                <td><?= t('Max 5 couleurs, intentionnelles', 'Max 5 colors, intentional') ?></td>
              </tr>
              <tr>
                <td><?= t('Messages d\'erreur clairs', 'Clear Error Messages') ?></td>
                <td><?= t('Expliquent le problème', 'Explain the problem') ?></td>
                <td><?= t('Réduit la frustration', 'Reduces frustration') ?></td>
                <td><?= t('Texte en rouge + suggestion', 'Text in red + suggestion') ?></td>
              </tr>
            </tbody>
          </table>
        </section>

      </div>

    </article>

  </main>

  <!-- ===== FOOTER ===== -->
  <footer class="site-footer" style="margin-top:3rem;">
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
