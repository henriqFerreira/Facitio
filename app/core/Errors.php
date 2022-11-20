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
        if (empty($fileInput['profileImage']['name']))
            return false;

        $filename = basename($fileInput['profileImage']['name']);
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);
        $allowedFileTypes = array('jpg', 'jpeg');

        if (!in_array($fileType, $allowedFileTypes))
            return false;

        return true;
    }

    function userExists(array $params, string $userType) : bool {
        $database = new Database();
        $param = array("cpf" => $params['cpf']);

        $query = "SELECT * FROM tb_login_{$userType} WHERE {$userType}_cpf = :cpf";
        $checkUser = $database->read($query, $param);
        
        if(!empty($checkUser))
            return true;
        else
            return false;
    }
}