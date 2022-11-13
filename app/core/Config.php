<?php
namespace core;

$loadEnvironmentVariables = new EnvHandler();
$loadEnvironmentVariables->loadEnvFile("{$_SERVER['DOCUMENT_ROOT']}/Facitio");

// Nome do website
define('WEBSITE_NAME', "Facitio");

// Constantes do Banco de dados
define('DATABASE_HOST', getenv("DB_HOST"));
define('DATABASE_NAME', getenv("DB_NAME"));
define('DATABASE_USER', getenv("DB_USER"));
define('DATABASE_PASSWORD', getenv("DB_PASSWORD"));

// Protocolo HTTPS do website
define('PROTOCOL', "https");

// Path do root e assets
// $path = str_replace("\\", "/",PROTOCOL . "://" . $_SERVER['SERVER_NAME'] . __DIR__ . "/");
$path = str_replace("\\", "/", __DIR__ . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));

// Outros
define('DEFAULT_PHOTO', ASSETS . "img/icons/placeholder-profile.svg");