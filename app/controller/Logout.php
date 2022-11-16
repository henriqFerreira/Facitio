<?php
namespace controller;
use core\Controller;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

class Logout extends Controller {
    function index() {
        session_destroy();
        header('Location: ' . ROOT . 'home');
    }
}