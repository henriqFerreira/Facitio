<?php
namespace controller;
use core\Controller;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

class Signin extends Controller {
    function index() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Entrar como..."
        );
        $this->loadView("Signintype", $data);
    }
    function cliente() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Entrar como cliente"
        );
        $this->loadView("Signincliente", $data);
    }
    function profissional() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Entrar como profissional"
        );
        $this->loadView("Signinprofissional", $data);
    }
}