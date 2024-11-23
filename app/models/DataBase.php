<?php
require_once '../../config/database.php';

class DataBase{
    public $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        // Configurações de erro
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    
        // Verifica se houve erro na conexão
        if ($this->conn->connect_error) {
            echo "Erro de conexão: " . $this->conn->connect_error;
            exit();
        }
    }

    // Método para executar consultas SQL diretas
    public function query($sql) {
        return $this->conn->query($sql);
    }

    // Método para preparar consultas com parâmetros
    public function prepare($sql) {
        return $this->conn->prepare($sql);
    }

    // Método para fechar a conexão
    public function close() {
        $this->conn->close();
    }
    
    

}