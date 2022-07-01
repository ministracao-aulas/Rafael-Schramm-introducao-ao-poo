<?php

function post(string $key, $default = null)
{
    return $_POST[$key] ?? $default;
}

function setSession(string $key, $value)
{
    $_SESSION[$key] = $value;
}

/*
    ## Super globais
    $GLOBALS;
    $_SESSION;
    $_SERVER;
    $_POST;
    $_GET;
    $_REQUEST;
    $_COOKIE;
    $_ENV;
*/

$_SESSION['nome'] = 'pedro';
setSession('nome', 'Pedro');

// $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
// $nome = $_POST['nome'];
// $nome = $_POST['nome'] ?? '';
// $nome = post('nome', 'Pedro');
$nome = $_POST['nome'] ?? 'João';

echo $nome . PHP_EOL;

/*
    controlar as rotas
    lógica para carregar as views
    lógica para geranciar globais (session, request, etc)
    lógica para validar autenticação (acessso restrito)
    lógia para lidar com banco de dados
*/
