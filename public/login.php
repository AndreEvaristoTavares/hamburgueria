<?php
include 'header.php';
?>

<div class="container-login">
    <h2 class="text-center mt-5">Login</h2>
    <form action="../app/controllers/controller_login.php" method="post">               
        <div class="container-input">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="container-input">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn-default">Entrar</button>
        <div class="container-links">
            <a href="#">Esqueceu a senha?</a>
            <a href="#">Faça seu cadastro</a>
        </div>
    </form>
</div>

<?php
    include 'footer.php';
?>

