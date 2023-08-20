<?php

require __DIR__ . '/vendor/autoload.php';

use App\Post;
use App\Comment;
use App\Autor;

$post = new Post();
$autor = new Autor();

$post ->greet($post);

$comment1 = new Comment("hola");
$comment2 = new Comment("como");
$comment3 = new Comment("estas");

$post->addComment($comment1);
$post->addComment($comment2);
$post->addComment($comment3);

$comments = $post->getComments();

$total_comments = count( $comments );



echo "la cantidad de comentarios es: $total_comments \n";

foreach ($comments as $index => $comment) {
    $content = $comment->getComment();
    echo "Comentario $index: $content\n";
}