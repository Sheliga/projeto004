<?php

include_once('App/utils/Utils.php');


class Usuario {
    private $id;
    private $email;
    private $nome;
    private $senha;
    private $pontos_bonificacao;

    function __construct($id = 0, $nome = "", $email = "", $senha = "", $pontos_bonificacao = ""){
        $this -> id = $id;
        $this -> nome = $nome;
        $this -> email = $email;
        $this -> senha = Utils::criptografar($senha);
        $this -> pontos_bonificacao = $pontos_bonificacao;
    }

    function setId($id){
        $this -> id = $id;
    }

    function setEmail($email){        
        $this -> email = $email;
        
    }
    
    function setNome($setNome){
        $this -> nome = $setNome;
    }
    function setSenha($senha){
        $this -> senha = Utils::criptografar($senha);
    }

    function setPontosBonificacao($pontos_bonificacao){
        $this -> pontos_bonificacao = $pontos_bonificacao;
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
     
    public function save() {
        // logica para salvar usuario no banco

        $sql = "INSERT INTO usuario(email, nome, senha, pontos_bonificacao) values ('{$this-> email}', '{$this-> nome}', '{$this -> senha}', {$this -> pontos_bonificacao})";

        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
    }
         
    public function update() {
        // logica para atualizar usuario no banco
        
        $sql = "UPDATE usuario SET email='{$this-> email}', nome = {$this -> nome}, senha = '{$this -> senha}', pontos_bonificacao={$this ->pontos_bonificacao }  WHERE id = {$this -> id}";                
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
    }
         
    public function remove($id) {
        // logica para remover usuario do banco
        $sql = "delete from usuario where id={$id}";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
    }
         
    public function listById($id) {
        // logica para listar usuario pelo id

        $sql = "select * from usuario where id={$id}";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt -> execute();
        while ($row = $stmt->fetch()) {            
            return new Usuario($row['id'], $row['nome'], $row['email'], $row['senha'], $row['pontos_bonificacao']);
        }
    
    }
    public function listAll() {
        // logica para listar todos os usuarios do banco
        $usuarios = Array();
        $sql = "select * from usuario order by id";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt -> execute();
        while ($row = $stmt->fetch()) {
            array_push($usuarios, new Usuario($row['id'], $row['nome'], $row['email'], $row['senha'], $row['pontos_bonificacao']));            
        }
        return $usuarios;
        
    
    }
    
}
?>
