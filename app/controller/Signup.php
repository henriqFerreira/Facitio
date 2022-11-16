<?php
namespace controller;
use core\Controller;
use core\Database;
use core\Errors;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

class Signup extends Controller {
    function index() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Cadastrar como..."
        );
        $this->loadView("Signup", $data);
    }
    function cliente() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Cadastrar como cliente",
            "TYPE" => __FUNCTION__
        );
        $this->loadView("Signupcliente", $data);
    }
    function profissional() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Cadastrar como profissional",
            "TYPE" => __FUNCTION__
        );
        $this->loadView("Signupprofissional", $data);
    }
    
    function checkSignUp($signUpData, $userType) {
        $database = new Database();
        $errorHandler = new Errors();

        $params = array(
            'nome' => $signUpData['nome'],
            'sobrenome' => $signUpData['sobrenome'],
            'email' => $signUpData['email'],
            'cpf' => $signUpData['cpf'],
            'rg' => $signUpData['rg'],
            'datanasc' => $signUpData['datanasc'],
            'contato' => $signUpData['contato'],
            'senha' => $signUpData['senha']
        );

        if (!$errorHandler->isInputsEmpty($signUpData)) {
            if (!$errorHandler->userExists($params, $userType)) {
                $paramsQuery = "INSERT INTO tb_login_{$userType} VALUES (default, :nome, :sobrenome, :email, :cpf, :rg, :datanasc, :contato, :senha, default, default)";
                
                echo '<pre>';
                print_r($paramsQuery);
                echo '</pre>';

                echo '<pre>';
                print_r($params);
                echo '</pre>';
                
                $getCurrentId = $database->outputWrite($paramsQuery, $params);

                $enderecoParams = array(
                    'rua' => $signUpData['rua'],
                    'num' => $signUpData['num'],
                    'complemento' => $signUpData['complemento'],
                    'bairro' => $signUpData['bairro'],
                    'cidade' => $signUpData['cidade'],
                    'estado' => $signUpData['estado'],
                    'cep' => $signUpData['cep'],
                    'id' => $getCurrentId
                );

                $enderecoQuery = "INSERT INTO tb_endereco_{$userType} VALUES (default, :rua, :num, :complemento, :bairro, :cidade, :estado, :cep, :id)";
                $enderecoQuery = $database->write($enderecoQuery, $enderecoParams);

                $_SESSION['logged'] = array(
                    'CPF' => $params['cpf'],
                    'Tipo' => $userType
                );

                header('Location: ' . ROOT . 'profile');
                exit;
            } else {
                exit("Usuário existente.");
            }
        } else {
            exit("Preencha todos os campos");
        }
    }
}