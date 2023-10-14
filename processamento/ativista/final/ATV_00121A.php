<?php
  if (!defined('STDIN')) {
    if (!isset($_SERVER['HTTP_REFERER']) || strpos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) === false) {
        header("Location: ../../../index.html");
    }
  }

  session_start();
  $_SESSION['Final_8'] = 'Terra se tornou um único organismo vivo.';

  include_once "../../server/levels.php";

  $storyFile = fopen(ATV_121A, "r") or die("Unable to open file!");
  $storyText = fread($storyFile,filesize(ATV_121A));
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
        <img src="../../../imagens/final_8.jpeg" id="img_final" alt="Final">
        <figcaption id="legenda">Terra se tornou um único organismo vivo.</figcaption>
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