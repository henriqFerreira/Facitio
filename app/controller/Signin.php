<?php
namespace controller;
use core\Controller;
use core\Errors;

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
        $errorHandler = new Errors();

        $params = array(
            'cpf' => $signInData['cpf'],
            'senha' => $signInData['senha']
        );

        if (!$errorHandler->isInputsEmpty($signInData)) {
            if ($errorHandler->userExists($params, $userType)) {
                $_SESSION['logged'] = array(
                    'CPF' => $params['cpf'],
                    'Tipo' => $userType
                );
                header('Location: ' . ROOT . 'profile');
                exit;
            } else {
                exit("Usuário inexistente.");
            }
        } else {
            exit("Preencha todos os campos");
        }
    }
}