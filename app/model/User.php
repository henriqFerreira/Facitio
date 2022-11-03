<?php
namespace model;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/autoLoader.php';

class User {
    private string $nome;
    private string $sobrenome;
    private string $email;
    private string $cpf;
    private string $rg;
    private string $nascimento;
    private string $contato;
    private string $type;

    public function __construct(string $nome, string $sobrenome, string $email, string $cpf, string $rg, string $nascimento, string $contato, string $type) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->nascimento = $nascimento;
        $this->contato = $contato;
        $this->type = $type;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getSobrenome() : string {
        return $this->sobrenome;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function getCpf() : string {
        return $this->cpf;
    }

    public function getRg() : string {
        return $this->rg;
    }

    public function getNascimento() : string {
        return $this->nascimento;
    }

    public function getContato() : string {
        return $this->contato;
    }

    public function getEndereco() : string {
        return $this->endereco;
    }

    public function getType() : string {
        return $this->type;
    }
}