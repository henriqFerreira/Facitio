<?php
namespace model;

require '../autoLoader.php';

class User extends Database {
    private static string $nome;
    private static string $sobrenome;
    private static string $email;
    private static string $cpf;
    private static string $rg;
    private static string $nascimento;
    private static string $contato;
    private static array $endereco;

    public function __construct(string $nome, string $sobrenome, string $email, string $cpf, string $rg, string $nascimento, string $contato, array $endereco) {
        $this->$nome = $nome;
        $this->$sobrenome = $sobrenome;
        $this->$email = $email;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->nascimento = $nascimento;
        $this->contato = $contato;
        $this->endereco = $endereco;
    }

    private function getNome() : string {
        return $this->nome;
    }

    private function getSobrenome() : string {
        return $this->sobrenome;
    }

    private function getEmail() : string {
        return $this->email;
    }

    private function getCpf() : string {
        return $this->cpf;
    }

    private function getRg() : string {
        return $this->rg;
    }

    private function getNascimento() : string {
        return $this->nascimento;
    }

    private function getContato() : string {
        return $this->contato;
    }

    private function getEndereco() : array {
        return $this->endereco;
    }
}