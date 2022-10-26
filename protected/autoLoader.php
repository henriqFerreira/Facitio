<?php
    // Autoload classes based on a 1:1 mapping from namespace to directory structure
    spl_autoload_register(function ($className){
        $dirSeparator = DIRECTORY_SEPARATOR;
        $dir = __DIR__;
        $fileExtension = ".php";

        // Replace Namespace separator with directory separator
        $className = str_replace('\\', $dirSeparator, $className);

        // Get full file path containing the required class
        $file = "{$dir}{$dirSeparator}{$className}{$fileExtension}";

        // Get file if it is readable
        if (is_readable($file)) {
            require $file;
        }
    });