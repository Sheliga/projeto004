<?php

class Categoria {
    private $id;
    private $descricao;

    
    function __construct($descricao){
        $this -> descricao = $descricao;
        
    }

    function setId($id){
        $this->id = $id;
    }

    
    function getId(){
        return $this->id;
    }

    function setDescricao($descricao){
        $this -> descricao = $descricao;
    }

    function getDescricao(){
        return $this->descricao;
    }
    
}