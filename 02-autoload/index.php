<?php

use Database\Migrations\ClasseAbc;
use Projeto\Models\Client;
use TiagoF2\SendMail\PastaA\PastaB\pasta_c\MinhaClasse;
use TiagoF2\SendMail\RealySendMail;

require_once __DIR__ . '/autoload.php';

// require_once __DIR__ . '/app/Models/Client.php';
// require_once __DIR__ . '/app/SomeHere/Client.php';

$titica = new Client();
// $titica2 = new \Projeto\SomeHere\Client();

new ClasseAbc();
new RealySendMail();
new MinhaClasse();

/**
 * function enableDebug
 *
 * @param bool $enable = false
 * @return
 */
function enableDebug(bool $enable = false)
{
    $debug = !! ($_ENV['APP_DEBUG'] ?? $debug ?? false);

    if ($debug) {
        ini_set("display_errors", 1);
        ini_set("error_reporting", E_ALL);
        ini_set('xdebug.overload_var_dump', 1);
        ini_set('xdebug.filename_format', 0);
        return;
    }

    ini_set("display_errors", 0);
}

enableDebug();
