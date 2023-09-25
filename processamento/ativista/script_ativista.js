let dadoGerado = null;
let botaoGerarDadoClicado = false;

document.getElementById("btnLancarDado").addEventListener("click", function() {
    if (!botaoGerarDadoClicado) {
        // Gerar um número aleatório de 1 a 20
        dadoGerado = Math.floor(Math.random() * 20) + 1;

        // Atualizar o texto do botão do dado com o valor gerado
        document.getElementById("btnLancarDado").innerHTML = `Número gerado no Dado: ${dadoGerado}`;

        // Ativar o botão Continuar
        document.getElementById("btnContinuar").removeAttribute("disabled");

        // Desativar o botão Gerar Número Aleatório após o clique
        botaoGerarDadoClicado = true;
    }
});


