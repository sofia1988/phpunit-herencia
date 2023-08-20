<?php

namespace App;

class Comment {
    
    protected $comment;

    public function __construct($comment) {
        $this->comment= $comment;
    }
   public function getComment() {
        return $this->comment;
    }

   
}
