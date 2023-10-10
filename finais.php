<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/css.css">
    <link rel="icon" href="./imagens/eco.png">
    <title>EcoMundo</title>
</head>
<body class="body_3">
    <h1>Ativista</h1>
    <div id="box-finais">
        <img src="" alt="">
        <?php  
            session_start();

            for ($aux = 1; $aux <= 11; $aux++) {
                echo "<div class=\"txt_finais\">";
                if (!isset($_SESSION['Final_' . $aux])) {
                    $_SESSION['Final_' . $aux] = 0;
                }
                
                if ($_SESSION['Final_' . $aux] == true) {
                    echo "<img id=\"img_final_revelado\" src=\"./imagens/final_" . $aux . ".jpeg\" alt=\"Desconhecido\"><br><br>";
                    echo $_SESSION['Final_' . $aux];
                } else {
                    echo "<img id=\"img_desconhecido\" src=\"./imagens/desconhecido.png\" alt=\"Desconhecido\">";
                    echo "<br><br>Jogue mais para desbloquear outros finais!";
                }
                echo "</div>";
            }
        ?>
    </div>
    <br><br>
    <h1>Contrabandista</h1>
    <div id="box-finais">
        <img src="" alt="">
        <?php  
            for ($aux = 1; $aux <= 11; $aux++) {
                echo "<div class=\"txt_finais\">";
                if (!isset($_SESSION['Final_' . $aux])) {
                    $_SESSION['Final_' . $aux] = 0;
                }
                
                if ($_SESSION['Final_' . $aux] == true) {
                    echo "<img id=\"img_final_revelado\" src=\"./imagens/final_" . $aux . ".jpeg\" alt=\"Desconhecido\"><br><br>";
                    echo $_SESSION['Final_' . $aux];
                } else {
                    echo "<img id=\"img_desconhecido\" src=\"./imagens/desconhecido.png\" alt=\"Desconhecido\">";
                    echo "<br><br>Jogue mais para desbloquear outros finais!";
                }
                echo "</div>";
            }
        ?>
    </div>
    <br><br>
    <div class="box-Container">
        <a href="./index.html"><button id="btnVoltar">Voltar</button></a>
    </div>
</body>
</html>