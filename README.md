
# itpedago (PHP + JSON demo)

Prototype web pour IT & Ingénierie Pédagogique (multilingue FR/EN) — livré en PHP avec authentification simulée (JSON file) et une démo d'API météo.

## Structure
```
itpedago/
├─ index.php
├─ services.php
├─ solutions.php
├─ blog.php
├─ contact.php
├─ connexion.php
├─ inscription.php
├─ espace_membre.php
├─ resources.php
├─ logout.php
├─ css/style.css
├─ js/main.js
├─ data/users.json
```
## Installation (local)
1. Copier le dossier `itpedago` dans le répertoire web de votre serveur PHP (ex : `www` ou `htdocs`).  
2. Lancer un serveur local (ex : `php -S localhost:8000` dans le dossier).  
3. Ouvrir `http://localhost:8000/index.php`.

## Authentification
- Les utilisateurs sont stockés dans `data/users.json`.  
- Le système utilise `password_hash()` et `password_verify()` pour sécuriser les mots de passe.  
- `inscription.php` crée l'utilisateur et connecte l'utilisateur en session.

## Multilingue
- Choix de langue via `?lang=fr` ou `?lang=en` (stocké en session).  
- Les pages affichent le texte en FR ou EN selon la session.

## Météo (démo)
- Section météo sur la page d'accueil : simulation client-side (pas d'API externe).  
- Saisir n'importe quelle ville pour obtenir une météo aléatoire simulée.

## Remarques
- Système JSON adapté pour développement/démonstration seulement. Pour production, migrer vers une base de données (MySQL) et mettre en place protections (CSRF, validations côté serveur, etc.).
