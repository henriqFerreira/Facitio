<?php
namespace controller;
use core\Controller;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

class Signup extends Controller {
    function index() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Cadastrar como..."
        );
        $this->loadView("Signuptype", $data);
    }
    function cliente() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Cadastrar como cliente"
        );
        $this->loadView("Signupcliente", $data);
    }
    function profissional() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Cadastrar como profissional"
        );
        $this->loadView("Signupprofissional", $data);
    }
    
}