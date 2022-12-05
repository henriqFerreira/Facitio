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

        if (isset($_SESSION['auth-error']))
            unset($_SESSION['auth-error']);

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

        if (!$errorHandler->isFileInputValid($_FILES)) {
            $_SESSION['auth-error'] = 'Imagem Inválida';
            echo '<meta http-equiv="Refresh" content="0">';
            die();
        }
        $profileImage = $_FILES['foto']['tmp_name'];
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

                $loginParams = array(
                    'cpf' => $signUpData['cpf'],
                    'senha' => $signUpData['senha']
                );

                $loggedUser = $database->read("SELECT * FROM tb_login_{$userType} as A INNER JOIN tb_endereco_{$userType} as B ON A.{$userType}_id = B.{$userType}_id AND A.{$userType}_cpf = :cpf AND A.{$userType}_senha = :senha", $loginParams);
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
                    'Cpf' => $loggedUser->$cpf,
                    'Rg' => $loggedUser->$rg,
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
                $_SESSION['auth-error'] = 'CPF já cadastrado.';
                echo '<meta http-equiv="Refresh" content="0">';
                die();
            }
        } else {
            $_SESSION['auth-error'] = 'Preencha todos os campos!';
            echo '<meta http-equiv="Refresh" content="0">';
            die();
        }
    }
}