<?php
namespace controller;
use core\Controller;
use core\Database;
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

                $loggedUser = (new Database())->read("SELECT * FROM tb_login_{$userType} as A INNER JOIN tb_endereco_{$userType} as B ON A.{$userType}_id = B.{$userType}_id AND A.{$userType}_cpf = :cpf AND A.{$userType}_senha = :senha", $params);
                $loggedUser = $loggedUser[0];

                $nome = $userType."_nome";
                $sobrenome = $userType."_sobrenome";
                $email = $userType."_email";
                $cpf = $userType."_cpf";
                $rg = $userType."_rg";
                $datanasc = $userType."_datanasc";
                $contato = $userType."_contato";
                $foto = $userType."_foto";

                $_SESSION['logged'] = array(
                    'Nome' => $loggedUser->$nome,
                    'Sobrenome' => $loggedUser->$sobrenome,
                    'Email' => $loggedUser->$email,
                    'CPF' => $loggedUser->$cpf,
                    'RG' => $loggedUser->$rg,
                    'Datanasc' => $loggedUser->$datanasc,
                    'Contato' => $loggedUser->$contato,
                    'Foto' => $loggedUser->$foto,
                    'End_nome' => $loggedUser->end_nome,
                    'End_num' => $loggedUser->end_num,
                    'End_complemento' => $loggedUser->end_complemento,
                    'End_bairro' => $loggedUser->end_bairro,
                    'End_cidade' => $loggedUser->end_cidade,
                    'End_estado' => $loggedUser->end_estado,
                    'End_cep' => $loggedUser->end_cep,
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