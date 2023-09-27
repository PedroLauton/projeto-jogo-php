<?php

const $terrible = "Location : ativista_1_FinalA.php";
const $fine = "Location : ativista_2.php";
const $amazing = "Location : ativista_1_FinalB.php";

$valorDado = $_POST["number"];
      
if($valorDado <= 1) {
  header($terrible);
  exit;
} 
else if($valorDado <= 12) {
  header($fine);
  exit;
} 
else {
  header($amazing);
  exit;
}

?>