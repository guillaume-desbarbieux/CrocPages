# Croc Pages

## Introduction 

Croc Pages est un site de e-commerce pour une librairie local, la fonctionnalité principale est de  proposer un système de Click and Collect. Le site est développé en **Laravel**. 

## Architecture du projet

```
.
├── app
│   ├── Http
│   │   └── Controllers
│   ├── Models
│   └── Providers
├── bootstrap
│   └── cache
├── config
├── database
│   ├── factories
│   ├── migrations
│   └── seeders
├── public
├── resources
│   ├── css
│   ├── js
│   └── views
├── routes
├── storage
│   ├── app
│   │   ├── private
│   │   └── public
│   ├── framework
│   │   ├── cache
│   │   │   └── data
│   │   ├── sessions
│   │   ├── testing
│   │   └── views
│   └── logs
└── tests
    ├── Feature
    └── Unit

```

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :

-PHP v8.2
-Composer
-Laravel v12

##

1. Cloner le dépôt :
```bash
git clone <url>/CrocPages.git
cd CrocPages
```

2. Installer les dépendances :
```bash
npm install
npm run dev
composer install
```

3. Accéder à l'application : `http://localhost:8000`