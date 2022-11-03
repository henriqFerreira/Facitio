<?php
namespace model;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/autoLoader.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

use PDO;

class Database {
    private function getConnection() {
        try {
            $conn = new PDO("mysql:host=" . DATABASE_HOST . ";dbname=" . DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $Exception) {
            die("[ Falha na conexão com o banco de dados ] => " . $Exception->getMessage());
        } catch (\Exception $Exception) {
            die("[ Falha na conexão ] => " . $Exception->getMessage());
        }
    }

    public function read($query, $data = []) {
        
    }

    public function write($query, $data = []) {

    }

}