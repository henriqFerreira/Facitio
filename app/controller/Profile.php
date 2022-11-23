<?php
namespace controller;
use core\Controller;
use core\Database;
use core\Errors;
use DOMDocument;
use DOMXPath;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

class Profile extends Controller {
    function index() {
        if(!isset($_SESSION['logged']))
            header('Location: ' . ROOT . 'signin');

        $data = array (
            "TITLE" => WEBSITE_NAME . ": Soluções fáceis para seus problemas difíceis.",
            "TYPE" => $_SESSION['logged']['Tipo']
        );
        
        $className = explode("\\", __CLASS__);
        $className = array_pop($className);
        $this->loadView($className, $data);
    }

    function updateProfile($updatingData, $userType) {
        $dom = new DOMDocument();
        $database = new Database();
        $errorHandler = new Errors();

        echo "foi chamado";

        // if (!$errorHandler->isFileInputValid($_FILES))
        //     die("Imagem de usuário inválida");

        // $profileImage = $_FILES['profileImage']['tmp_name'];
        // $profileImageContent = file_get_contents($profileImage);

        // foreach ($element as $value) {
        //     if (empty($value))
        //         continue;
        //     echo $value->getAttribute('placeholder') . "<br>";
        // }
        // foreach ($updatingData as $value) {
        //     if (empty($value)) {
        //         $value = $value;
        //     }
        // }

        // $params = array(
        //     'nome' => $updatingData['nome'],
        //     'sobrenome' => $updatingData['sobrenome'],
        //     'email' => $updatingData['email'],
        //     'rg' => $updatingData['rg'],
        //     'datanasc' => $updatingData['datanasc'],
        //     'contato' => $updatingData['contato'],
        //     'foto' => $profileImageContent,
        //     'rua' => $updatingData['rua'],
        //     'num' => $updatingData['num'],
        //     'complemento' => $updatingData['complemento'],
        //     'bairro' => $updatingData['bairro'],
        //     'cidade' => $updatingData['cidade'],
        //     'estado' => $updatingData['estado'],
        //     'cep' => $updatingData['cep'],
        // );

        // $userQuery = "UPDATE TABLE tb_login_{$userType} SET {$userType}_nome = :nome,
        //                                                     {$userType}_sobrenome = :sobrenome,
        //                                                     {$userType}_email = :email,
        //                                                     {$userType}_rg = :rg,
        //                                                     {$userType}_datanasc = :datanasc,
        //                                                     {$userType}_contato = :contato,
        //                                                     {$userType}_foto = :foto WHERE {$userType}_cpf = :cpf";

        // if (!$errorHandler->isInputsEmpty($signUpData)) {
        //     if (!$errorHandler->userExists($params, $userType)) {
        //         $paramsQuery = "INSERT INTO tb_login_{$userType} VALUES (default, :nome, :sobrenome, :email, :cpf, :rg, :datanasc, :contato, :senha, default, :foto)";
        //         $getCurrentId = $database->outputWrite($paramsQuery, $params);
        //         $enderecoParams = array(

        //             'id' => $getCurrentId
        //         );

        //         $enderecoQuery = "INSERT INTO tb_endereco_{$userType} VALUES (default, :rua, :num, :complemento, :bairro, :cidade, :estado, :cep, :id)";
        //         $enderecoQuery = $database->write($enderecoQuery, $enderecoParams);

        //         $_SESSION['logged'] = array(
        //             'Nome' => $params['nome'],
        //             'Sobrenome' => $params['sobrenome'],
        //             'Email' => $params['email'],
        //             'CPF' => $params['cpf'],
        //             'RG' => $params['rg'],
        //             'Datanasc' => $params['datanasc'],
        //             'Contato' => $params['contato'],
        //             'Foto' => base64_encode($profileImageContent),
        //             'Endereco' => $paramsQuery,
        //             'Tipo' => $userType
        //         );
        //     }
        // }
    }
}