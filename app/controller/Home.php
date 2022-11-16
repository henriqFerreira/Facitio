<?php
namespace controller;
use core\Controller;

require_once $_SERVER['DOCUMENT_ROOT'].'app/core/Config.php';

class Home extends Controller {
    function index() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Soluções fáceis para seus problemas difíceis."
        );
        $className = explode("\\", __CLASS__);
        $className = array_pop($className);
        $this->loadView($className, $data);
    }
}