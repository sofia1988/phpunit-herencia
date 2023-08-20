<?php

namespace App;

class Autor extends User {

    protected $post;

    public function __construct($name) {
        parent::__construct($name);
    }
    public function createPost($post) {
        return new Post($post);
    }
   
   public function greet($post) {
        echo "Hola, mi nombre es {$this->getName()} y este es mi $post";
    }

   
}
