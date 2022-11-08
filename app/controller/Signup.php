<?php
namespace controller;
use core\Controller;

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
            "TITLE" => WEBSITE_NAME . ": Cadastrar como cliente"
        );
        $this->loadView("Signupcliente", $data);
    }
    function profissional() {
        $data = array (
            "TITLE" => WEBSITE_NAME . ": Cadastrar como profissional"
        );
        $this->loadView("Signupprofissional", $data);
    }
    
    function checkSignUp($signUpData, $userType) {
        $params = array(
            'nome' => $signUpData['nome'],
            'sobrenome' => $signUpData['sobrenome'],
            'email' => $signUpData['email'],
            'contato' => $signUpData['contato'],
            'cpf' => $signUpData['cpf'],
            'rg' => $signUpData['rg'],
            'datanasc' => $signUpData['datanasc'],
            'senha' => $signUpData['senha']
        );

        $enderecoParams = array(
            'rua' => $signUpData['rua'],
            'bairro' => $signUpData['bairro'],
            'estado' => $signUpData['estado'],
            'cep' => $signUpData['cep'],
            'num' => $signUpData['num'],
            'cidade' => $signUpData['cidade'],
            'complemento' => $signUpData['complemento']
        );
    }
}