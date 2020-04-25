<?php

/*

- id : PK 
- titulo : varchar(100) 
- descricao : text 
- categoria_id : int 
- usuario_id : int 


- status_id : int duvida 
- id : PK - conteudo : text 
*/

class Duvida {
    private $id;
    private $titulo;
    private $descricao;
    private $senha;
    private $pontos_bonificacao;

    function setId($id){
        $this->id = $id;
    }

    function setTitulo($titulo){
        $this->$titulo = $titulo;
    }
    
    function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    function setUsuario($usuario){
        $this->usuario = $usuario;
    }


    

    function getId(){
        return $this->id;
    }

    function getEmai(){
        return $this->email;
    }
    function getNome(){
        return $this->id;
    }

    function getSenha(){
        return $this->id;
    }

    function ged(){
        return $this->id;
    }
     
    
}
?>
