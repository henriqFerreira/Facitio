<?php
namespace model;

require '../autoLoader.php';

class EnvHandler {
    public function loadEnvFile($dir) {
        if (!file_exists($dir."/.env"))
            return false;

        $lines = file($dir."/.env");

        foreach ($lines as $line)
            putenv(trim($line));
    }
}