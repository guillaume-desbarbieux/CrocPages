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

1. PHP v8.2
2. Composer
3. Laravel v12
4. Node.js v18

## Installation

1. Cloner le dépôt :
```bash
git clone git@github.com:guillaume-desbarbieux/CrocPages.git
cd CrocPages
```

2. Installer les dépendances :
```bash
npm install
npm run build
composer install
php artisan migrate
cp .env.example .env
php artisan key:generate
```

3. Lancer le projet

```bash
composer run dev
```

4. Accéder à l'application : `http://localhost:8000`
