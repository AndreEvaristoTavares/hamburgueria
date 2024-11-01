<?php
include 'header.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-center mt-5">Login</h2>
            <form action="../app/controllers/controller_login.php" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                <div class="text-center mt-3">
                    <a href="#">Esqueceu a senha?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>

