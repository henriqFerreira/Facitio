<?php

namespace protected\model;

class EnvHandler {
    public function loadEnvFile($dir) : bool {
        if (!file_exists($dir."/.env"))
            return false;

        $lines = file($dir."/.env");

        foreach ($lines as $line)
            putenv(trim($line));
    }
}