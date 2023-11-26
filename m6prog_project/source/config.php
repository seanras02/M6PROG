<?php
if ( ! file_exists(DIR . '/../.env')) {
    die('Geen .env bestand gevonden');
}
$envSettings = parse_ini_file(DIR . '/../.env');
define('DB_SCHEMA', (isset($envSettings['DB_SCHEMA'])) ? $envSettings['DB_SCHEMA'] : 'example');
define('DB_USER', (isset($envSettings['DB_USER'])) ? $envSettings['DB_USER'] : 'username');
define('DB_PASSWORD', (isset($envSettings['DB_PASSWORD'])) ? $envSettings['DB_PASSWORD'] : 'pass');
define('DB_HOST', (isset($envSettings['DB_HOST'])) ? $envSettings['DB_HOST'] : 'mariadb');