<?php
  session_start();
  $_SESSION['Final_1'] = 'Infelizmente, você não aguenta e se mata.';

  include_once "../../server/levels.php";

  $storyFile = fopen(ATV_1F, "r") or die("Unable to open file!");
  $storyText = fread($storyFile,filesize(ATV_1F));
  fclose($storyFile);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilo/css.css">
    <link rel="icon" href="../../../imagens/eco.png">
    <title>EcoMundo</title>
</head>
<body class="body_3">
    <h1>Ativista</h1>
    <div class="txt_historia">
      <figure>
        <img src="../../../imagens/final_1.jpeg" id="img_final" alt="Final">
        <figcaption id="legenda">Você se mata.</figcaption>
      </figure>
      <br>
      <?php echo $storyText; ?>
    </div>
    <br><br>
    <div class="box-Container">
        <a href="../../../index.html"><button id="btnVoltar">Voltar</button></a>
    </div>
</body>
</html>