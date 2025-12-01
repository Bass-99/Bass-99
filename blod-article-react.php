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
  <title><?= htmlspecialchars(t('React.js en 2025 - Article Complet', 'React.js in 2025 - Full Article')) ?></title>
  <link rel="stylesheet" href="css/style.css"> flash
  <style>
    .article-wrapper { max-width: 900px; margin: 2rem auto; padding: 0 1.5rem; }
    .article-header { margin: 2rem 0; padding-bottom: 2rem; border-bottom: 3px solid #3498db; }
    .article-header h1 { font-size: 2.2rem; color: #2c3e50; margin: 0.5rem 0; }
    .article-meta { color: #7f8c8d; font-size: 0.95rem; margin: 0.5rem 0; }
    .back-link { display: inline-block; margin-bottom: 1.5rem; color: #3498db; text-decoration: none; font-weight: 600; }
    .back-link:hover { text-decoration: underline; }
    .article-content { color: #34495e; line-height: 1.8; }
    .article-content h2 { font-size: 1.7rem; color: #2c3e50; margin: 2rem 0 1rem 0; }
    .article-content h3 { font-size: 1.3rem; color: #3498db; margin: 1.5rem 0 0.7rem 0; }
    .article-content p { margin-bottom: 1rem; }
    .table-container { overflow-x: auto; margin: 2rem 0; }
    .practices-table { width: 100%; border-collapse: collapse; font-size: 0.95rem; }
    .practices-table th { background: #3498db; color: white; padding: 1rem; text-align: left; font-weight: 600; border: 1px solid #2980b9; }
    .practices-table td { padding: 0.9rem; border: 1px solid #ecf0f1; }
    .practices-table tr:nth-child(even) { background: #f8f9fa; }
    .practices-table tr:hover { background: #e8f4f8; transition: background 0.2s; }
    .conclusion-box { background: #ecf0f1; padding: 1.5rem; border-left: 4px solid #27ae60; border-radius: 5px; margin: 2rem 0; }
    .conclusion-box h3 { color: #27ae60; margin-top: 0; }
  </style>
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

  <!-- ===== MAIN ARTICLE ===== -->
  <main class="article-wrapper" role="main">
    
    <a href="blog.php" class="back-link">← <?= t('Retour au blog', 'Back to blog') ?></a>

    <article>
      <div class="article-header">
        <h1><?= t('React.js en 2025', 'React.js in 2025') ?></h1>
        <p class="article-meta">
          <?= t('15 novembre 2025', 'November 15, 2025') ?> | 
          <?= t('Par IT & Ingénierie Pédagogique', 'By IT & Instructional Engineering') ?>
        </p>
      </div>

      <div class="article-content">
        
        <h2><?= t('Tendances marquantes 2024-2025', 'Key Trends 2024-2025') ?></h2>
        
        <h3><?= t('1. React Server Components (RSC)', '1. React Server Components (RSC)') ?></h3>
        <p><?= t(
          'Les Server Components deviennent le standard pour améliorer les performances. Le rendu côté serveur réduit drastiquement la taille du bundle envoyé au client et accélère le chargement initial. Next.js avec son App Router offre un support production-ready des RSC, facilitant leur adoption. Le rendu hybride (server + client) gagne du terrain pour les pages data-heavy.',
          'Server Components are becoming the standard for improving performance. Server-side rendering dramatically reduces the bundle size sent to the client and accelerates initial loading. Next.js with its App Router offers production-ready RSC support. Hybrid rendering (server + client) is gaining ground for data-heavy pages.'
        ) ?></p>

        <h3><?= t('2. Concurrent Rendering & Suspense', '2. Concurrent Rendering & Suspense') ?></h3>
        <p><?= t(
          'Le rendu concurrent via React (React 18+) priorise les interactions utilisateurs sur les calculs lourds. React Suspense se popularise avec des loading states granulaires et fallback UI fluide. Le futur compilateur React promet une optimisation encore meilleure du rendu et du build.',
          'Concurrent rendering via React (React 18+) prioritizes user interactions over heavy computations. React Suspense is becoming popular with granular loading states and smooth fallback UI. The future React compiler promises even better rendering and build optimization.'
        ) ?></p>

        <h3><?= t('3. TypeScript & Design Systems', '3. TypeScript & Design Systems') ?></h3>
        <p><?= t(
          'L\'usage de TypeScript dans les projets React est de plus en plus la norme pour la robustesse. Les équipes adoptent des design systems avec bibliothèques de composants réutilisables (design tokens, UI libraries), améliorant la cohérence visuelle et la collaboration design/dev.',
          'TypeScript usage in React projects is increasingly the norm for robustness. Teams adopt design systems with reusable component libraries (design tokens, UI libraries), improving visual coherence and design/dev collaboration.'
        ) ?></p>

        <h3><?= t('4. Gestion d\'état plus légère', '4. Lighter State Management') ?></h3>
        <p><?= t(
          'À côté de Redux, des librairies modernes comme Zustand, Recoil et Jotai gagnent en popularité, réduisant le boilerplate. Pour la server-state, React Query (TanStack Query) est recommandé pour le caching, la synchronisation et la gestion des requêtes.',
          'Modern libraries like Zustand, Recoil, and Jotai are gaining popularity alongside Redux, reducing boilerplate. For server-state, React Query (TanStack Query) is recommended for caching, synchronization, and request management.'
        ) ?></p>

        <h3><?= t('5. Outils de build modernes', '5. Modern Build Tools') ?></h3>
        <p><?= t(
          'Vite et les solutions de build améliorées remplacent Webpack dans beaucoup de projets pour accélérer le développement. L\'écosystème React reste très riche, permettant d\'évoluer rapidement.',
          'Vite and improved build solutions are replacing Webpack in many projects to speed up development. The React ecosystem remains very rich, allowing rapid evolution.'
        ) ?></p>

        <!-- ===== PRACTICES TABLE ===== -->
        <h2><?= t('16 Bonnes pratiques React.js', '16 React.js Best Practices') ?></h2>
        
        <div class="table-container">
          <table class="practices-table">
            <thead>
              <tr>
                <th><?= t('Catégorie', 'Category') ?></th>
                <th><?= t('Pratique', 'Practice') ?></th>
                <th><?= t('Description', 'Description') ?></th>
                <th><?= t('Bénéfices', 'Benefits') ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?= t('Architecture', 'Architecture') ?></td>
                <td><?= t('Séparation Server/Client', 'Server/Client Separation') ?></td>
                <td><?= t('Logique côté serveur, client components pour l\'interactivité', 'Server logic, client components for interactivity') ?></td>
                <td><?= t('Bundle léger, SEO | Next.js RSC', 'Lighter bundle, SEO | Next.js RSC') ?></td>
              </tr>
              <tr>
                <td><?= t('Architecture', 'Architecture') ?></td>
                <td><?= t('Découpage par features', 'Feature-based Structure') ?></td>
                <td><?= t('Organiser par fonction métier (/auth/, /dashboard/)', 'Organize by business function') ?></td>
                <td><?= t('Scalabilité, lisibilité', 'Scalability, readability') ?></td>
              </tr>
              <tr>
                <td><?= t('Performance', 'Performance') ?></td>
                <td><?= t('Lazy loading + Suspense', 'Lazy Loading + Suspense') ?></td>
                <td><?= t('Charger dynamiquement composants lourds', 'Dynamically load heavy components') ?></td>
                <td><?= t('Chargement rapide | React.lazy()', 'Fast loading | React.lazy()') ?></td>
              </tr>
              <tr>
                <td><?= t('Performance', 'Performance') ?></td>
                <td><?= t('SSR/SSG pour SEO', 'SSR/SSG for SEO') ?></td>
                <td><?= t('Pré-rendre pages critiques', 'Pre-render critical pages') ?></td>
                <td><?= t('SEO optimisé | Next.js ISR', 'Optimized SEO | Next.js ISR') ?></td>
              </tr>
              <tr>
                <td><?= t('Performance', 'Performance') ?></td>
                <td><?= t('Rendu concurrent', 'Concurrent Rendering') ?></td>
                <td><?= t('Prioriser interactivité sur calculs lourds', 'Prioritize interactivity') ?></td>
                <td><?= t('UI réactive | startTransition', 'Responsive UI') ?></td>
              </tr>
              <tr>
                <td><?= t('Qualité', 'Quality') ?></td>
                <td><?= t('TypeScript strict', 'Strict TypeScript') ?></td>
                <td><?= t('Typer props, API responses, modèles', 'Type props, API responses, models') ?></td>
                <td><?= t('Moins d\'erreurs | TS strict mode', 'Fewer errors') ?></td>
              </tr>
              <tr>
                <td><?= t('État', 'State') ?></td>
                <td><?= t('React Query pour server-state', 'React Query for Server-state') ?></td>
                <td><?= t('Cache, synchro, re-fetch automatique', 'Caching, sync, auto re-fetch') ?></td>
                <td><?= t('Logique simplifiée | TanStack Query', 'Simplified logic') ?></td>
              </tr>
              <tr>
                <td><?= t('État', 'State') ?></td>
                <td><?= t('Zustand / Jotai pour local state', 'Zustand / Jotai for Local State') ?></td>
                <td><?= t('Remplacer Redux, moins de boilerplate', 'Replace Redux, less boilerplate') ?></td>
                <td><?= t('Simplicité, code concis', 'Simplicity, concise code') ?></td>
              </tr>
              <tr>
                <td><?= t('UI/UX', 'UI/UX') ?></td>
                <td><?= t('Design System modulaire', 'Modular Design System') ?></td>
                <td><?= t('Kit UI réutilisable, design tokens', 'Reusable UI kit, design tokens') ?></td>
                <td><?= t('Cohérence visuelle | Storybook', 'Visual consistency') ?></td>
              </tr>
              <tr>
                <td><?= t('UI/UX', 'UI/UX') ?></td>
                <td><?= t('Accessibilité (a11y)', 'Accessibility (a11y)') ?></td>
                <td><?= t('Labels, roles, navigation clavier', 'Labels, roles, keyboard nav') ?></td>
                <td><?= t('Inclusivité | ESLint A11y', 'Inclusivity') ?></td>
              </tr>
              <tr>
                <td><?= t('Sécurité', 'Security') ?></td>
                <td><?= t('Validation client + serveur', 'Client + Server Validation') ?></td>
                <td><?= t('Vérifier avant affichage et envoi', 'Verify before display & submission') ?></td>
                <td><?= t('Robustesse | Zod, Valibot', 'Robustness') ?></td>
              </tr>
              <tr>
                <td><?= t('Build', 'Build') ?></td>
                <td><?= t('Vite ou Next.js moderne', 'Vite or Modern Next.js') ?></td>
                <td><?= t('Bundler rapide, dev server réactif', 'Fast bundler, reactive dev server') ?></td>
                <td><?= t('DX fluide, builds rapides | Vite', 'Smooth DX, fast builds') ?></td>
              </tr>
              <tr>
                <td><?= t('Tests', 'Testing') ?></td>
                <td><?= t('Tests unitaires + e2e', 'Unit + E2E Tests') ?></td>
                <td><?= t('Tester composants, hooks, flows critiques', 'Test components, hooks, critical flows') ?></td>
                <td><?= t('Stabilité | Jest, Playwright', 'Stability, confidence') ?></td>
              </tr>
              <tr>
                <td><?= t('Monitoring', 'Monitoring') ?></td>
                <td><?= t('Suivi perf & erreurs', 'Performance & Error Tracking') ?></td>
                <td><?= t('Logs, traces, metrics, crash reports', 'Logs, traces, metrics, crashes') ?></td>
                <td><?= t('Fiabilité | Sentry, LogRocket', 'Reliability') ?></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- ===== CONCLUSION ===== -->
        <div class="conclusion-box">
          <h3><?= t('✅ Conclusion', '✅ Conclusion') ?></h3>
          <p><?= t(
            'En 2025, React continue d\'évoluer vers une meilleure performance, maintenabilité et expérience développeur. Les Server Components, TypeScript et les outils modernes deviennent des standards incontournables. Adopter ces bonnes pratiques dès maintenant positionne votre équipe pour la réussite à long terme.',
            'In 2025, React continues to evolve towards better performance, maintainability, and developer experience. Server Components, TypeScript, and modern tools are becoming must-have standards. Adopting these best practices positions your team for long-term success.'
          ) ?></p>
        </div>

      </div>
    </article>

  </main>

  <!-- ===== FOOTER ===== -->
  <footer class="site-footer" role="contentinfo" style="margin-top:3rem;">
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
