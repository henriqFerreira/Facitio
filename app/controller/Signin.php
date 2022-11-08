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
        $this->loadView("Signin", $data);
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
        $params = array(
            'cpf' => $signInData['cpf'],
            'senha' => $signInData['senha']
        );

        if(!empty($params['cpf']) && !empty($params['senha'])) {
            $database = new Database();

            $query = "SELECT * FROM tb_login_{$userType} WHERE {$userType}_cpf = :cpf AND {$userType}_senha = :senha";
            $checkUser = $database->read($query, $params);

            $nome = $userType."_nome";
            $sobrenome = $userType."_sobrenome";
            $email = $userType."_email";
            $cpf = $userType."_cpf";
            $rg = $userType."_rg";
            $datanasc = $userType."_datanasc";
            $contato = $userType."_contato";

            if (!empty($checkUser)) {
                $user = new User(
                    $checkUser[0]->$nome,
                    $checkUser[0]->$sobrenome,
                    $checkUser[0]->$email,
                    $checkUser[0]->$cpf,
                    $checkUser[0]->$rg,
                    $checkUser[0]->$datanasc,
                    $checkUser[0]->$contato,
                    $userType
                );
                $_SESSION['logged'] = array(
                    "CPF" => $user->getCpf(),
                    "Tipo" => $user->getType()
                );
                header('Location: ' . ROOT . 'profile');
            } else {
                echo "Inexistente.";
            }
        } else {
            echo "Preencha todos os campos.";
        }
    }
}