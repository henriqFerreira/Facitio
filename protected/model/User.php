<?php
namespace model;

require '../autoLoader.php';

class User extends Database {
    private static string $nome;
    private static string $sobrenome;
    private static string $login;
    private static string $email;
    private static string $cpf;
    private static string $rg;
    private static string $nascimento;
    private static string $contato;
    private static array $endereco;

    public function __construct(string $nome, string $sobrenome, string $login, string $email, string $cpf, string $rg, string $nascimento, string $contato, array $endereco) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->login = $login;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->nascimento = $nascimento;
        $this->contato = $contato;
        $this->endereco = $endereco;
    }

    
}