<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/config/config.php');

// Build database connections
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection(array(
    'driver' => 'mysql',
    'host' => DB_HOST,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASS,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
));

$db = $capsule->getConnection('default');

