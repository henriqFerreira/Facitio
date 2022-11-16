<?php
namespace controller;
use core\Controller;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

class Profile extends Controller {
    function index() {
        if(!isset($_SESSION['logged']))
            header('Location: ' . ROOT . 'signin');

        $data = array (
            "TITLE" => WEBSITE_NAME . ": Soluções fáceis para seus problemas difíceis.",
            "TYPE" => $_SESSION['logged']['Tipo']
        );
        
        $className = explode("\\", __CLASS__);
        $className = array_pop($className);
        $this->loadView($className, $data);
    }
}