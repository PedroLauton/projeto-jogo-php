let dadoGerado = null;
const botaoContinuar = document.querySelector('#btnContinuar');
let botaoGerarDadoClicado = false;

document.getElementById("btnLancarDado").addEventListener("click", function() {
    if (!botaoGerarDadoClicado) {
        // Gerar um número aleatório de 1 a 20
        dadoGerado = Math.floor(Math.random() * 20) + 1;

        // Atualizar o texto do botão do dado com o valor gerado
        document.getElementById("btnLancarDado").innerHTML = `Número gerado no Dado: ${dadoGerado}`;

        // Ativar o botão Continuar (mudando a classe para "on")
        document.querySelector('#btnContinuar').classList.remove('off');
        document.getElementById("btnContinuar").removeAttribute("disabled");
        document.querySelector('#btnContinuar').classList.add('on')

        // Desativar o botão Gerar Número Aleatório após o clique
        botaoGerarDadoClicado = true;
    }
});

