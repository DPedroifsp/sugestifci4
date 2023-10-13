<?php include("topbar.php")?>
<div class="sugestoes">
<?php if(!$sugestoes){ ?>
    <h1>Nenhuma sugestão cadastrada</h1>
<?php } else{ ?>
    <?php
        $c =0;
        for( $c = 0; $c< count($sugestoes); $c++ ) {
            if($c > 8){
                break;
            }
            $sugestao = $sugestoes[$c];
        ?>
             <a class="click" href="<?= $GLOBALS['baseurl'] ?>/SugestIF/Detalhes/<?= $sugestao['id'] ?>">
          <div class="sugestao">
                <?= $sugestao['nome']?><br>
                <?= $sugestao['nome_usuario']?>
                <br>
                <?= $sugestao['areamelhora']?><br>
                <input type="range" min="0" max="100" value="<?= $sugestao['progresso'] ?>">
                
            </div>
        </a>
         
        <?php } ?>
<?php } ?>
</div>
<?php include("footer.php")?>