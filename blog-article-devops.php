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
  <title><?= htmlspecialchars(t('DevOps pour Startups', 'DevOps for Startups')) ?></title>
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
        <h1><?= t('DevOps pour Startups', 'DevOps for Startups') ?></h1>
        <p class="article-meta">
          <?= t('5 novembre 2025', 'November 5, 2025') ?> | 
          <?= t('Par IT & Ingénierie Pédagogique', 'By IT & Instructional Engineering') ?>
        </p>
      </div>

      <div class="article-content">
        
        <section>
          <h2><?= t('🚀 Automatiser votre déploiement et améliorer votre flux de développement', '🚀 Automate Your Deployment and Improve Your Development Workflow') ?></h2>
          
          <h3><?= t('Pourquoi DevOps est Essentiel pour les Startups', 'Why DevOps is Essential for Startups') ?></h3>
          <p><?= t(
            'Les startups doivent être agiles et rapides. DevOps permet d\'automatiser les processus répétitifs, réduisant les erreurs humaines et accélérant la mise en production. 
            <br><br>
            En implémentant une culture DevOps, même une petite équipe peut déployer plusieurs fois par jour, valider rapidement les hypothèses et s\'adapter aux besoins du marché. 
            <br><br>
            Les outils DevOps modernes (CI/CD, containerisation, infrastructure-as-code) sont maintenant accessibles et souvent gratuits pour les startups.',
            'Startups need to be agile and fast. DevOps allows automating repetitive processes, reducing human errors and accelerating production deployment. 
            <br><br>
            By implementing a DevOps culture, even a small team can deploy multiple times a day, quickly validate hypotheses, and adapt to market needs. 
            <br><br>
            Modern DevOps tools (CI/CD, containerization, infrastructure-as-code) are now accessible and often free for startups.'
          ) ?></p>

          <h3><?= t('Piliers Fondamentaux du DevOps', 'Fundamental Pillars of DevOps') ?></h3>
          <p><?= t(
            '<strong>1. Intégration Continue (CI) :</strong> À chaque commit, les tests s\'exécutent automatiquement. Les erreurs sont détectées immédiatement, pas en production. 
            <br><br>
            <strong>2. Déploiement Continu (CD) :</strong> Une fois les tests passés, le code est automatiquement déployé en staging ou en production. 
            <br><br>
            <strong>3. Infrastructure-as-Code (IaC) :</strong> Au lieu de configurer les serveurs manuellement, le code définit l\'infrastructure. Elle devient versionnable, reproductible et testable. 
            <br><br>
            <strong>4. Monitoring et Logging :</strong> Voir en temps réel ce qui se passe en production. Les alertes préviennent les problèmes avant qu\'ils n\'affectent les utilisateurs.',
            '<strong>1. Continuous Integration (CI):</strong> At every commit, tests run automatically. Errors are detected immediately, not in production. 
            <br><br>
            <strong>2. Continuous Deployment (CD):</strong> Once tests pass, code is automatically deployed to staging or production. 
            <br><br>
            <strong>3. Infrastructure-as-Code (IaC):</strong> Instead of manually configuring servers, code defines the infrastructure. It becomes versionable, reproducible, and testable. 
            <br><br>
            <strong>4. Monitoring and Logging:</strong> See in real-time what\'s happening in production. Alerts prevent problems before they affect users.'
          ) ?></p>
        </section>

        <section style="margin-top: 2rem;">
          <h2><?= t('📊 Tableau : Outils DevOps Essentiels pour Startups', '📊 Table: Essential DevOps Tools for Startups') ?></h2>
          
          <table class="article-table">
            <thead>
              <tr>
                <th><?= t('Catégorie', 'Category') ?></th>
                <th><?= t('Outil', 'Tool') ?></th>
                <th><?= t('Fonction', 'Function') ?></th>
                <th><?= t('Coût pour Startups', 'Cost for Startups') ?></th>
                <th><?= t('Exemple d\'Usage', 'Usage Example') ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="2"><?= t('Versioning', 'Versioning') ?></td>
                <td>Git + GitHub</td>
                <td><?= t('Contrôle de version du code', 'Code version control') ?></td>
                <td><?= t('Gratuit (privé)', 'Free (private)') ?></td>
                <td><?= t('Toutes les startups', 'All startups') ?></td>
              </tr>
              <tr>
                <td>GitLab</td>
                <td><?= t('Git + CI/CD intégrée', 'Git + integrated CI/CD') ?></td>
                <td><?= t('Gratuit/Pro', 'Free/Pro') ?></td>
                <td><?= t('Pipelines automatisés', 'Automated pipelines') ?></td>
              </tr>
              <tr>
                <td rowspan="2"><?= t('CI/CD', 'CI/CD') ?></td>
                <td>GitHub Actions</td>
                <td><?= t('Automatisation des tests et déploiements', 'Automate testing and deployments') ?></td>
                <td><?= t('Gratuit (limites)', 'Free (limits)') ?></td>
                <td><?= t('Tests à chaque push', 'Tests on each push') ?></td>
              </tr>
              <tr>
                <td>Jenkins</td>
                <td><?= t('Serveur d\'automatisation open-source', 'Open-source automation server') ?></td>
                <td><?= t('Gratuit (self-hosted)', 'Free (self-hosted)') ?></td>
                <td><?= t('Pipeline complexes', 'Complex pipelines') ?></td>
              </tr>
              <tr>
                <td rowspan="2"><?= t('Containerisation', 'Containerization') ?></td>
                <td>Docker</td>
                <td><?= t('Empacker l\'app + dépendances', 'Package app + dependencies') ?></td>
                <td><?= t('Gratuit', 'Free') ?></td>
                <td><?= t('Déploiements reproductibles', 'Reproducible deployments') ?></td>
              </tr>
              <tr>
                <td>Kubernetes (K8s)</td>
                <td><?= t('Orchestration de containers', 'Container orchestration') ?></td>
                <td><?= t('Gratuit/Managed', 'Free/Managed') ?></td>
                <td><?= t('Scaling automatique', 'Autoscaling') ?></td>
              </tr>
              <tr>
                <td rowspan="2"><?= t('Infrastructure', 'Infrastructure') ?></td>
                <td>Terraform</td>
                <td><?= t('Définir l\'infrastructure en code', 'Define infrastructure as code') ?></td>
                <td><?= t('Gratuit', 'Free') ?></td>
                <td><?= t('Créer AWS/Azure resources', 'Create AWS/Azure resources') ?></td>
              </tr>
              <tr>
                <td>AWS / Google Cloud</td>
                <td><?= t('Infrastructure cloud scalable', 'Scalable cloud infrastructure') ?></td>
                <td><?= t('Pay-as-you-go', 'Pay-as-you-go') ?></td>
                <td><?= t('Héberger l\'app', 'Host the app') ?></td>
              </tr>
              <tr>
                <td rowspan="2"><?= t('Monitoring', 'Monitoring') ?></td>
                <td>Prometheus + Grafana</td>
                <td><?= t('Métriques et tableaux de bord', 'Metrics and dashboards') ?></td>
                <td><?= t('Gratuit', 'Free') ?></td>
                <td><?= t('Surveiller CPU, mémoire', 'Monitor CPU, memory') ?></td>
              </tr>
              <tr>
                <td>ELK Stack</td>
                <td><?= t('Logging centralisé', 'Centralized logging') ?></td>
                <td><?= t('Gratuit/Cloud', 'Free/Cloud') ?></td>
                <td><?= t('Analyser les logs d\'erreurs', 'Analyze error logs') ?></td>
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
