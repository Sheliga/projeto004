<?php

require_once('App/core/conexao.php');

class Categoria {
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
        return $this -> descricao;
    }
    

    public function save() {
        // logica para salvar categoria no banco       
        $sql = "INSERT INTO categoria(descricao) values ('{$this -> descricao}')";        
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
    }
         
    public function update() {
        // logica para atualizar categoria no banco
        $sql = "UPDATE categoria SET descricao='{$this -> descricao}' WHERE id = {$this -> descricao}";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
    }
         
    public function remove($id) {
        // logica para remover categoria do banco                
        $sql = "delete from categoria where id={$id}";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
    }
         
    public function listById($id) {
        // logica para listar categoria pelo nome

        $sql = "select * from categoria where id={$id}";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            return new Categoria($row['id'], $row['descricao']);
        }
    
    }
    public function listAll() {
        // logica para listar todas as categorias do banco
        $categorias = array();
        $sql = "select * from categoria order by id";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
        
        while ($row = $stmt->fetch()) {    
            array_push($categorias, new Categoria($row['id'], $row['descricao']));
        }
        return $categorias;
    
    }
}