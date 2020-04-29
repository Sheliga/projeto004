<?php

require_once('App/core/conexao.php');

class Status {
    private $id;
    private $descricao;

    
    function __construct($id = 0, $descricao = ""){
        $this -> id = $id;
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
    
    public function save($status) {
        // logica para salvar status no banco
        $sql = "INSERT INTO duvida_status(descricao) values ('{$this->status->getDescricao()}')";
        
        $stmt = Conexao::getInstance()-> prepare($sql);
        $stmt->execute();
    }
         
    public function update() {
        // logica para atualizar status no banco
        $sql = "UPDATE duvida_status SET descricao='{$this -> descricao}' WHERE id = {$this -> id}";
        $stmt = Conexao::getInstance()-> prepare($sql);
        $stmt->execute();
    }
         
    public function remove($id) {
        // logica para remover status do banco
        $sql = "delete from duvida_status where id={$id}";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
    }
         
    public function listById($id) {
        // logica para listar status pelo nome
        $sql = "select * from duvida_status where id={$id}";        
        $stmt = Conexao::getInstance()-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            return new Status($row['id'], $row['descricao']);
        }
    
    }
    public function listAll() {
        // logica para listar todos os status do banco
        $estados = array();        
        $sql = "select * from duvida_status order by id";           
        $stmt = Conexao::getInstance()-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            array_push($estados, new Status($row['id'], $row['descricao']));
        }
        return $estados;
    
    } 
}