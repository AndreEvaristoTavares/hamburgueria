<?php
include '../models/Login.php';
class ControllerLogin{
    private $email;
    private $senha;

    public function __construct($email, $senha){
        $this->email = $this->sanitizeInput($email);
        $this->senha = $this->sanitizeInput($senha);
    }
    private function sanitizeInput($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }
    public function login(){
        $loginModel = new Login();
        $loginModel->login($this->email, $this->senha);
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (!empty($email) && !empty($senha)) {
        $controller = new ControllerLogin($email, $senha);
        $controller->login();
    } else {
        session_start();
        $_SESSION['login_erro'] = 'Preencha todos os campos.';
        header("Location: ../../public/index.php");
        exit();
    }
} else {
    header("Location: ../../public/index.php");
    exit();
}