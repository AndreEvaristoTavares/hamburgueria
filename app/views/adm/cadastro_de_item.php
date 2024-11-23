<?php
include '../../../public/header.php';
?>
<div class="container mt-5">
        <h2>Cadastrar Produto</h2>
        <form action="../../controllers/controller_cardapio.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select class="form-control" id="categoria" name="categoria" required>
                    <option value="lanche">Lanche</option>
                    <option value="bebida">Bebida</option>
                    <option value="combo">Combo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem:</label>
                <input type="file" class="form-control-file" id="imagem" name="imagem">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

<?php
    include '../../../public/footer.php';
?>