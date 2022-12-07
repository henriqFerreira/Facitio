<?php
namespace controller;
use core\Controller;
use core\Database;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

class Home extends Controller {
    function index() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Soluções fáceis para seus problemas difíceis."
        );
        $className = explode("\\", __CLASS__);
        $className = array_pop($className);
        $this->loadView($className, $data);
    }

    public function getFeaturedServices(): bool|array {
        $database = new Database();
        $query = "SELECT tb_servico.*, tb_login_profissional.profissional_nome, tb_login_profissional.profissional_foto FROM tb_servico INNER JOIN tb_login_profissional ON tb_servico.profissional_id = tb_login_profissional.profissional_id ORDER BY tb_servico.servico_aval DESC LIMIT 12";
        return $database->read($query);
    }
}