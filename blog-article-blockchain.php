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
  <title><?= htmlspecialchars(t('Blockchain & Sécurité', 'Blockchain & Security')) ?></title>
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
        <h1><?= t('Blockchain & Sécurité', 'Blockchain & Security') ?></h1>
        <p class="article-meta">
          <?= t('1 novembre 2025', 'November 1, 2025') ?> | 
          <?= t('Par IT & Ingénierie Pédagogique', 'By IT & Instructional Engineering') ?>
        </p>
      </div>

      <div class="article-content">
        
        <section>
          <h2><?= t('🔐 Les Fondamentaux de la Blockchain et de la Sécurité des Données', '🔐 Fundamentals of Blockchain and Data Security') ?></h2>
          
          <h3><?= t('Qu\'est-ce que la Blockchain ?', 'What is Blockchain?') ?></h3>
          <p><?= t(
            'La blockchain est une technologie de chaîne de blocs distribuée et décentralisée. Chaque bloc contient des données et est cryptographiquement lié au bloc précédent, créant une chaîne immuable. 
            <br><br>
            Au lieu d\'une base de données centralisée contrôlée par une entité, la blockchain est maintenue par un réseau de nœuds. Chaque transaction doit être validée par la majorité du réseau avant d\'être enregistrée. 
            <br><br>
            Cette architecture rend presque impossible de modifier les données historiques sans être détecté, d\'où son utilité pour la sécurité.',
            'Blockchain is a distributed and decentralized chain-of-blocks technology. Each block contains data and is cryptographically linked to the previous block, creating an immutable chain. 
            <br><br>
            Instead of a centralized database controlled by one entity, the blockchain is maintained by a network of nodes. Each transaction must be validated by the majority of the network before being recorded. 
            <br><br>
            This architecture makes it almost impossible to modify historical data without being detected, hence its security value.'
          ) ?></p>

          <h3><?= t('Cryptographie et Hachage', 'Cryptography and Hashing') ?></h3>
          <p><?= t(
            'La blockchain repose sur deux concepts cryptographiques majeurs : 
            <br><br>
            <strong>Hachage (Hash) :</strong> Une fonction qui convertit n\'importe quelle donnée en une chaîne fixe de caractères. Une petite modification des données produit un hash complètement différent. C\'est essentiellement une empreinte digitale. 
            <br><br>
            <strong>Chiffrement asymétrique (Clés publique/privée) :</strong> Une paire de clés cryptographiques. La clé privée (secrète) chiffre les données, et la clé publique (partagée) les déchiffre. Cela permet de signer numériquement les transactions.',
            'Blockchain relies on two major cryptographic concepts: 
            <br><br>
            <strong>Hashing:</strong> A function that converts any data into a fixed string of characters. A small change in data produces a completely different hash. It\'s essentially a digital fingerprint. 
            <br><br>
            <strong>Asymmetric Encryption (Public/Private Keys):</strong> A pair of cryptographic keys. The private key (secret) encrypts data, and the public key (shared) decrypts it. This allows digital signing of transactions.'
          ) ?></p>

          <h3><?= t('Sécurité des Données en 2025', 'Data Security in 2025') ?></h3>
          <p><?= t(
            'Au-delà de la blockchain, les meilleures pratiques de sécurité incluent : 
            <br><br>
            - <strong>Chiffrement de bout en bout :</strong> Les données sont chiffrées sur l\'appareil de l\'utilisateur et ne peuvent être déchiffrées que par le destinataire intentionnel. 
            <br>
            - <strong>Authentification multi-facteurs (MFA) :</strong> Même si le mot de passe est compromis, un attaquant a besoin d\'un deuxième facteur (code SMS, app d\'authentification) pour accéder. 
            <br>
            - <strong>Zero Trust Architecture :</strong> Aucune confiance par défaut. Chaque accès, chaque requête est vérifiée et autorisée individuellement.',
            'Beyond blockchain, best practices for data security include: 
            <br><br>
            - <strong>End-to-End Encryption:</strong> Data is encrypted on the user\'s device and can only be decrypted by the intended recipient. 
            <br>
            - <strong>Multi-Factor Authentication (MFA):</strong> Even if the password is compromised, an attacker needs a second factor (SMS code, authentication app) to access. 
            <br>
            - <strong>Zero Trust Architecture:</strong> No default trust. Every access, every request is verified and authorized individually.'
          ) ?></p>
        </section>

        <section style="margin-top: 2rem;">
          <h2><?= t('📊 Tableau : Comparaison des Technologies de Sécurité', '📊 Table: Comparison of Security Technologies') ?></h2>
          
          <table class="article-table">
            <thead>
              <tr>
                <th><?= t('Technologie', 'Technology') ?></th>
                <th><?= t('Mécanique', 'Mechanism') ?></th>
                <th><?= t('Cas d\'Usage', 'Use Case') ?></th>
                <th><?= t('Avantages', 'Advantages') ?></th>
                <th><?= t('Inconvénients', 'Disadvantages') ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Blockchain</td>
                <td><?= t('Chaîne de blocs distribuée, consensus réseau', 'Distributed block chain, network consensus') ?></td>
                <td><?= t('Transactions financières, contrats', 'Financial transactions, contracts') ?></td>
                <td><?= t('Immuable, décentralisé, transparent', 'Immutable, decentralized, transparent') ?></td>
                <td><?= t('Lent, énergivore, complexe', 'Slow, energy-intensive, complex') ?></td>
              </tr>
              <tr>
                <td><?= t('Chiffrement de bout en bout', 'End-to-End Encryption') ?></td>
                <td><?= t('Clés asymétriques, chiffrement client', 'Asymmetric keys, client-side encryption') ?></td>
                <td><?= t('Messaging, cloud storage', 'Messaging, cloud storage') ?></td>
                <td><?= t('Sécurité maximale, vie privée', 'Maximum security, privacy') ?></td>
                <td><?= t('Clés perdues = données perdues', 'Lost keys = lost data') ?></td>
              </tr>
              <tr>
                <td><?= t('Multi-Factor Auth (MFA)', 'Multi-Factor Auth (MFA)') ?></td>
                <td><?= t('Quelque chose que tu sais + que tu as', 'Something you know + have') ?></td>
                <td><?= t('Authentification utilisateur', 'User authentication') ?></td>
                <td><?= t('Réduit les accès non autorisés', 'Reduces unauthorized access') ?></td>
                <td><?= t('UX moins pratique, coût', 'Less convenient UX, cost') ?></td>
              </tr>
              <tr>
                <td><?= t('Zero Trust', 'Zero Trust') ?></td>
                <td><?= t('Vérification continue, micro-segmentation', 'Continuous verification, micro-segmentation') ?></td>
                <td><?= t('Entreprises, données sensibles', 'Enterprises, sensitive data') ?></td>
                <td><?= t('Sécurité très forte', 'Very strong security') ?></td>
                <td><?= t('Complex à implémenter, coûteux', 'Complex to implement, expensive') ?></td>
              </tr>
              <tr>
                <td><?= t('Hachage (Hash)', 'Hashing') ?></td>
                <td><?= t('Fonction cryptographique unidirectionnelle', 'One-way cryptographic function') ?></td>
                <td><?= t('Intégrité données, mots de passe', 'Data integrity, passwords') ?></td>
                <td><?= t('Rapide, vérifiable, impossible à inverser', 'Fast, verifiable, impossible to reverse') ?></td>
                <td><?= t('Pas de confidentialité, rainbow tables', 'No confidentiality, rainbow tables') ?></td>
              </tr>
              <tr>
                <td><?= t('API Gateways', 'API Gateways') ?></td>
                <td><?= t('Proxy central, rate limiting, filtrage', 'Central proxy, rate limiting, filtering') ?></td>
                <td><?= t('Microservices, APIs publiques', 'Microservices, public APIs') ?></td>
                <td><?= t('Contrôle centralisé, DDoS protection', 'Centralized control, DDoS protection') ?></td>
                <td><?= t('Point de défaillance unique', 'Single point of failure') ?></td>
              </tr>
              <tr>
                <td><?= t('WAF (Web Application Firewall)', 'WAF (Web Application Firewall)') ?></td>
                <td><?= t('Filtres de contenu, signatures d\'attaque', 'Content filters, attack signatures') ?></td>
                <td><?= t('Protection applications web', 'Web application protection') ?></td>
                <td><?= t('Détecte attacks SQL injection, XSS', 'Detects SQL injection, XSS attacks') ?></td>
                <td><?= t('Peut bloquer trafic légitime', 'Can block legitimate traffic') ?></td>
              </tr>
              <tr>
                <td><?= t('PKI (Public Key Infrastructure)', 'PKI (Public Key Infrastructure)') ?></td>
                <td><?= t('Certificats numériques, autorités de certification', 'Digital certificates, certificate authorities') ?></td>
                <td><?= t('HTTPS, signatures numériques, TLS', 'HTTPS, digital signatures, TLS') ?></td>
                <td><?= t('Standard global, interopérable', 'Global standard, interoperable') ?></td>
                <td><?= t('Gestion des certificats complexe', 'Certificate management complex') ?></td>
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
