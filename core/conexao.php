<?php


//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'postgres');
define('PASS', 'postgres');
define('DBNAME', 'aplicacaoweb');
define('PORT', '5432');

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.

class Conexao {

    protected $conn = null;

    public function Connect(){
        try {


            $this->conn = new pdo('pgsql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASS);            
            return $this->conn;

        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }
    }

    public function Close(){
        $this->conn = null;
    }
}