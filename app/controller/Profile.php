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

    function updateProfile($updatingData, $userType) : void {
        $database = new Database();
        $errorHandler = new Errors();
        $userId = $userType."_id";
        unset($updatingData['updateProfile']);

        if (!$errorHandler->isFileInputValid($_FILES))
            $profileImageContent = $_SESSION['logged']['Foto'];
        else
            $profileImageContent = file_get_contents($_FILES['foto']['tmp_name']);

        foreach ($updatingData as $key => $value) {
            if (empty($value))
                $updatingData[$key] = $_SESSION['logged'][ucfirst($key)];
        }

        $tb_login = array(
            'nome' => $updatingData['nome'],
            'sobrenome' => $updatingData['sobrenome'],
            'email' => $updatingData['email'],
            'rg' => $updatingData['rg'],
            'datanasc' => $updatingData['datanasc'],
            'contato' => $updatingData['contato'],
            'foto' => $profileImageContent,
            'cpf' => $_SESSION['logged']['Cpf']
        );

        $tb_endereco = array(
            'rua' => $updatingData['rua'],
            'num' => $updatingData['num'],
            'complemento' => $updatingData['complemento'],
            'bairro' => $updatingData['bairro'],
            'cidade' => $updatingData['cidade'],
            'estado' => $updatingData['estado'],
            'cep' => $updatingData['cep']
        );

        $find = "SELECT {$userType}_id FROM tb_login_{$userType} WHERE {$userType}_cpf = :cpf";
        $id = $database->read($find, ['cpf' => $_SESSION['logged']['Cpf']])[0]->$userId;

        $userQuery = "UPDATE tb_login_{$userType} SET {$userType}_nome = :nome,
                                                            {$userType}_sobrenome = :sobrenome,
                                                            {$userType}_email = :email,
                                                            {$userType}_rg = :rg,
                                                            {$userType}_datanasc = :datanasc,
                                                            {$userType}_contato = :contato,
                                                            {$userType}_foto = :foto WHERE {$userType}_cpf = :cpf";
        $database->write($userQuery, $tb_login);

        $enderecoQuery = "UPDATE tb_endereco_{$userType} SET end_nome = :rua,
                                                             end_num = :num,
                                                             end_complemento = :complemento,
                                                             end_bairro = :bairro,
                                                             end_cidade = :cidade,
                                                             end_estado = :estado,
                                                             end_cep = :cep WHERE {$userType}_id = {$id}";
        $database->write($enderecoQuery, $tb_endereco);

        $_SESSION['logged']['Nome'] = $updatingData['nome'];
        $_SESSION['logged']['Sobrenome'] = $updatingData['sobrenome'];
        $_SESSION['logged']['Email'] = $updatingData['email'];
        $_SESSION['logged']['Rg'] = $updatingData['rg'];
        $_SESSION['logged']['Datanasc'] = $updatingData['datanasc'];
        $_SESSION['logged']['Contato'] = $updatingData['contato'];
        $_SESSION['logged']['Foto'] = $profileImageContent;
        $_SESSION['logged']['Rua'] = $updatingData['rua'];
        $_SESSION['logged']['Num'] = $updatingData['num'];
        $_SESSION['logged']['Complemento'] = $updatingData['complemento'];
        $_SESSION['logged']['Bairro'] = $updatingData['bairro'];
        $_SESSION['logged']['Cidade'] = $updatingData['cidade'];
        $_SESSION['logged']['Estado'] = $updatingData['estado'];
        $_SESSION['logged']['Cep'] = $updatingData['cep'];
        echo '<meta http-equiv="Refresh" content="0">';
    }

    function getProfissionalServices() : array {
        $database = new Database();
        $id = $database->read("SELECT profissional_id FROM tb_login_profissional WHERE profissional_cpf = :cpf", ['cpf' => $_SESSION['logged']['Cpf']])[0]->profissional_id;
        return $database->read("SELECT * FROM tb_servico WHERE profissional_id = :id", ['id' => $id]);
    }
}