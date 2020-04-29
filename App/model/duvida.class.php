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
    private $categoria_id;
    private $usuario_id;
    private $status_id;

    function __construct($id = 0, $titulo = "", $descricao = "", $categoria_id =    0, $usuario_id = 0, $status_id=0){
        $this -> id = $id;
        $this -> titulo = $titulo;
        $this -> descricao = $descricao;
        $this -> categoria_id = $categoria_id;
        $this -> usuario_id = $usuario_id;
        $this -> status_id = $status_id;
    }

    function setId($id){
        $this->id = $id;
    }

    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
    function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    function setCategoriaId($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    function setUsuarioId($usuario_id){
        $this->usuario_id = $usuario_id;
    }
    function setStatusId($status_id){
        $this -> status_id = $status_id;
    }

    function getId(){
        return $this->id;
    }

    function getTitulo(){
        return $this->titulo;
    }
    
    function getDescricao(){
        return $this->descricao;
    }
    function getCategoriaId(){
        return $this->categoria_id;
    }
    function getUsuarioId(){
        return $this->usuario_id;
    }
    function getStatusId(){
        return $this ->status_id ;
    }

    public function save() {
        // logica para salvar duvidas no banco
        $sql = "insert into  duvida (titulo, descricao, categoria_id,usuario_id, status_id)
        values('{$this ->titulo}', '{$this->descricao}', {$this->categoria_id}, {$this->usuario_id}, {$this ->status_id})";         
        $stmt = Conexao::getInstance()-> prepare($sql);
        $stmt->execute();
    }
         
    public function update() {
        // logica para atualizar status no banco
        $sql = "UPDATE duvida SET titulo ='{$this->titulo}', descricao = '{$this->descricao}', categoria_id={$this->categoria_id}, usuario_id={$this->usuario_id}, status_id={$this->status_id} WHERE id = {$this->id}";
        $stmt = Conexao::getInstance()-> prepare($sql);
        $stmt->execute();
    }
         
    public function remove($id) {
        // logica para remover status do banco
        $sql = "delete from duvida where id={$id}";
        $stmt = Conexao::getInstance() -> prepare($sql);
        $stmt->execute();
    }
         
    public function listById($id) {
        // logica para listar status pelo nome
        $sql = "select 
        duvida.id, duvida.titulo, duvida.descricao, categoria.id as categoria, usuario.id as usuario, duvida_status.id as status
        from
            duvida 
            inner join categoria 
                on duvida.categoria_id = categoria.id
            inner join usuario
                on duvida.usuario_id = usuario.id
            inner join duvida_status
                on duvida.status_id = duvida_status.id where duvida.id={$id}";                        
        $stmt = Conexao::getInstance()-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            return new Duvida($row['id'], $row['titulo'], $row['descricao'],$row['categoria'], $row['usuario'], $row['status']);
        }
    
    }
    public function listAll() {
        // logica para listar todos os status do banco
        $duvidas = array();        
        $sql = "select 
        duvida.id as id, duvida.titulo, duvida.descricao, categoria.id as categoria, usuario.id as usuario, 
        duvida_status.id as status
        from
            duvida 
            inner join categoria 
                on duvida.categoria_id = categoria.id
            inner join usuario
                on duvida.usuario_id = usuario.id
            inner join duvida_status
                on duvida.status_id = duvida_status.id order by duvida.id";       
        $stmt = Conexao::getInstance()-> prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {            
            array_push($duvidas, new Duvida($row['id'], $row['titulo'], $row['descricao'],$row['categoria'], $row['usuario'], $row['status']));
        }
        return $duvidas;
    
    } 


}
?>
