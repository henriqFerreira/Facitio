<?php
namespace controller;
use core\Controller;
use core\Database;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

class Paginaservico extends Controller {
    function index() {
        header('Location: ' . ROOT . 'mainpage');
    }

    function servico($id) {
        $database = new Database();
        $data = $database->read("SELECT tb_servico.*, tb_login_profissional.profissional_nome, tb_login_profissional.profissional_foto FROM tb_servico INNER JOIN tb_login_profissional ON tb_servico.profissional_id = tb_login_profissional.profissional_id WHERE servico_id = :id", ['id' => $id]);
        $this->loadView("Paginaservico", $data);
    }
}