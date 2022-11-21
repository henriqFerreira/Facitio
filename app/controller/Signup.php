<?php
namespace controller;
use core\Controller;
use core\Database;
use core\Errors;
use model\User;

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
    
    function checkSignUp($signUpData, $userType) : void {
        $database = new Database();
        $errorHandler = new Errors();

        if (!$errorHandler->isFileInputValid($_FILES))
            die("Imagem de usuário inválida");

        $profileImage = $_FILES['profileImage']['tmp_name'];
        $profileImageContent = file_get_contents($profileImage);

        $params = array(
            'nome' => $signUpData['nome'],
            'sobrenome' => $signUpData['sobrenome'],
            'email' => $signUpData['email'],
            'cpf' => $signUpData['cpf'],
            'rg' => $signUpData['rg'],
            'datanasc' => $signUpData['datanasc'],
            'contato' => $signUpData['contato'],
            'senha' => $signUpData['senha'],
            'foto' => $profileImageContent
        );

        if (!$errorHandler->isInputsEmpty($signUpData)) {
            if (!$errorHandler->userExists($params, $userType)) {
                $paramsQuery = "INSERT INTO tb_login_{$userType} VALUES (default, :nome, :sobrenome, :email, :cpf, :rg, :datanasc, :contato, :senha, default, :foto)";
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
                    'Nome' => $params['nome'],
                    'Sobrenome' => $params['sobrenome'],
                    'Email' => $params['email'],
                    'CPF' => $params['cpf'],
                    'RG' => $params['rg'],
                    'Datanasc' => $params['datanasc'],
                    'Contato' => $params['contato'],
                    'Foto' => base64_encode($profileImageContent),
                    'End_nome' => $enderecoParams['rua'],
                    'End_num' => $enderecoParams['num'],
                    'End_complemento' => $enderecoParams['complemento'],
                    'End_bairro' => $enderecoParams['bairro'],
                    'End_cidade' => $enderecoParams['cidade'],
                    'End_estado' => $enderecoParams['estado'],
                    'End_cep' => $enderecoParams['cep'],
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