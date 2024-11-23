<?php 
require_once 'DataBase.php';
class Cardapio {
    public $nome;
    public $descricao;
    public $preco;
    public $categoria;
    public $data_criacao;
   // public $imagem;
    private $db;

    public function __construct() {
        $this->db = new DataBase();  // Conecta ao banco de dados
    }

    // Método para cadastrar o item no banco de dados
    public function cadastrar_item($nome, $descricao, $preco, $categoria) {
        // Definindo a data de criação
        $this->data_criacao = date('Y-m-d H:i:s');  // Data e hora atual

        // Preparar a query de inserção
        $sql = "INSERT INTO cardapio (nome, descricao, preco, categoria, data_criacao) 
                VALUES (?, ?, ?, ?, ?)";

        // Preparar a query
        $stmt = $this->db->prepare($sql);
        
        // Verificar se a preparação foi bem-sucedida
        if ($stmt === false) {
            die('Erro ao preparar a query: ' . $this->db->conn->error);
        }

        // Bind dos parâmetros para a query (evita SQL injection)
        $stmt->bind_param("ssdsd", $nome, $descricao, $preco, $categoria, $this->data_criacao);

        // Executar a query
        if ($stmt->execute()) {
            echo "Item cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar item: " . $stmt->error;
        }

        // Fechar a statement
        $stmt->close();
    }
}

