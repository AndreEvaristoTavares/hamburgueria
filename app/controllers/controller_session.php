<?php
session_start();
// Verifica se o usuário está logado
if (!isset($_SESSION['logado']) && !$_SESSION['logado'] !== true) {
    header("Location: ../../public/index.html");
}
?>
