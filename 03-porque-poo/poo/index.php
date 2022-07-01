<?php

declare(strict_types=1);

namespace Algo;

class Pessoa
{
    protected bool $amigos = false;

    public function emprestarDinheiro(float $valor)
    {
        if ($this->amigos) {
            return "Claro, aqui estão seus {$valor}";
        }

        return "Está doido? Nem te conheço!";
    }

    public function __get($value = null)
    {
        return $this->{$value} ?? null;
    }

    public function __set($key, $value = null)
    {
        // $this->{$key} = $value;
    }

    /**
     * function somosAmigos
     *
     * @return bool
     */
    public function somosAmigos(): bool
    {
        return $this->amigos;
    }

    /**
     * function fazerAmizade
     *
     * @return void
     */
    public function fazerAmizade(): void
    {
        $this->amigos = true;
    }

    /**
     * function desfazerAmizade
     *
     * @return void
     */
    public function desfazerAmizade(): void
    {
        $this->amigos = false;
    }

    /**
     * function __toString
     *
     * @return string
     */
    public function __toString(): string
    {
        return '';
    }

    /**
     * function informarAHora
     *
     * @return string
     */
    public static function informarAHora(): string
    {
        $horas = date('H');
        $minutos = date('i');

        return "São {$horas} horas e {$minutos} minutos";
    }
}

$joao = new Pessoa(); // instancia|objeto
// $joao->idade = 45;
$joao->idade1 = 45;
$joao->idade2 = 56;
$joao->idade3 = [12, 34];
echo $joao->informarAHora();

/*
    echo $joao->emprestarDinheiro(100);

    echo PHP_EOL . str_repeat('-', 50) . PHP_EOL;

    $joao->fazerAmizade();

    echo $joao->emprestarDinheiro(100);

    echo PHP_EOL . str_repeat('-', 50) . PHP_EOL;

    $joao->desfazerAmizade();

    echo $joao->emprestarDinheiro(100);

    echo PHP_EOL . str_repeat('-', 50) . PHP_EOL;

    echo $joao->informarAHora();

    echo PHP_EOL . str_repeat('-', 50) . PHP_EOL;
*/

echo Pessoa::informarAHora();

//TODO - Estudar métodso mágicos __construct, __destruct e __toString
