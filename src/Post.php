<?php

namespace App;

class Post {

    protected $comments=[];
    protected $autor;


    function __construct(Autor $autor) {
    
        $this->autor = $autor;
   
    }

    public function addComment(Comment  $comment){ //para validar y como esta en la misma carpeta lo acepta(opcional).
      $this->comments [] = $comment;
    }

    public function countComments(){
        return count($this->comments);
    }

    public function getComments(){
        return $this->comments;
    }
}

