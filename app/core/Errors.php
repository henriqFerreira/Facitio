<?php
namespace core;

class Errors {
    function isInputsEmpty(array $authData) : bool {
        foreach ($authData as $data) {
            if(empty($data))
                return $data;
        }
        return false;
    }

    function isFileInputValid(array $fileInput) : bool {
        if ($fileInput['foto']['error'] != 0)
            return false;

        $filename = basename($fileInput['foto']['name']);
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);
        $allowedFileTypes = array('jpg', 'jpeg');

        if (!in_array($fileType, $allowedFileTypes))
            return false;

        return true;
    }

    function userExists(array $params, string $userType) : bool {
        $database = new Database();
        $param = [
            "cpf" => $params['cpf'],
            "senha" => $params['senha']
        ];

        $query = "SELECT * FROM tb_login_{$userType} WHERE {$userType}_cpf = :cpf AND {$userType}_senha = :senha";
        $checkUser = $database->read($query, $param);
        
        if(!empty($checkUser))
            return true;
        else
            return false;
    }
}