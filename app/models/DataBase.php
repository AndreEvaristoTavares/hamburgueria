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
    
    

}