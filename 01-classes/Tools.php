<?php

namespace App;

trait Tools
{
    /**
     * function slug
     *
     * @return
     */
    public function slug()
    {
        $replace = [
            '  ' => '-',
            ' ' => '-',
            'á' => 'a',
            'ã' => 'a',
            'à' => 'a',
            'à' => 'a',
            'í' => 'i',
        ];

        return str_replace(
            array_keys($replace),
            array_values($replace),
            strtolower($this->title)
        );
    }
}
