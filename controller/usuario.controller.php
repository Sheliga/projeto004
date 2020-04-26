<?php
include_once('model/usuario.class.php');


class usuarioDAO {
    private $usuario;

    function __construct(){
        
    }


    public function save($usuario) {
        // logica para salvar categoria no banco

        $this -> usuario = $usuario;        
                
        $sql = "INSERT INTO usuario(email, nome, senha, pontos_bonificacao) values ('{$this->usuario->getEmail()}', '{$this->usuario->getNome()}', '{$this->usuario->getSenha()}', {$this->usuario->getPontosBonificacao()})";
        
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
    }
         
    public function update($usuario) {
        // logica para atualizar categoria no banco
        $this -> usuario = $usuario;               
        $sql = "UPDATE usuario SET email='{$this->usuario->getEmail()}', nome = {$this->usuario->getNome()}, senha = '{$this->usuario->getSenha()}', pontos_bonificacao={$this->usuario->getPontosBonificacao()}  WHERE id = {$this->usuario->getID()}";                
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
    }
         
    public function remove() {
    // logica para remover categoria do banco
    }
         
    public function listById($id) {
        // logica para listar usuario pelo id

        $sql = "select * from usuario where id={$id}";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['id'].' '.$row['nome'].' '.$row['email'].' '.$row['senha'].' '.$row['pontos_bonificacao']."<br />\n";
        }
    
    }
    public function listAll() {
        // logica para listar todos os usuarios do banco
        
        $sql = "select * from usuario order by id";
        $p_sql = Conexao::getInstance();
        $stmt = $p_sql-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['id'].' '.$row['nome'].' '.$row['email'].' '.$row['senha'].' '.$row['pontos_bonificacao']."<br />\n";
            
        }
        
        
    
    }

}
?>