<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        /* Reset básico e definição de fontes */

        .navbar,
        .navbar2 {
            display: flex;
            justify-content: center;
            background-color: #f8f9fa;
            padding: 10px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links,
        .nav-links2 {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .nav-links li,
        .nav-links2 li {
            margin: 0 10px;
        }

        .nav-links a,
        .nav-links2 a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        .nav-links2 a {
            display: flex;
            align-items: center;
        }

        .nav-links2 i {
            margin-right: 8px;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        /* Responsividade para a barra de navegação */
        @media (max-width: 768px) {

            .nav-links,
            .nav-links2 {
                flex-direction: column;
            }
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            margin: 40px 0;
        }

        .card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
            width: 100%;
            max-width: 300px;
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
        }

        .card-body {
            padding: 10px;
        }

        .card-title {
            margin: 0 0 10px;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .card-text {
            color: rgb(190, 190, 190);
            margin-bottom: 20px;
            text-align: justify;
            font-size: 14px;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .map-container {
            margin: 20px 0;
            text-align: center;
        }

        .map-responsive {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            border-radius: 10px;
        }

        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .map-container .btn {
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            color: #fff;
            background-color: rgb(125, 184, 140);
            transition: background-color 0.3s, transform 0.3s;
        }

        .map-container .btn:hover {
            background-color: rgb(64, 100, 69);
            transform: translateY(-2px);
        }

        .map-container .btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .flip-card {
            background: transparent;
            width: 150px;
            height: 200px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 10px;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .flip-card-front {
            background: #fff;
        }

        .flip-card-back {
            background: #ddd;
            transform: rotateY(180deg);
        }

        .titulo {
            font-size: 18px;
            font-weight: bold;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
        }

        .text-center {
            text-align: center;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .apple-font {
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .bold-big {
            font-weight: bold;
            font-size: 24px;
        }

        /* Cores para cartões */
        .preto {
            background-color: #000;
            color: #fff;
        }

        .vermelho {
            background-color: #f00;
            color: #fff;
        }

        .laranja {
            background-color: #f60;
            color: #fff;
        }

        .ciano {
            background-color: #0ff;
            color: #000;
        }

        .rosa {
            background-color: #f0f;
            color: #000;
        }

        .limao {
            background-color: #ff0;
            color: #000;
        }

        .amarelo {
            background-color: #ff0;
            color: #000;
        }

        .bege {
            background-color: #f5f5dc;
            color: #000;
        }

        .roxo {
            background-color: #800080;
            color: #fff;
        }

        .azul {
            background-color: #00f;
            color: #fff;
        }

        .verde {
            background-color: #0f0;
            color: #000;
        }

        .marinho {
            background-color: #003366;
            color: #fff;
        }

        @media (max-width: 768px) {
            .flip-card {
                width: 100px;
                height: 150px;
            }
        }

        .text-editor {
            font-weight: bold;
        }

        .text-editor h3,
        .text-editor p {
            margin: 0;
            padding: 0;
        }

        .text-editor p {
            text-align: right;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .rs-shop-header-section .rs-shop-subheader {
        color: #6e6e73;
        }

        @media (max-width: 1023px) and (max-device-width: 736px) {

        }
    .rs-shop-header, .rs-shop-subheader {
        font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 32px;
        font-weight: 600;
        letter-spacing: .004em;
        line-height: 1.125;
    }
    
    /* Estilos principais para a página */
        .rs-storehome {
        padding: 20px; /* Adiciona espaçamento interno */
    }

    .help-button-container {
    text-align: center;
}

    .help-button {
    display: flex;
    align-items: center;
    background-color: #007bff;
    color: white;
    border-radius: 50px;
    padding: 10px 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.ball-icon {
    width: 40px; /* Tamanho pequeno */
    height: 40px; /* Tamanho pequeno */
    border-radius: 50%; /* Torna a imagem circular */
    object-fit: cover; /* Garante que a imagem cubra o espaço sem distorção */
    margin-right: 10px;
}

.help-button:hover {
    background-color: #0056b3;
}

.contact-link {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.contact-link:hover {
    text-decoration: underline;
}
    </style>
    <link rel="stylesheet" href="style.css">
    <title>Página Principal</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">Ártemis</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#portfolio">Farmácia</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>

    <nav class="navbar2">
        <ul class="nav-links2">
            <li><a href="endereço"><i class="bi bi-geo-alt-fill"></i> Endereço</a></li>
            <li><a href="telefone"><i class="bi bi-telephone-fill"></i> Telefone</a></li>
            <li><a href="whatsapp"><i class="bi bi-whatsapp"></i> WhatsApp</a></li>
            <li><a href="facebook"><i class="bi bi-facebook"></i> Facebook</a></li>
        </ul>
    </nav>
    <br>
    <!--fim da navbar-->
    <div class="rs-storehome" role="main">
    <div id="root"></div>

    <div class="as-l-container rs-shop-container rs-shop-container-withchatandstore">
        <div class="row">
            <div class="column large-8 small-12 rs-shop-header-section" data-autom="shop-header">
                <h1 class="rs-shop-header">Clínica.</h1>
                <div class="rs-shop-subheader">Para uma melhor qualidade de vida.</div>
            </div>
            <div class="column large-4 small-12 rs-shop-chatstore-section">
                <div id="generic-2"></div>
            </div>
        </div>
    </div>

    <div id="710d5c54-d0b0-4854-93eb-e26f45f3cfc3" class="cs-line">
        <div class="cs-boxes">
            <div id="af31f7fd-6b14-47c9-8154-59c4b347b425" class="cs-box">
                <div class="cs-widgets">
                    <div id="672e907d-bbb4-4549-a6c2-fe85f40b8d8b" class="cs-widget cs-text-widget">
                        <div class="text-editor">
                            <h3><span style="color:#565658">ATENDIMENTO MÉDICO NAS</span></h3>
                            <h3><span style="color:#565658">SEGUINTES ESPECIALIDADES</span></h3>
                        </div>
                    </div>
                    <div id="f1938a89-d0d6-4393-9de6-8f4133f57c21" class="cs-widget cs-image-widget cs-image-alignment-left">
                        <img class="cs-chosen-image"
                            src="https://yata.s3-object.locaweb.com.br/1233733f4361ec28f45fadaf7e75364afb19ab162e328e2eaa4a0840bcd38638"
                            title="separador.png" alt="separador.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="help-button-container">
        <div class="help-button">
            <img src="clinico.jpg" alt="Ícone de Ajuda" class="ball-icon">
            <span>Precisa de ajuda?</span>
        </div>
        <a href="mailto:contato@exemplo.com" class="contact-link">Fale com a gente.</a>
    </div>
    <div class="container">
        <div class="container-fluid">
            <!-- Conteúdo principal -->
            <div class="content-container">
                <div class="cards-container">
                    <div id="card-clinico" class="flip-card preto">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Clínico Geral</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Pressão alta<br>Tosse crônica<br>Dor abdominal<br>Check-up anual<br>Febre persistente</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-cardiologista" class="flip-card vermelho">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Cardiologista</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Pressão alta<br>Dor no peito<br>Arritmias cardíacas<br>Insuficiência cardíaca<br>Check-up cardiovascular</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-otorrino" class="flip-card laranja">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Otorrino</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Ronco<br>Sinusite<br>Vertigem<br>Infecções ORL<br>Problemas auditivos</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-oftalmologista" class="flip-card ciano">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Oftalmologista</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Glaucoma<br>Olho vermelho<br>Visão embaçada<br>Exames oculares<br>Correção de grau</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-ginecologista" class="flip-card rosa">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Ginecologista</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Dor pélvica<br>Secreção vaginal<br>Caroços nos seios<br>Sangramento anormal<br>Alterações no ciclo menstrual</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-obstetra" class="flip-card limao">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Obstetra</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Pré-natal<br>Parto seguro<br>Ultrassonografia<br>Cuidados pós-parto<br>Planejamento familiar</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-pediatra" class="flip-card amarelo">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Pediatra</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Febre<br>Tosse<br>Refluxo<br>Dificuldade respiratória<br>Dores internas e/ou externas</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-dermatologista" class="flip-card bege">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Dermatologista</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Acne<br>Queda capilar<br>Manchas na pele<br>Alergias cutâneas<br>Infecção nas unhas</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-psicologo" class="flip-card roxo">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Psicólogo</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Tristeza intensa<br>Mudanças abruptas<br>Dificuldade decisória<br>Conflitos interpessoais<br>Ansiedade persistente</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-dentista" class="flip-card azul">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Dentista</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Mau hálito<br>Dor no dente<br>Cáries dentárias<br>Problemas na mordida<br>Sangramento gengival</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-nutricionista" class="flip-card verde">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Nutricionista</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Suplementação<br>Plano alimentar<br>Metabolismo basal<br>Dieta personalizada<br>Avaliação nutricional</p>
                            </div>
                        </div>
                    </div>

                    <div id="card-fisioterapeuta" class="flip-card marinho">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <p class="titulo">Fisioterapeuta</p>
                                <p>Quando devo me consultar?</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="titulo">Em caso de:</p>
                                <p>Dor crônica<br>Postura corporal<br>Lesões esportivas<br>Fortalecimento muscular<br>Reabilitação pós-operatória</p>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <br>
                <h1 class="text-center apple-font bold-big">Localize-se.</h1>
                <br>
                <br>
                <div class="map-container">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Descubra qual a localização do posto de saúde mais próximo de você.</p>
                            <a href="https://www.google.com/maps/search/posto+de+sa%C3%BAde+mais+pr%C3%B3ximo/@-25.4181597,-49.2575947,13z/data=!3m1!4b1?entry=ttu" target="_blank"
                                class="btn btn-success mt-3">Descubra já!</a>
                        </div>
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d48940.23825270508!2d-51.62136776438729!3d-24.259086811726885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-24.2478959!2d-51.560446299999995!4m5!1s0x94ec1106bd5d81df%3A0x8809fe0d9f6101c1!2sR.%20Ivaipora%2C%20330%20-%20Jacutinga%2C%20Ivaipor%C3%A3%20-%20PR%2C%2086870-000!3m2!1d-24.247448499999997!2d-51.5590689!5e0!3m2!1spt-BR!2sbr!4v1697797701767!5m2!1spt-BR!2sbr"
                                class="embed-responsive-item" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" alt="Google Maps"></iframe>
                        </div>
                    </div>

                </div>
            </div>
            </section>
        </nav>
            <script>
                document.getElementById('card-clinico').addEventListener('click', function() {
                    window.location.href = 'clinico.html';
                });

                document.getElementById('card-cardiologista').addEventListener('click', function() {
                    window.location.href = 'cardiologista.html';
                });

                document.getElementById('card-otorrino').addEventListener('click', function() {
                    window.location.href = 'otorrino.html';
                });

                document.getElementById('card-oftalmologista').addEventListener('click', function() {
                    window.location.href = 'oftalmologista.html';
                });

                document.getElementById('card-ginecologista').addEventListener('click', function() {
                    window.location.href = 'ginecologista.html';
                });

                document.getElementById('card-obstetra').addEventListener('click', function() {
                    window.location.href = 'obstetra.html';
                });

                document.getElementById('card-pediatra').addEventListener('click', function() {
                    window.location.href = 'pediatra.html';
                });

                document.getElementById('card-dermatologista').addEventListener('click', function() {
                    window.location.href = 'dermatologista.html';
                });

                document.getElementById('card-psicologo').addEventListener('click', function() {
                    window.location.href = 'psicologo.html';
                });

                document.getElementById('card-dentista').addEventListener('click', function() {
                    window.location.href = 'dentista.html';
                });

                document.getElementById('card-nutricionista').addEventListener('click', function() {
                    window.location.href = 'nutricionista.html';
                });

                document.getElementById('card-fisioterapeuta').addEventListener('click', function() {
                    window.location.href = 'fisioterapeuta.html';
                });
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>