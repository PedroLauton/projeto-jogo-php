<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo_2/css_2.css">
    <link rel="icon" href="../imagens_2/eco.png">
    <title>EcoMundo</title>
</head>
<body>
    <h1>Ativista</h1>
    <?php 
        echo "<div class=\"txt_historia\">";
            echo "Lorem ipsum dolor sit amet. Aut autem commodi qui perferendis molestiae aut Quis necessitatibus aut libero fuga! Et omnis nihil qui consectetur quisquam est velit numquam cum ullam dolor non nostrum quasi et porro quam! Est optio error eum eveniet quaerat nam aliquid molestiae est placeat dignissimos.<br><br>Aut maiores rerum eos aperiam porro ex earum mollitia non unde sunt vel alias ipsum aut perspiciatis sunt. Aut nihil voluptatem cum quas voluptatibus qui fugit saepe vel consequatur assumenda.";
        echo "</div>";
    ?>
    <br><br>
    <div class="box-Container">
        <button id="btnLancarDado"><img src="../imagens_2/dado.png" alt="Dado"></button>
    </div>
    <?php
        $valorDado = 5;
        
        if($valorDado >= 0 && $valorDado <= 5){
            $txt_redirecionamento = "ativista_3_FinalA.php";
        }
        if($valorDado >= 6 && $valorDado <= 15){
            $txt_redirecionamento = "ativista_3_FinalB.php";
        }
        if($valorDado >= 16 && $valorDado <= 20){
            $txt_redirecionamento = "ativista_3_FinalC.php";
        }
        echo "<form action=\"$txt_redirecionamento\">";
            echo "<div class=\"box-Container\">";
                echo "<button id=\"btnContinuar\"onclick=\"redirecionar()\" type=\"submit\" class=\"off\" disabled>Continuar...</button>";
            echo "</div>";
        echo "</form>";
    ?>
    <script src="./script_ativista.js"></script>
</body>
</html>