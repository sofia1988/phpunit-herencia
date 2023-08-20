<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;
use App\Autor;

class PostTest extends TestCase{

    public function test_add_to_post(){
        $autor = new Autor("sofia");
        $post = new Post($autor);
        $comment = new Comment($comment);
        

        $post->addComment($comment);//quiero agregar un comentario a mi post,ese que cree, o sea la instancia .
   
     
        $this->assertEquals(1, $post->countComments());//cree un post.
        $this->assertInstanceOf(Comment::class,$post->getComments()[0]);//ese comentario realmente es una instancia de esa clase ?lo confirmamos con assertInstanceOf.cual vamos a revisar? $post->getComments()[0] el primer comentario
       
    }
}
//desarrollo guiado por pruebas (tdd)