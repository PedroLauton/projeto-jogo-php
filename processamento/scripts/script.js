const btnDado = document.getElementById("btnLancarDado");
const displayNumber = document.getElementById("displayNumber");
const btnContinuar = document.getElementById("btnContinuar");
let botaoGerarDadoClicado = false;

btnDado.addEventListener("click", () => {
  if (!botaoGerarDadoClicado) {
    
    // Atualizar o texto do botão do dado com o valor gerado pelo PHP
    btnDado.innerHTML = displayNumber.innerHTML;

    // Ativar o botão Continuar (mudando a classe para "on")
    btnContinuar.classList.remove('off');
    btnContinuar.removeAttribute("disabled");
    btnContinuar.classList.add('on')

    // Desativar o botão Gerar Número Aleatório após o clique
    botaoGerarDadoClicado = true;
  }
});