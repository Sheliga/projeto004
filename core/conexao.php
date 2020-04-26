<?php
//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', 'hard.uniguacu.edu.br');
define('USER', '2016201393');
define('PASS', '1393');
define('DBNAME', '2016201393');
define('PORT', '5432');

class Conexao {
    //Cria a conexão com banco de dados usando o PDO e a porta do banco de dados
    
    protected $conn = null;
    public static $instance;

    private function __construct() {
        //construtor privado e vazio pra evitar a criação de novas instancias do banco
    }

    public static function getInstance() {
    //Conexao com o banco de dados no padrao singleton, retorna uma instancia da classe
        
        if (!isset(self::$instance)) {
            self::$instance = new pdo('pgsql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASS);            
            
        }
  
        return self::$instance;
    }


}