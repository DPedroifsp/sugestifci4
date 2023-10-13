<?php include("topbar.php") ?>
<div class="telatoda">
    <div class="imagem">
        imagem daquele history creator
    </div>
    <div class="infos">
        <form action="" method="post">
            <input type="text" name="nome" value="<?= $usuario['nome'] ?>" >
            <input type="text" name="sobrenome" value="<?= $usuario['sobrenome'] ?>" >
            <input type="email" name="email" value="<?= $usuario['email'] ?>" >
            <input type="text" name="prontuario" value="<?= $usuario['prontuario'] ?>" disabled >
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
        <a href="logout" class="btn btn-danger">Logout</a>
    </div>
</div>
<?php include("footer.php") ?>