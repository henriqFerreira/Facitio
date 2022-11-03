<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/autoLoader.php';
use core\App;

$app = new App();