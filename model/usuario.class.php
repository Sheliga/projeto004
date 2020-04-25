<?php


class Usuario {
    private $id;
    private $email;
    private $nome;
    private $senha;
    private $pontos_bonificacao;

    function setId($id){
        $this->id = $id;
    }

    function setEmail($email){
        $this->$email = $email;
    }
    
    function setNome($setNome){
        $this->Nome = $setNome;
    }
    function setSenha($senha){
        $this->senha = $senha;
    }
    function setPontoBonificacao($id){
        $this->id = $id;
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

    function getPons(){
        return $this->id;
    }
     
    
}
?>
