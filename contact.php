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
  <title><?= htmlspecialchars(t('Contact - IT & Ingénierie Pédagogique', 'Contact - IT & Instructional Engineering')) ?></title>
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
          <li><a href="blog.php"><?= htmlspecialchars(t('Blog','Blog')) ?></a></li>
          <li><a href="contact.php" class="active"><?= htmlspecialchars(t('Contact','Contact')) ?></a></li>
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
        <h1><?= htmlspecialchars(t('Nous Contacter','Contact Us')) ?></h1>
        <p class="muted"><?= htmlspecialchars(t('Nous répondons à toutes vos questions dans les 24 heures.','We answer all your questions within 24 hours.')) ?></p>
      </div>

      <!-- div2: Contact Information -->
      <div class="services-div2">
        <h2><?= htmlspecialchars(t('Coordonnées','Get in Touch')) ?></h2>
        <p><?= htmlspecialchars(t(
            'Vous avez des questions sur nos services? Contactez-nous via l\'un de nos canaux ci-dessous.',
            'Have questions about our services? Contact us through one of the channels below.'
        )) ?></p>
      </div>

      <!-- div3: Email Contact -->
      <div class="services-div3">
        <div class="card card-primary">
          <h3><?= htmlspecialchars(t('Email','Email')) ?></h3>
          <p><strong><?= t('Général','General') ?></strong></p>
          <p><a href="mailto:info@itpedago.fr">info@itpedago.fr</a></p>
          <p><strong><?= t('Support Technique','Technical Support') ?></strong></p>
          <p><a href="mailto:support@itpedago.fr">support@itpedago.fr</a></p>
          <p><strong><?= t('Partenariats','Partnerships') ?></strong></p>
          <p><a href="mailto:partnerships@itpedago.fr">partnerships@itpedago.fr</a></p>
        </div>
      </div>

      <!-- div4: Phone Contact -->
      <div class="services-div4">
        <div class="card card-secondary">
          <h3><?= htmlspecialchars(t('Téléphone','Phone')) ?></h3>
          <p><strong><?= t('Ligne principale','Main Line') ?></strong></p>
          <p><a href="tel:+33123456789">+33 1 23 45 67 89</a></p>
          <p><strong><?= t('Support disponible','Support Available') ?></strong></p>
          <p><?= t('Lundi - Vendredi: 9h-18h CET','Monday - Friday: 9am-6pm CET') ?></p>
          <p><?= t('Samedi - Dimanche: Fermé','Saturday - Sunday: Closed') ?></p>
        </div>
      </div>

      <!-- div5: Location -->
      <div class="services-div5">
        <div class="card card-accent">
          <h3><?= htmlspecialchars(t('Localisation','Location')) ?></h3>
          <p><strong><?= t('Adresse','Address') ?></strong></p>
          <p><?= t('123 Rue de la Tech','123 Tech Street') ?></p>
          <p><?= t('75001 Paris, France','75001 Paris, France') ?></p>
          <p style="margin-top:15px;"><strong><?= t('Horaires','Hours') ?></strong></p>
          <p><?= t('Lun-Ven: 8h-19h','Mon-Fri: 8am-7pm') ?></p>
        </div>
      </div>

      <!-- div6: Contact Form -->
      <div class="services-div6">
        <div class="card card-success">
          <h3><?= htmlspecialchars(t('Formulaire de Contact','Contact Form')) ?></h3>
          <form method="POST" action="process_contact.php" style="display:flex; flex-direction:column; gap:10px;">
            <input type="text" name="name" placeholder="<?= t('Votre nom','Your name') ?>" required style="padding:8px; border:1px solid #ddd; border-radius:4px;">
            <input type="email" name="email" placeholder="<?= t('Votre email','Your email') ?>" required style="padding:8px; border:1px solid #ddd; border-radius:4px;">
            <textarea name="message" placeholder="<?= t('Votre message','Your message') ?>" rows="4" required style="padding:8px; border:1px solid #ddd; border-radius:4px; font-family:inherit;"></textarea>
            <button type="submit" class="btn btn-primary"><?= htmlspecialchars(t('Envoyer','Send')) ?></button>
          </form>
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
