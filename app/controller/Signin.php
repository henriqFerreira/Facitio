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
                $saldo = $userType."_saldo";

                $_SESSION['logged'] = array(
                    'Nome' => $loggedUser->$nome,
                    'Sobrenome' => $loggedUser->$sobrenome,
                    'Email' => $loggedUser->$email,
                    'CPF' => $loggedUser->$cpf,
                    'RG' => $loggedUser->$rg,
                    'Datanasc' => $loggedUser->$datanasc,
                    'Contato' => $loggedUser->$contato,
                    'Foto' => $loggedUser->$foto,
                    'Saldo' => $loggedUser->$saldo,
                    'Rua' => $loggedUser->end_nome,
                    'Num' => $loggedUser->end_num,
                    'Complemento' => $loggedUser->end_complemento,
                    'Bairro' => $loggedUser->end_bairro,
                    'Cidade' => $loggedUser->end_cidade,
                    'Estado' => $loggedUser->end_estado,
                    'Cep' => $loggedUser->end_cep,
                    'Tipo' => $userType
                );

                header('Location: ' . ROOT . 'profile');
                die;
            } else {
                die("Usuário inexistente.");
            }
        } else {
            die("Preencha todos os campos");
        }
    }
}