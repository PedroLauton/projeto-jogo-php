<?php

//Inicia session
session_start();

// Importa constants de levels
include_once "./server/levels.php";

// Gerar número de dado dessa página
$valorDado = rand(1, 20);

// Manipular desenvolvimento da história com sessions
if(isset($_SESSION["level"]))
{
  $level = $_SESSION["level"];
  $levelAtual = $level;
  echo $level;

  switch($level)
  {
    case ATV_1F:
      header("Location: ./ativista/ativista_1_FinalA.php"); //provisório
      exit;
      break;
    case ATV_11:
      if($dado <= 1)
      {
        $_SESSION["level"] = $levelAtual."F";
      }
      else if ($dado <= 12)
      {
        $_SESSION["level"] = $levelAtual."1";
      }
      else
      {
        $_SESSION["level"] = $levelAtual."2";
      }
      break;
    case ATV_12:
      if($dado <= 1)
      {
        $_SESSION["level"] = $levelAtual."F";
      }
      else if ($dado <= 12)
      {
        $_SESSION["level"] = $levelAtual."1";
      }
      else
      {
        $_SESSION["level"] = $levelAtual."2";
      }
      break;
    default:
      session_destroy();
  }
}
else
{
  $_SESSION["level"] = ATV_1; //Level atual
  $levelAtual = ATV_1;

  //Seta para o próximo dependendo do dado
  if($valorDado <= 1)
  {
    $_SESSION["level"] = ATV_1F;
  }
  else if ($valorDado <= 12)
  {
    $_SESSION["level"] = ATV_11;
  }
  else
  {
    $_SESSION["level"] = ATV_12;
  }

}

// Pegar história no arquivo
$storyFile = fopen($levelAtual, "r") or die("Unable to open file!");
$storyText = fread($storyFile,filesize($levelAtual));
fclose($storyFile);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/css_2.css">
    <link rel="icon" href="../imagens/eco.png">
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
          <img src="../imagens/dado.png" alt="Dado">
          <!-- Gambiarra: Apenas para copiar innerHTML dessa div para substituir o innerHtml de btnLancarDado depois -->
          <div id="displayNumber">
            Número gerado no Dado: <?php echo "$valorDado";?>
          </div>
        </button>
    </div>
    <form action="ativista.php" method="post">
      <div class="box-Container">
        <button id="btnContinuar" type="submit" class="off" disabled>Continuar...</button>
      </div>
    </form>
    <script src="./scripts/script.js"></script>
</body>
</html>