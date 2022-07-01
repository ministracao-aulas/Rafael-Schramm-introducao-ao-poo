<?php

$to_map = [
    'Projeto\\' =>  'app/',
    'Database\\' =>  'database/',
    'TiagoF2\\SendMail\\' =>  'Packages/tiagof2/send-mail/src/',
];

foreach ($to_map as $prefix => $base_dir) {
    spl_autoload_register(function ($class) use ($prefix, $base_dir) {

        $base_dir = __DIR__ . "/{$base_dir}";

        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }

        $relative_class = substr($class, $len);

        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

        if (file_exists($file)) {
            require $file;
        }
    });
}
