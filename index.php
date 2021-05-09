<!DOCTYPE html>
<?php
    $valor_dado1=rand(1,6);
    $valor_dado2=rand(1,6);
    $valor_dado3=rand(1,6);
    $valor_dado4=rand(1,6);
    
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lancamento de dados</title>
</head>
<body>
    <form action="" method="post">
        Player<img src="imagens/dado_rodando.gif" alt="dado vermelho rodando" style="width:100px;height:100px;" id ="dado1">
        <img src="imagens/dado_rodando.gif" alt="dado vermelho rodando" style="width:100px;height:100px;" id="dado2">
        Robo 
        <img src="imagens/dado_rodando.gif" alt="dado vermelho rodando" style="width:100px;height:100px;" id ="dado3">
        <img src="imagens/dado_rodando.gif" alt="dado vermelho rodando" style="width:100px;height:100px;"id="dado4">
        <br>
        <input type="submit" value="Rodar dados!!" name="rodar" id="rodar">
    </form>
    <br>
    <h2>
    Resultado:
    </h2>   
    <h3>
        O vencedor foi:
        <?php 
        $resultadoP=$valor_dado1 + $valor_dado2;
        $resultadoC=$valor_dado3 + $valor_dado4;
        if($resultadoP > $resultadoC)
            echo "O player ganhou";
        elseif($resultadoP < $resultadoC)
            echo "O computador ganhou";
        else 
            echo "Deu empate";
        ?>
    </h3>
    Player: O total de pontos foi:<?php echo   $resultadoP; ?>
    <img src="imagens/dado<?php echo   $valor_dado1; ?>.png" alt="dado vermelho com"  style="width:100px;height:100px;" id="dado1">
    <img src="imagens/dado<?php echo   $valor_dado2; ?>.png" alt="dado vermelho"  style="width:100px;height:100px;" id="dado2">
    <br>
    Robo:O total de pontos foi:<?php echo   $resultadoC; ?>
    <img src="imagens/dado<?php echo   $valor_dado3; ?>.png" alt="dado vermelho"  style="width:100px;height:100px;" id="dado3">
    <img src="imagens/dado<?php echo   $valor_dado4; ?>.png" alt="dado vermelho"  style="width:100px;height:100px;" id="dado4">

    

</body>
</html>