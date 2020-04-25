<?php
include_once('model/categoria.class.php');


class categoriaDAO {
    private $status;

    function __construct(){
        
    }


    public function save($status) {
        // logica para salvar categoria no banco

        $this -> status = $status;        
        $sql = "INSERT INTO categoria(descricao) values ('{$this->status->getDescricao()}')";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
    }
         
    public function update($status) {
        // logica para atualizar categoria no banco
        $this -> status = $status;        
        $sql = "UPDATE categoria SET descricao='{$this->status->getDescricao()}' WHERE id = {$this->status->getId()}";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
    }
         
    public function remove() {
    // logica para remover categoria do banco
    }
         
    public function listById($id) {
        // logica para listar status pelo nome

        $sql = "select * from categoria where id={$id}";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['id'].$row['descricao']."<br />\n";
        }
    
    }
    public function listAll() {
        // logica para listar todas as categorias do banco
        
        $sql = "select * from categoria";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['id'].$row['descricao']."<br />\n";
        }
        
    
    }

}
?>