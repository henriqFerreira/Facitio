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

        if (!$errorHandler->isFileInputValid($_FILES))
            $profileImageContent = $_SESSION['logged']['Foto'];
        else
            $profileImageContent = file_get_contents($_FILES['profileImage']['tmp_name']);

        foreach ($updatingData as $key => $value) {
            if (empty($updatingData[$key])) {
                $updatingData[$key] = $_SESSION['logged'][ucfirst($key)];
            }
        }

        echo "<pre>";
        print_r($updatingData);
        echo "</pre>";

        $params = array(
            'nome' => $updatingData['nome'],
            'sobrenome' => $updatingData['sobrenome'],
            'email' => $updatingData['email'],
            'rg' => $updatingData['rg'],
            'datanasc' => $updatingData['datanasc'],
            'contato' => $updatingData['contato'],
            'foto' => $profileImageContent,
            'rua' => $updatingData['rua'],
            'num' => $updatingData['num'],
            'complemento' => $updatingData['complemento'],
            'bairro' => $updatingData['bairro'],
            'cidade' => $updatingData['cidade'],
            'estado' => $updatingData['estado'],
            'cep' => $updatingData['cep'],
        );

        $userQuery = "UPDATE TABLE tb_login_{$userType} SET {$userType}_nome = :nome,
                                                            {$userType}_sobrenome = :sobrenome,
                                                            {$userType}_email = :email,
                                                            {$userType}_rg = :rg,
                                                            {$userType}_datanasc = :datanasc,
                                                            {$userType}_contato = :contato,
                                                            {$userType}_foto = :foto WHERE {$userType}_cpf = :cpf";
    }
}