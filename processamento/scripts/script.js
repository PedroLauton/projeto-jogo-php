const btnDado = document.getElementById("btnLancarDado");
const btnContinuar = document.getElementById("btnContinuar");
const formContinue = document.getElementById("formContinue");
let botaoGerarDadoClicado = false;
let dadoGerado = 1;

btnDado.addEventListener("click", async () => {
  if (!botaoGerarDadoClicado) {

    // Pede ao servidor um número aleatório e guarda numa const
      // 1° parâmetro: caminho para o servidor
      // 2° parâmetro: objeto com method e body
    const resultado = await fetch(
      '/projeto-jogo-php/processamento/server/randomNumber.php', 
      {
        method: 'POST',
        body: null
      }
    ).then((response) => response.json()) // Pega resposta da requisição e retorna como json

    // Se tudo tiver dado certo no servidor status será 200
    if(resultado[0].status === "200")
    {
      // Recebe valor aleatório gerado
      dadoGerado = resultado[1].number;

      // Atualizar o texto do botão do dado com o valor gerado
      btnDado.innerHTML = `Número gerado no Dado: ${dadoGerado}`;

      // Ativar o botão Continuar (mudando a classe para "on")
      btnContinuar.classList.remove('off');
      btnContinuar.removeAttribute("disabled");
      btnContinuar.classList.add('on')

      // Desativar o botão Gerar Número Aleatório após o clique
      botaoGerarDadoClicado = true;
    }
    else
    {
      //exeption
    }
  }
});
/*
formContinue.addEventListener("submit", async (event) => {
  event.preventDefault();

  let dados = new FormData();
  dados.append('number', `${dadoGerado}`);

  const resultado = await fetch(
    '/projeto-jogo-php/processamento/server/changeLevel.php', 
    {
      method: 'POST',
      body: dados
    }
  )
})*/