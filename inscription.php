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
  <title><?= htmlspecialchars(t('Inscription - IT & Ingénierie Pédagogique', 'Sign Up - IT & Instructional Engineering')) ?></title>
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
          <li><a href="contact.php"><?= htmlspecialchars(t('Contact','Contact')) ?></a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <div class="lang-switch">
          <a href="?lang=fr" class="<?= ($lang==='fr')?'active':'' ?>">FR</a> | 
          <a href="?lang=en" class="<?= ($lang==='en')?'active':'' ?>">EN</a>
        </div>
        <a class="btn btn-outline" href="connexion.php"><?= htmlspecialchars(t('Connexion','Login')) ?></a>
      </div>
    </div>
  </header>

  <!-- ===== MAIN WITH GRID LAYOUT ===== -->
  <main class="container" role="main">
    
    <div class="services-parent">
      
      <!-- div1: Title Section -->
      <div class="services-div1">
        <h1><?= htmlspecialchars(t('Créer un Compte','Create an Account')) ?></h1>
        <p class="muted"><?= htmlspecialchars(t('Rejoignez notre communauté d\'apprenants et de professionnels.','Join our community of learners and professionals.')) ?></p>
      </div>

      <!-- div2: Benefits Overview -->
      <div class="services-div2">
        <h2><?= htmlspecialchars(t('Pourquoi s\'inscrire?','Why Sign Up?')) ?></h2>
        <p><?= htmlspecialchars(t(
            'Accédez à nos formations exclusives, suivez vos progrès et recevez des certifications reconnues par l\'industrie.',
            'Access our exclusive training, track your progress, and receive industry-recognized certifications.'
        )) ?></p>
      </div>

      <!-- div3: Registration Form -->
      <div class="services-div3">
        <div class="card card-primary">
          <h3><?= htmlspecialchars(t('Informations Personnelles','Personal Information')) ?></h3>
          <form method="POST" action="register.php" style="display:flex; flex-direction:column; gap:12px;">
            <input type="text" name="first_name" placeholder="<?= t('Prénom','First Name') ?>" required style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
            <input type="text" name="last_name" placeholder="<?= t('Nom','Last Name') ?>" required style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
            <input type="email" name="email" placeholder="<?= t('Email','Email') ?>" required style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
            <button type="submit" class="btn btn-primary"><?= htmlspecialchars(t('Continuer','Continue')) ?></button>
          </form>
        </div>
      </div>

      <!-- div4: Account Setup -->
      <div class="services-div4">
        <div class="card card-secondary">
          <h3><?= htmlspecialchars(t('Paramètres du Compte','Account Setup')) ?></h3>
          <form style="display:flex; flex-direction:column; gap:12px;">
            <input type="password" placeholder="<?= t('Mot de passe','Password') ?>" required style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
            <input type="password" placeholder="<?= t('Confirmer le mot de passe','Confirm Password') ?>" required style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
            <label style="display:flex; gap:8px; font-size:14px;">
              <input type="checkbox" required>
              <span><?= t('J\'accepte les conditions d\'utilisation','I accept the terms of use') ?></span>
            </label>
          </form>
        </div>
      </div>

      <!-- div5: Professional Profile -->
      <div class="services-div5">
        <div class="card card-accent">
          <h3><?= htmlspecialchars(t('Profil Professionnel','Professional Profile')) ?></h3>
          <form style="display:flex; flex-direction:column; gap:12px;">
            <select style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
              <option><?= t('-- Secteur d\'activité --','-- Industry --') ?></option>
              <option><?= t('Éducation','Education') ?></option>
              <option><?= t('Technologie','Technology') ?></option>
              <option><?= t('Entreprise','Business') ?></option>
              <option><?= t('Autre','Other') ?></option>
            </select>
            <select style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
              <option><?= t('-- Niveau d\'expérience --','-- Experience Level --') ?></option>
              <option><?= t('Débutant','Beginner') ?></option>
              <option><?= t('Intermédiaire','Intermediate') ?></option>
              <option><?= t('Avancé','Advanced') ?></option>
            </select>
          </form>
        </div>
      </div>

      <!-- div6: Next Steps -->
      <div class="services-div6">
        <div class="card card-success">
          <h3><?= htmlspecialchars(t('Prochaines Étapes','Next Steps')) ?></h3>
          <ul class="module-list">
            <li><?= t('Confirmez votre email','Confirm your email') ?></li>
            <li><?= t('Complétez votre profil','Complete your profile') ?></li>
            <li><?= t('Commencez votre première formation','Start your first course') ?></li>
            <li><?= t('Rejoignez notre communauté','Join our community') ?></li>
          </ul>
          <p style="margin-top:15px; font-size:14px;"><?= t('Vous avez déjà un compte?','Already have an account?') ?> <a href="connexion.php"><strong><?= t('Se connecter','Log in') ?></strong></a></p>
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
