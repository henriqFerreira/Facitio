<?php
namespace controller;
use core\Controller;

class Home extends Controller {
    function index() {
        $className = explode("\\", __CLASS__);
        $className = array_pop($className);
        $this->loadView($className);
    }
}