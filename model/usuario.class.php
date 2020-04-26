<?php

include_once('utils/Utils.php');


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
        
        $this->email = $email;
        
    }
    
    function setNome($setNome){
        $this->nome = $setNome;
    }
    function setSenha($senha){
        $this->senha = Utils::criptografar($senha);
    }

    function setPontosBonificacao($pontos_bonificacao){
        $this->pontos_bonificacao = $pontos_bonificacao;
    }

    function getId(){
        return $this->id;
    }

    function getEmail(){
        return $this->email;
    }
    function getNome(){
        return $this->nome;
    }

    function getSenha(){
        return $this->senha;
    }

    function getPontosBonificacao(){
        return $this->pontos_bonificacao;
    }
     
    
}
?>
