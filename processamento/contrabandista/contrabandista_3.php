<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/processamento/estilo/css.css">
    <link rel="icon" href="/processamento/imagens/eco.png">
    <title>EcoMundo</title>
</head>
<body>
    <h1>EcoMundo</h1>
    <h2>Sua história</h2>
    <div class="txt_historia">
    <?php 
        echo "Aqui vai o terceiro texto!";
    ?>
    <br><br>
    <button id="btnLancarDado"><img src="../imagens/dado.png" alt="Dado"></button>
    <?php
        $valorDado = 16;
        
        if($valorDado >= 0 && $valorDado <= 5){
            $txt_redirecionamento = "contrabandista_final_5.php";
        }
        if($valorDado >= 6 && $valorDado <= 15){
            $txt_redirecionamento = "contrabandista_final_6.php";
        }
        if($valorDado >= 16 && $valorDado <= 20){
            $txt_redirecionamento = "contrabandista_final_7.php";
        }
        echo "<form action=\"$txt_redirecionamento\">";
            echo "<button id=\"btnContinuar\"onclick=\"redirecionar()\" type=\"submit\" disabled>Continuar...</button>";
        echo "</form>";
    ?>
    <script src="./script_contrabandista.js"></script>
</body>
</html>