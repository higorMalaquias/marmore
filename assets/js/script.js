// Formulário de orçamento

const formulario = document.getElementById("orcamento-form");
const mensagemSucesso = document.getElementById("mensagem-sucesso");

if (formulario) {

formulario.addEventListener("submit", function (e) {

    e.preventDefault();

    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const telefone = document.getElementById("telefone").value;
    const projeto = document.getElementById("projeto").value;

    const mensagem = `Olá! Gostaria de solicitar um orçamento.

Nome: ${nome}
E-mail: ${email}
Telefone: ${telefone}

Projeto:
${projeto}`;

    const numeroWhatsapp = "5511983015080";

    const url =
        `https://wa.me/${numeroWhatsapp}?text=${encodeURIComponent(mensagem)}`;

    window.open(url, "_blank");

    mensagemSucesso.innerHTML = `
        <div style="
            background:#d4edda;
            color:#155724;
            padding:15px;
            margin-bottom:20px;
            border-radius:8px;
            text-align:center;
            font-weight:bold;
        ">
            Redirecionando para o WhatsApp...
        </div>
    `;

    formulario.reset();

});

}



// Rolagem suave para links internos

document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function (e) {

        const destino = document.querySelector(
            this.getAttribute("href")
        );

        if (destino) {

            e.preventDefault();

            destino.scrollIntoView({
                behavior: "smooth"
            });

        }

    });

});


// ==========================
// CARROSSEL DE PROJETOS
// ==========================

const imagensProjetos = [
    "assets/img/projetos/projeto1.jpg",
    "assets/img/projetos/projeto2.jpg",
    "assets/img/projetos/projeto3.jpg",
    "assets/img/projetos/projeto4.jpg",
    "assets/img/projetos/projeto5.jpg",
    "assets/img/projetos/projeto6.jpg",
    "assets/img/projetos/projeto7.jpg",
    "assets/img/projetos/projeto8.jpg",
    "assets/img/projetos/projeto9.jpg",
    "assets/img/projetos/projeto10.jpg",
    "assets/img/projetos/projeto11.jpg",
    "assets/img/projetos/projeto12.jpg",
    "assets/img/projetos/projeto13.jpg"
];

let indiceAtual = 0;

const imagemCarousel = document.getElementById("carousel-image");
const btnProximo = document.getElementById("next");
const btnAnterior = document.getElementById("prev");
const indicadores = document.querySelectorAll(".indicador");

if (imagemCarousel) {

    function atualizarImagem() {

        imagemCarousel.src = imagensProjetos[indiceAtual];

        indicadores.forEach((indicador, index) => {

            if (index === indiceAtual) {
                indicador.classList.add("ativo");
            } else {
                indicador.classList.remove("ativo");
            }

        });

    }

    if (btnProximo) {

        btnProximo.addEventListener("click", () => {

            indiceAtual++;

            if (indiceAtual >= imagensProjetos.length) {
                indiceAtual = 0;
            }

            atualizarImagem();

        });

    }

    if (btnAnterior) {

        btnAnterior.addEventListener("click", () => {

            indiceAtual--;

            if (indiceAtual < 0) {
                indiceAtual = imagensProjetos.length - 1;
            }

            atualizarImagem();

        });

    }

    indicadores.forEach((indicador, index) => {

        indicador.addEventListener("click", () => {

            indiceAtual = index;
            atualizarImagem();

        });

    });

    setInterval(() => {

        indiceAtual++;

        if (indiceAtual >= imagensProjetos.length) {
            indiceAtual = 0;
        }

        atualizarImagem();

    }, 4000);

    atualizarImagem();

}