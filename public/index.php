<?php

// ajouter connexion a la base de donner:
// Charger les paramètres de la base de données
require_once '../app/config/params.php';  // Assurez-vous que ce chemin est correct !

// Connexion à la base de données avec les paramètres définis dans params.php
$connexion = new PDO(
    'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8',
    DB_USER,
    DB_PASSWORD
);

// Chargement de l'init
require_once '../core/init.php';

// Chargement du router 
require_once '../app/routers/index.php';

// Chargement du template
require_once '../app/views/templates/index.php';
