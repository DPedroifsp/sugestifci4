<?php include("topbar.php")?>
<form action="" method="post">
    <input type="text" placeholder="Titúlo:" name="nomesugestao">
    <select name="areamelhora" id="">
        <option value="ensino">Ensino</option>
        <option value="estrutura">Estrutura</option>
        <option value="horario">Horário</option>
        <option value="projeto">Projeto</option>
        <option value="grupos">Grupos</option>
        <option value="eventos">Eventos</option>
    </select>
    <textarea name="sugestao" id="" cols="30" rows="10" resize="none" placeholder="Conte-nos sua sugestão"></textarea>
    <button type="submit">Sugerir</button>
</form>
<h3 color="red"><?= $msg?></h3>
<?php include("footer.php")?>