<?php 
session_start();
require_once 'DataBase.php';

class Login{
    public $email;
    public $senha;
    public function login($email, $senha){
        $this->email = $email;
        $this->senha = $senha;

        $Database = new DataBase();
        $conn = $Database->conn;

        $query = $conn->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $query->bind_param("ss", $this->email, $this->senha);
        $query->execute();
        $resultado = $query->get_result();
    
        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            return $usuario;
        }
        return false;
    }

}
?>