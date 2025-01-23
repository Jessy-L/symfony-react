Configuration Projet Symfony React


📋 Prérequis

    PHP 8.1 ou supérieur
    Composer
    Node.js et npm
    Symfony CLI

🚀 Démarrage Rapide
1. Création du Projet

# Créer un nouveau projet Symfony
```bash
composer create-project symfony/skeleton:"7.2.x" symfo-react
```
# Se déplacer dans le répertoire du projet
```bash
cd symfo-react
```

2. Installation des Dépendances
```bash
# Dépendances Symfony
composer require symfony/webpack-encore-bundle
composer require symfony/twig-bundle
```

```bash
# Dépendances Frontend
npm install @symfony/webpack-encore --save-dev
npm install react react-dom --save-dev
npm install @babel/core @babel/preset-react @babel/preset-env --save-dev
```

🛠️ Configuration
Configuration Webpack (webpack.config.js)
```JavaScript

const Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/app.js')
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enableReactPreset()
;

module.exports = Encore.getWebpackConfig();

Configuration Babel (babel.config.js)
JavaScript

module.exports = {
    presets: [
        '@babel/preset-react',
        ['@babel/preset-env', {
            useBuiltIns: 'usage',
            corejs: 3,
            targets: {
                node: 'current'
            }
        }]
    ]
};
```
📁 Structure du Projet

symfo-react/
├── assets/
│   ├── react/
│   │   └── components/
│   │       └── Example.jsx
│   ├── styles/
│   │   └── app.css
│   └── app.js
├── public/
│   └── build/
├── src/
├── templates/
│   └── base.html.twig
├── babel.config.js
└── webpack.config.js

💻 Configuration du Développement
```jsx
//Composant React (assets/react/components/Example.jsx)

import React from 'react';

const Example = () => {
    return (
        <div>
            <h1>Bonjour depuis React!</h1>
        </div>
    );
};

export default Example;
```

Point d'Entrée (assets/app.js)
```JavaScript

import './styles/app.css';
import React from 'react';
import ReactDOM from 'react-dom';
import Example from './react/components/Example';

ReactDOM.render(
    <Example />,
    document.getElementById('react-app')
);
```
Template Twig (templates/base.html.twig)
```html

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{% block title %}Bienvenue!{% endblock %}</title>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <div id="react-app"></div>
        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </body>
</html>
```
🏃‍♂️ Lancement du Projet
```bash
# Installation propre
rm -rf node_modules/
rm -rf var/cache/*
rm package-lock.json
npm install
# Démarrer le serveur de développement Webpack
npm run watch
# Dans un nouveau terminal, démarrer le serveur Symfony
symfony server:start
```

Visitez http://localhost:8000 dans votre navigateur.
🛑 Arrêt du Serveur
```bash
symfony server:stop
```
📝 Notes

    Gardez npm run watch en cours d'exécution pendant le développement
    Videz le cache en cas de problème : php bin/console cache:clear
    Vérifiez l'état du serveur Symfony : symfony server:status

🔧 Dépannage

En cas de problèmes :

    Videz le cache Symfony
    Supprimez node_modules et réinstallez
    Vérifiez la console pour les erreurs JavaScript
    Vérifiez que toutes les dépendances sont installées
    Assurez-vous d'avoir la bonne version de Node.js

📚 Ressources Additionnelles

    Documentation Symfony
    Documentation React
    Webpack Encore

📄 Licence

Ce projet est sous licence MIT - voir le fichier LICENSE pour plus de détails.

Dernière mise à jour : 11 janvier 2024

Créé par : Jessy-L

Date de création : 11 janvier 2024 00:05:17 UTC