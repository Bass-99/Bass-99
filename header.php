<?php
session_start();

// Gestion de la langue
if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr','en'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';
function t($fr, $en) {
    global $lang;
    return $lang === 'en' ? $en : $fr;
}
?>
<header class="site-header" role="banner">
  <div class="container header-inner">
    <div class="brand">
      <img src="https://static.vecteezy.com/system/resources/previews/005/928/014/non_2x/it-logo-design-for-information-technology-company-logo-design-vector.jpg" 
           alt="Logo IT" width="50" style="border-radius:8px;margin-right:10px;">
      <div class="brand-text">
        <div class="title">IT & Ingénierie Pédagogique</div>
        <div class="subtitle"><?= t('Tech × Pédagogie — solutions sur mesure','Tech × Pedagogy — tailored solutions') ?></div>
      </div>
    </div>

    <nav class="main-nav">
      <ul>
        <li><a href="index.php"><?= t('Accueil','Home') ?></a></li>
        <li><a href="services.php"><?= t('Services','Services') ?></a></li>
        <li><a href="solutions.php"><?= t('Solutions','Solutions') ?></a></li>
        <li><a href="blog.php"><?= t('Blog','Blog') ?></a></li>
        <li><a href="contact.php"><?= t('Contact','Contact') ?></a></li>
      </ul>
    </nav>

    <div class="header-actions">
      <div class="lang-switch">
        <a href="?lang=fr" class="<?= ($lang==='fr')?'active':'' ?>">FR</a> |
        <a href="?lang=en" class="<?= ($lang==='en')?'active':'' ?>">EN</a>
      </div>
      <?php if(isset($_SESSION['user'])): ?>
        <a href="espace_membre.php" class="btn btn-outline"><?= t('Mon espace','My area') ?></a>
        <a href="logout.php" class="btn btn-primary"><?= t('Déconnexion','Logout') ?></a>
      <?php else: ?>
        <a href="inscription.php" class="btn btn-outline"><?= t('S\'inscrire','Sign up') ?></a>
        <a href="connexion.php" class="btn btn-primary"><?= t('Connexion','Login') ?></a>
      <?php endif; ?>
    </div>
  </div>
</header>
