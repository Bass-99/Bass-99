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
  <title><?= htmlspecialchars(t('Connexion - IT & Ingénierie Pédagogique', 'Login - IT & Instructional Engineering')) ?></title>
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
        <a class="btn btn-outline" href="inscription.php"><?= htmlspecialchars(t('S\'inscrire','Sign up')) ?></a>
      </div>
    </div>
  </header>

  <!-- ===== MAIN WITH GRID LAYOUT ===== -->
  <main class="container" role="main">
    
    <div class="services-parent">
      
      <!-- div1: Title Section -->
      <div class="services-div1">
        <h1><?= htmlspecialchars(t('Connexion','Login')) ?></h1>
        <p class="muted"><?= htmlspecialchars(t('Accédez à votre compte personnel.','Access your personal account.')) ?></p>
      </div>

      <!-- div2: Welcome Message -->
      <div class="services-div2">
        <h2><?= htmlspecialchars(t('Connectez-vous à votre compte','Sign In to Your Account')) ?></h2>
        <p><?= htmlspecialchars(t(
            'Utilisez vos identifiants pour accéder à votre espace personnel et à toutes vos formations.',
            'Use your credentials to access your personal space and all your courses.'
        )) ?></p>
      </div>

      <!-- div3: Login Form -->
      <div class="services-div3">
        <div class="card card-primary">
          <h3><?= htmlspecialchars(t('Identifiants','Credentials')) ?></h3>
          <form method="POST" action="authenticate.php" style="display:flex; flex-direction:column; gap:12px;">
            <input type="email" name="email" placeholder="<?= t('Email','Email') ?>" required style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
            <input type="password" name="password" placeholder="<?= t('Mot de passe','Password') ?>" required style="padding:10px; border:1px solid #ddd; border-radius:4px; font-size:14px;">
            <label style="display:flex; gap:8px; font-size:14px; margin-bottom:5px;">
              <input type="checkbox" name="remember">
              <span><?= t('Se souvenir de moi','Remember me') ?></span>
            </label>
            <button type="submit" class="btn btn-primary"><?= htmlspecialchars(t('Se Connecter','Sign In')) ?></button>
          </form>
        </div>
      </div>

      <!-- div4: Recovery Options -->
      <div class="services-div4">
        <div class="card card-secondary">
          <h3><?= htmlspecialchars(t('Besoin d\'aide?','Need Help?')) ?></h3>
          <ul class="module-list">
            <li><a href="forgot_password.php"><strong><?= t('Mot de passe oublié?','Forgot password?') ?></strong></a></li>
            <li><a href="contact.php"><strong><?= t('Contacter le support','Contact support') ?></strong></a></li>
            <li><a href="faq.php"><strong><?= t('Consulter la FAQ','Check FAQ') ?></strong></a></li>
          </ul>
        </div>
      </div>

      <!-- div5: Security Info -->
      <div class="services-div5">
        <div class="card card-accent">
          <h3><?= htmlspecialchars(t('Sécurité','Security')) ?></h3>
          <ul class="module-list">
            <li><?= t('Vos données sont chiffrées et protégées','Your data is encrypted and protected') ?></li>
            <li><?= t('Authentification sécurisée SSL','Secure SSL authentication') ?></li>
            <li><?= t('Respect de la politique de confidentialité RGPD','GDPR privacy policy compliance') ?></li>
            <li><?= t('Accès sécurisé 24h/24','24/7 secure access') ?></li>
          </ul>
        </div>
      </div>

      <!-- div6: Sign Up Prompt -->
      <div class="services-div6">
        <div class="card card-success">
          <h3><?= htmlspecialchars(t('Nouveau Client?','New Customer?')) ?></h3>
          <p><?= t('Créez un compte en quelques minutes pour accéder à toutes nos formations et services.','Create an account in minutes to access all our courses and services.') ?></p>
          <p style="margin-top:15px;">
            <a href="inscription.php" class="btn btn-primary"><?= htmlspecialchars(t('S\'inscrire Maintenant','Sign Up Now')) ?></a>
          </p>
          <p style="margin-top:10px; font-size:14px; color:#666;"><?= t('C\'est gratuit et rapide!','It\'s free and quick!') ?></p>
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
