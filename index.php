<?php

$mensagemSucesso = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    $mensagemSucesso = "
        <div style='background:#d4edda;
                    color:#155724;
                    padding:15px;
                    margin-bottom:20px;
                    border-radius:5px;
                    text-align:center;'>
            Solicitação enviada com sucesso! Entraremos em contato em breve.
        </div>
    ";
}

include('Layout/header.php');
?>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <h1>Elegância e Sofisticação em Mármores e Granitos</h1>

        <p>
            Transformamos ambientes com materiais de alta qualidade,
            acabamento impecável e atendimento especializado.
        </p>

        <a href="#contato" class="btn">
            Solicitar Orçamento
        </a>

        <a href="https://wa.me/5511983015080"
           target="_blank"
           class="btn"
           style="margin-left:10px;">
            WhatsApp
        </a>

    </div>
</section>

<!-- Sobre -->
<section id="sobre">
    <div class="container">

        <h2>Sobre Nós</h2>

        <div class="cards">

            <div class="card">
                <h3>Experiência</h3>
                <p>
                    Trabalhamos com mármores, granitos e pedras ornamentais,
                    oferecendo soluções personalizadas para residências e empresas.
                </p>
            </div>

            <div class="card">
                <h3>Qualidade</h3>
                <p>
                    Selecionamos os melhores materiais para garantir beleza,
                    resistência e durabilidade em cada projeto.
                </p>
            </div>

            <div class="card">
                <h3>Atendimento</h3>
                <p>
                    Nossa equipe acompanha cada etapa do projeto,
                    desde a escolha da pedra até a instalação final.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Materiais -->
<section class="materiais">
    <div class="container">

        <h2>Materiais Trabalhados</h2>

        <ul>
            <li>✓ Mármores Nacionais e Importados</li>
            <li>✓ Granitos</li>
            <li>✓ Quartzo</li>
            <li>✓ Nanoglass</li>
            <li>✓ Pedras Ornamentais</li>
        </ul>

    </div>
</section>

<!-- Contato -->
<section id="contato" class="contato">
    <div class="container">

        <h2>Solicite um Orçamento</h2>

        <?php echo $mensagemSucesso; ?>

        <form method="POST" action="#contato">

            <input
                type="text"
                name="nome"
                placeholder="Seu nome"
                required
            >

            <input
                type="email"
                name="email"
                placeholder="Seu e-mail"
                required
            >

            <input
                type="tel"
                name="telefone"
                placeholder="Seu telefone"
            >

            <textarea
                name="mensagem"
                rows="5"
                placeholder="Descreva seu projeto"
                required
            ></textarea>

            <button type="submit">
                Enviar Solicitação
            </button>

        </form>

      <div style="text-align: center; margin-top: 30px;">

    <p style="margin-bottom: 20px;">
        Também estamos disponíveis nos canais abaixo:
    </p>

    <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">

        <a href="https://wa.me/5511983015080"
           target="_blank"
           class="btn">
            WhatsApp
        </a>

        <a href="https://instagram.com/andremarmores150"
           target="_blank"
           class="btn">
            Instagram
        </a>

    </div>

</div>

</div>
</section>

<?php include('Layout/footer.php'); ?>