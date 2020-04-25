<?php
include_once('model/status.class.php');


class StatusDAO {
    private $status;

    function __construct(){
        
    }


    public function save($status) {
        // logica para salvar cliente no banco

        $this -> status = $status;        
        $sql = "INSERT INTO duvida_status(descricao) values ('{$this->status->getDescricao()}')";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
    }
         
    public function update($status) {
        // logica para atualizar cliente no banco
        $this -> status = $status;        
        $sql = "UPDATE duvida_status SET descricao='{$this->status->getDescricao()}' WHERE id = {$this->status->getId()}";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
    }
         
    public function remove() {
    // logica para remover cliente do banco
    }
         
    public function listById($id) {
        // logica para listar status pelo nome

        $sql = "select * from duvida_status where id={$id}";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['id'].$row['descricao']."<br />\n";
        }
    
    }
    public function listAll() {
        // logica para listar toodos os clientes do banco
        //$status  = new Status();
        $sql = "select * from duvida_status";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['id'].$row['descricao']."<br />\n";
        }
        
    
    }

}
?>