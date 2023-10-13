
<!DOCTYPE html>
<html>
<head>
    <title>SugestIF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="post">
    <h1>Criar conta</h1>
    <input type="text" placeholder="Nome:" name="nome">
    <input type="text" placeholder="Sobrenome:" name="sobrenome">
    <input type="email" placeholder="Email:" name="email">
    <input type="text" placeholder="Prontuário" name="prontuario">
    <input type="password" placeholder="Senha:" name="senha">
    <button type="submit">Criar conta</button>
</form>
<a href="<?=$GLOBALS['baseurl']?>">Já tem conta? Faça login</a>

</body>
</html>