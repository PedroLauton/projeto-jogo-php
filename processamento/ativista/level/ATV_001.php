<?php

//Inicia session
session_start();

// Importa constants de textos dos levels
include_once "../../server/levels.php";

// Gerar número de dado dessa página
$valorDado = rand(1, 20);

// Manipular desenvolvimento da história 
if($valorDado <= 1) {
  $redirecionamento = "../final/ATV_001F.php";
}
else if($valorDado <= 12) {
  $redirecionamento = "ATV_0011.php";
}
else {
  $redirecionamento = "ATV_0012.php";
}

// Pegar história no arquivo
$storyFile = fopen(ATV_1, "r") or die("Unable to open file!");
$storyText = fread($storyFile,filesize(ATV_1));
fclose($storyFile);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilo/css_2.css">
    <link rel="icon" href="../../../imagens/eco.png">
    <title>EcoMundo</title>
</head>
<body>
    <h1>Ativista</h1>
    <div class="txt_historia">
      <?php echo $storyText; ?>
    </div>
    <br><br>
    <div class="box-Container">
        <button id="btnLancarDado">
          <img src="../../../imagens/dado.png" alt="Dado">
          <!-- Gambiarra: Apenas para copiar innerHTML dessa div para substituir o innerHtml de btnLancarDado depois -->
          <div id="displayNumber">
            Número gerado no Dado: <?php echo "$valorDado";?>
          </div>
        </button>
    </div>
    <form action="<?php echo $redirecionamento ?>" method="post">
      <div class="box-Container">
        <button id="btnContinuar" type="submit" class="off" disabled>Continuar...</button>
      </div>
    </form>
    <script src="../../scripts/script.js"></script>
</body>
</html>