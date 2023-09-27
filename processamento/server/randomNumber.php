<?php

// Cria array
$dados = array();

// Gera número aleatório
$randomNumber = rand(1, 20);

// Coloca status 200 (significa OK em http) e o numero aleatório
array_push(
  $dados,
  array(
    "status" => "200",
    "number" => $randomNumber
  )
);

// Retorna json com dados
header('Content-Type: application/json');
  echo json_encode($dados);
exit();

?>