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
            die("[ PDOException ] => " . $Exception->getMessage());
        } catch (\Exception $Exception) {
            die("[ Exception ] => " . $Exception->getMessage());
        }
    }

    public function read($query, $data = []) {
        $conn = $this->getConnection();
        $stmt = $conn->prepare($query);

        if(count($data) == 0) {
            $stmt = $conn->query($query);
            $check = $stmt ? 1 : 0;
        } else {
            $check = $stmt->execute($data);
        }

        if($check) {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }

    public function write($query, $data = []) {
        $conn = $this->getConnection();
        $stmt = $conn->prepare($query);

        if(count($data) == 0) {
            $stmt = $conn->query($query);
            $check = $stmt ? 1 : 0;
        } else {
            $check = $stmt->execute($data);
        }

        if($check) {
            return true;
        } else {
            return false;
        }
    }

}