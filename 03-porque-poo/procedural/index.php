<?php

declare(strict_types=1);

$amigos = false;

function emprestarDinheiro(float $valor, bool $ehAmigo)
{
    if ($ehAmigo) {
        return "Claro, aqui estão seus {$valor}";
    }

    return "Está doido? Nem te conheço!";
}

function fazerAmizade(&$ehAmigo)
{
    $ehAmigo = true;
}

function desfazerAmizade(&$ehAmigo)
{
    $ehAmigo = false;
}

$amigos = 'laura';

echo emprestarDinheiro('bala', $amigos) . PHP_EOL . PHP_EOL;
fazerAmizade($amigos);
echo emprestarDinheiro('bala', $amigos) . PHP_EOL . PHP_EOL;
desfazerAmizade($amigos);
echo emprestarDinheiro('bala', $amigos) . PHP_EOL . PHP_EOL;
