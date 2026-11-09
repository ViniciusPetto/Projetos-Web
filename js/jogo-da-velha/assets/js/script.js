// Cada trio de números representa uma linha, coluna ou diagonal que pode vencer.
const sequenciasVencedoras = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8],
    [0, 3, 6], [1, 4, 7], [2, 5, 8],
    [0, 4, 8], [2, 4, 6]
];

// Guarda os jogadores, a vez atual, o estado das casas e os elementos da página.
let jogadores = [];
let jogadorAtual = 0;
let tabuleiro = [];
let partidaEncerrada = false;
let celulas = [];
let mensagem;

// Pede um nome; se a resposta estiver vazia ou for cancelada, usa o nome padrão.
function solicitarNomeJogador(numero, nomePadrao) {
    const resposta = prompt(`Digite o nome do jogador ${numero}:`);

    if(resposta !== null  && resposta !== undefined) {
        let nome = resposta.trim();

        if(nome) {
            return nome;
        }
        else {
            return nomePadrao;
        }
    }
    else {
        return nomePadrao;
    }
}

// Registra os dois jogadores e, em seguida, prepara o tabuleiro para jogar.
function solicitarNome() {
    jogadores = [
        { nome: solicitarNomeJogador(1, "Jogador 1"), simbolo: "X" },
        { nome: solicitarNomeJogador(2, "Jogador 2"), simbolo: "O" }
    ];
    iniciarJogo();
}

// Encontra as nove casas no HTML, limpa o tabuleiro e prepara os cliques.
function iniciarJogo() {
    celulas = Array.from(document.querySelectorAll(".img-cel"));
    mensagem = document.createElement("p");
    mensagem.classList.add("mensagem-status");
    mensagem.setAttribute("role", "status");
    mensagem.setAttribute("aria-live", "polite");

    const elementoTabuleiro = document.querySelector(".tabuleiro");
    if(elementoTabuleiro && elementoTabuleiro.parentElement) {
        elementoTabuleiro.parentElement.insertBefore(mensagem, elementoTabuleiro);
    }
    else {
        console.log("Elemento do tabuleiro não encontrado. Mensagem de status não será exibida.");
    }

    if (celulas.length !== 9) {
        mensagem.textContent = "Não foi possível iniciar: o tabuleiro precisa ter 9 casas.";
        return;
    }

    tabuleiro = Array(celulas.length).fill(null);
    celulas.forEach((celula, indice) => {
        celula.textContent = "";
        celula.style.cursor = "pointer";
        celula.addEventListener("click", () => jogar(indice));
    });

    atualizarMensagem(`Vez de ${jogadores[jogadorAtual].nome} (${jogadores[jogadorAtual].simbolo})`);
}

// Registra uma jogada válida e verifica vitória, empate ou a próxima vez.
function jogar(indice) {
    if (partidaEncerrada || tabuleiro[indice] !== null) {
        return;
    }

    const jogador = jogadores[jogadorAtual];
    tabuleiro[indice] = jogador.simbolo;
    mostrarSimbolo(celulas[indice], jogador.simbolo);

    if (temVencedor(jogador.simbolo)) {
        partidaEncerrada = true;
        atualizarMensagem("Jogo encerrado. Recarregue a página para jogar novamente.");
        exibirAlertaAposAtualizacao(`${jogador.nome} venceu!`);
        return;
    }

    if (tabuleiro.every(casa => casa !== null)) {
        partidaEncerrada = true;
        atualizarMensagem("Jogo encerrado. Recarregue a página para jogar novamente.");
        exibirAlertaAposAtualizacao("Empate! Todas as casas foram preenchidas.");
        return;
    }

    jogadorAtual = 1 - jogadorAtual;
    const proximoJogador = jogadores[jogadorAtual];
    atualizarMensagem(`Vez de ${proximoJogador.nome} (${proximoJogador.simbolo})`);
}

// Espera a tela redesenhar a jogada final antes de abrir o alerta.
function exibirAlertaAposAtualizacao(texto) {
    requestAnimationFrame(() => {
        requestAnimationFrame(() => alert(texto));
    });
}

// Confere se alguma combinação vencedora está preenchida com o símbolo informado.
function temVencedor(simbolo) {
    return sequenciasVencedoras.some(sequencia =>
        sequencia.every(indice => tabuleiro[indice] === simbolo)
    );
}

// Escolhe a imagem do símbolo e a coloca dentro da casa clicada.
function mostrarSimbolo(celula, simbolo) {
    const imagem = document.createElement("img");
    imagem.src = simbolo === "X" ? "assets/img/x.png" : "assets/img/circulo.png";
    imagem.alt = simbolo === "X" ? "X" : "Círculo";
    imagem.draggable = false;
    celula.replaceChildren(imagem);
}

// Atualiza o texto da página usado para mostrar a vez ou o resultado da partida.
function atualizarMensagem(texto) {
    mensagem.textContent = texto;
}