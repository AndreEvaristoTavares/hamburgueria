<?php
include '../models/Cardapio.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receber dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    //$imagem = $_FILES['imagem']['name'];  // Supondo que a imagem é carregada via upload

    // Criar o objeto da classe Cardapio
    $cardapio = new Cardapio();

    // Chamar o método para cadastrar o item
    $cardapio->cadastrar_item($nome, $descricao, $preco, $categoria);

    // Você pode adicionar um código aqui para armazenar esses dados no banco de dados ou exibir um sucesso.
    echo "Item cadastrado com sucesso!";
}
