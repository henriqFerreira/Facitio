<?php
namespace model;

require '../autoLoader.php';

use PDO;
use model\EnvHandler as EnvironmentVariables;

$loadEnvironmentVariables = new EnvironmentVariables();
$loadEnvironmentVariables->loadEnvFile("{$_SERVER['DOCUMENT_ROOT']}/Facitio");

abstract class Database {

    protected $DB_HOST;
    protected $DB_NAME;
    protected $DB_USER;
    protected $DB_PASSWORD;

    protected function getConnection() {
        $this->DB_HOST = getenv("DB_HOST");
        $this->DB_NAME = getenv("DB_NAME");
        $this->DB_USER = getenv("DB_USER");
        $this->DB_PASSWORD = getenv("DB_PASSWORD");

        try {
            $conn = new PDO("mysql:host=$this->DB_HOST;dbname=$this->DB_NAME", $this->DB_USER, $this->DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão estabilizada";
            return $conn;
        } catch (\PDOException $Exception) {
            echo "<span id='errorMsg'>[ Falha na conexão com o banco de dados ] => " . $Exception->getMessage() . "<span>";
        } catch (\Exception $Exception) {
            echo "<span id='errorMsg'>[ Falha na conexão ] => " . $Exception->getMessage() . "<span>";
        }
    }
}