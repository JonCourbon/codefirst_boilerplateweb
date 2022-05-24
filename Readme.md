#boilerplateweb

## Serveur de données
=> Dossier DatabaseServer

### Installation
1. Lancer le serveur MySQL
2. Se connecter au SGBDR
3. Créer une base de données appelée acteurs
4. Importez les données depuis le fichier data/init.sql

### Fonctionnement
1. Lancer le serveur MySQL


## Site web partie front-end
=> Dossier Frontend

Site dynamique (PHP) et intéractif (Js) avec compilation SCSS-> CSS et minification des fichiers CSS et Js

### Installation

#### Installation des dépendances
> npm install
> composer update

#### Configuration
1. Mettre à jour le fichier de configuration pour l'accès au SGBDR config/config.php (nom de la base, hote, mot de passe)


#### Compilation et copies
> cp -R src/* dist/
> cp -R public/* dist/
> mkdir dist/lib/materialize-css
> cp -R node_modules/materialize-css/dist/* dist/lib/materialize-css
> npm-sass ./assets/scss/style.scss > ./dist/css/style.css
