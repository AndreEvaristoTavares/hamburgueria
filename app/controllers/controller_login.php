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
        $login = new Login();
        $usuario = $login->login($this->email, $this->senha);
        if ($usuario) {
            $_SESSION['logado'] = true;
            $_SESSION['login_erro'] = '';
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['tipo_usuario'] = $usuario['tipo'];
            if ($usuario['tipo'] == 'cliente') {
                header('Location: ../views/cliente/home.php');
            } else if ($usuario['tipo'] == 'administrador') {
                header('Location: ../views/adm/home.php');
            }
            exit();
        } else {
            $_SESSION['login_erro'] = 'Usuário ou senha inválidos';
            header("Location: ../../public/index.html");
            exit();
        }
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
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