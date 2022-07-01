<?php

namespace Database\Migrations;

class ClasseAbc
{
    public function __construct()
    {
        print_r(__CLASS__ . '@' . __FUNCTION__ . PHP_EOL);
    }
}
