<?php
namespace controller;
use core\Controller;
use core\Database;
use model\User;

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
            "TITLE" => WEBSITE_NAME . ": Entrar como cliente",
            "TYPE" => __FUNCTION__
        );
        $this->loadView("Signincliente", $data);
    }

    function profissional() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Entrar como profissional",
            "TYPE" => __FUNCTION__
        );
        $this->loadView("Signinprofissional", $data);
    }

    function checkSignin($signInData, $userType) {
        $params['cpf'] = $signInData['cpf'];
        $params['senha'] = $signInData['senha'];

        if(!empty($params['cpf']) && !empty($params['senha'])) {
            $database = new Database();

            $query = "SELECT * FROM tb_login_{$userType} WHERE {$userType}_cpf = :cpf AND {$userType}_senha = :senha";
            $checkUser = $database->read($query, $params);

            if (!empty($checkUser)) {
                $user = new User(
                    $checkUser[0]->cliente_nome,
                    $checkUser[0]->cliente_sobrenome,
                    $checkUser[0]->cliente_email,
                    $checkUser[0]->cliente_cpf,
                    $checkUser[0]->cliente_rg,
                    $checkUser[0]->cliente_datanasc,
                    $checkUser[0]->cliente_endereco,
                    $checkUser[0]->cliente_contato,
                    "cliente"
                );
                $_SESSION['logged'] = array(
                    $user->getNome(),
                    $user->getSobrenome(),
                    $user->getType()
                );
            } else {
                echo "Inexistente.";
            }
        } else {
            echo "Preencha todos os campos.";
        }
    }
}