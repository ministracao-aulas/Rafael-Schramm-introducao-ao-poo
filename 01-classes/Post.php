<?php

namespace App;

require_once __DIR__ . '/Tools.php';

class Post
{
    use Tools;

    public string $title;
}

$post = new Post();
$post->title = 'Título do meu post legalzão';

echo $post->title . PHP_EOL;
echo $post->slug() . PHP_EOL;
