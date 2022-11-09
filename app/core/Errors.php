<?php
namespace core;

class Errors {
    function isInputsEmpty($authData) : bool {
        foreach ($authData as $data) {
            if(empty($data)) {
                return true;
            } else {
                return false;
            }
        }
    }

    function userExists($params, $userType) : bool {
        $database = new Database();
        $param = array("cpf" => $params['cpf']);

        $query = "SELECT * FROM tb_login_{$userType} WHERE {$userType}_cpf = :cpf";
        $checkUser = $database->read($query, $param);
        
        if(!empty($checkUser)) {
            return true;
        } else {
            return false;
        }
    }
}