<?php
namespace core;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/autoLoader.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';

use PDO;
use Exception;
use PDOException;

class Database {
    private function getConnection() : PDO {
        try {
            $conn = new PDO("mysql:host=" . DATABASE_HOST . ";dbname=" . DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $Exception) {
            die("[ PDOException ] => " . $Exception->getMessage());
        } catch (Exception $Exception) {
            die("[ Exception ] => " . $Exception->getMessage());
        }
    }

    public function read(string $query, array $data = []) : bool | array {
        $conn = $this->getConnection();
        $stmt = $conn->prepare($query);

        if(count($data) == 0) {
            $stmt = $conn->query($query);
            $check = $stmt ? 1 : 0;
        } else {
            $check = $stmt->execute($data);
        }

        if($check)
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        else
            return false;
    }

    public function write(string $query, array $data = []) : bool {
        $conn = $this->getConnection();
        $stmt = $conn->prepare($query);

        if(count($data) == 0) {
            $stmt = $conn->query($query);
            $check = $stmt ? 1 : 0;
        } else {
            $check = $stmt->execute($data);
        }

        if($check)
            return true;
        else
            return false;
    }

    public function outputWrite(string $query, array $data = []) : bool | string {
        $conn = $this->getConnection();
        $stmt = $conn->prepare($query);

        if(count($data) == 0) {
            $stmt = $conn->query($query);
            $check = $stmt ? 1 : 0;
        } else {
            $check = $stmt->execute($data);
        }

        if($check) {
            return $conn->lastInsertId();
        } else {
            return false;
        }
    }
}