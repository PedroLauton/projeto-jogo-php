const btnDado = document.getElementById("btnLancarDado");
const displayNumber = document.getElementById("displayNumber");
const btnContinuar = document.getElementById("btnContinuar");
let botaoGerarDadoClicado = false;

btnDado.addEventListener("click", () => {
  if (!botaoGerarDadoClicado) {
    
    btnDado.innerHTML = displayNumber.innerHTML;

    btnContinuar.classList.remove('off');
    btnContinuar.removeAttribute("disabled");
    btnContinuar.classList.add('on')

    botaoGerarDadoClicado = true;
  }
});