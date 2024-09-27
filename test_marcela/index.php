<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Policlínica</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos personalizados -->
     <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
           
        }
        header {
            background-color: #28a8a2;
            color: white;
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        header p {
            font-size: 1.2em;
        }
        .services, .team, .testimonials {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .services h2, .team h2, .testimonials h2 {
            color: #4CAF50;
            text-align: center;
        }
        .team-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .team-member {
            text-align: center;
            margin: 10px;
        }
        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid #4CAF50;
        }
        .team-member h3 {
            margin: 10px 0;
            font-size: 1.2em;
        }
        .team-member p {
            color: #666;
        }
        footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 0;
            border-radius: 8px;
            margin-top: 20px;
        }
        .testimonials {
            background-color: #28a8a2;
            text-align: center;
        }
        .testimonials h2 {
            color: black;
            font-family: fantasy;
        }
        .testimonial {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto 20px auto;
        }
        .testimonial p {
            font-style: italic;
            color: #666;
        }
        .testimonial-author {
            font-weight: bold;
        }
        .btn {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: 0.3s;
        }
        .btn:hover {
            background: #45a049;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        .card-content {
            padding: 20px;
            text-align: center;
        }
        .card-content h2 {
            margin: 0 0 10px;
            color: #333;
        }
        .card-content p {
            color: #777;
            margin-bottom: 20px;
        }


    </style>
</head>
<body>
    

    <!-- Carousel de imagens -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="poli.jpg" class="d-block w-100" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="poli2.jpeg" class="d-block w-100" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="poli3.jpg" class="d-block w-100" alt="Imagem 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
<!-- Cabeçalho -->
<header>
        <div class="container">
            <h1>Policlínica XYZ</h1>
            <p>Saúde e Bem-estar ao seu Alcance</p>
        </div>
    </header>
    <!-- Container principal -->
    <div class="container">
        <!-- Seção de serviços -->
        <section class="services">
            <h2>Nossos Serviços</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="service1.jpg" class="card-img-top" alt="Serviço 1">
                        <div class="card-body">
                            <h5 class="card-title">Clínica Geral</h5>
                            <p class="card-text">Descrição do serviço de Clínica Geral.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="service2.jpg" class="card-img-top" alt="Serviço 2">
                        <div class="card-body">
                            <h5 class="card-title">Pediatria</h5>
                            <p class="card-text">Descrição do serviço de Pediatria.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="service3.jpg" class="card-img-top" alt="Serviço 3">
                        <div class="card-body">
                            <h5 class="card-title">Ginecologia e Obstetrícia</h5>
                            <p class="card-text">Descrição do serviço de Ginecologia e Obstetrícia.</p>
                        </div>
                    </div>
                </div>
            </div>

            
        </section>

        <!-- Seção sobre nós -->
        <section class="team">
            <h2>Sobre Nós</h2>
            <div class="row">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    <h3>Policlínica XYZ</h3>
                    <p>É uma instituição renomada que atua há 17 anos em Curitiba e região, oferecendo serviços de saúde de alta qualidade. Com uma equipe de profissionais altamente qualificados, a clínica se dedica a preservar o bem-estar do paciente e fornecer um atendimento personalizado e eficiente.</p>
                </div>
            </div>
        </section>

        <!-- Seção de localização -->
        <div class="container d-flex justify-content-center">
    <div class="card text-center">
        <div class="card-header">
            <img src="maps.png" width="35" height="30" alt=""> Google Maps
        </div>
        <div class="card-body">
            <h5 class="card-title">Localize-se</h5>
            <p class="card-text">Descubra qual a localização do posto de saúde mais próximo de você.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d48940.23825270508!2d-51.62136776438729!3d-24.259086811726885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-24.2478959!2d-51.560446299999995!4m5!1s0x94ec1106bd5d81df%3A0x8809fe0d9f6101c1!2sR.%20Ivaipora%2C%20330%20-%20Jacutinga%2C%20Ivaipor%C3%A3%20-%20PR%2C%2086870-000!3m2!1d-24.247448499999997!2d-51.5590689!5e0!3m2!1spt-BR!2sbr!4v1697797701767!5m2!1spt-BR!2sbr" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="card-img-top" alt="Google Maps"></iframe>
            <a href="https://www.google.com/maps/search/posto+de+sa%C3%BAde+mais+pr%C3%B3ximo/@-25.4181597,-49.2575947,13z/data=!3m1!4b1?entry=ttu" target="_blank" class="btn btn-success">Descubra Já!</a>
        </div>
    </div>
</div>

        <!-- Seção de depoimentos -->
        <section class="testimonials">
            <h2>Depoimentos de Pacientes</h2>
            <div class="testimonial">
                <p>"Atendimento excelente, com profissionais muito atenciosos e qualificados."</p>
                <p class="testimonial-author">- Maria Silva</p>
            </div>
            <div class="testimonial">
                <p>"Ambiente limpo e organizado. Recomendo a todos que buscam um bom atendimento médico."</p>
                <p class="testimonial-author">- João Santos</p>
            </div>
        </section>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>Todos os direitos reservados &copy; 2024 Policlínica XYZ</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VyOGT+V6UsPp3q+9J7OrPb8l/vm5D7Iae7QHeoFTGEx+6nlidupHENy+Zc6swx+g" crossorigin="anonymous"></script>
</body>
</html>
