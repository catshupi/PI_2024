<?php
include("conexao.php");

if (isset($_POST['email'])) {
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $duvida = $mysqli->real_escape_string($_POST['duvida']);

    $stmt = $mysqli->prepare("INSERT INTO pi_2024_contato (nome, email, duvida) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $duvida);

    if ($stmt->execute()) {
        $message = "Mensagem enviada com sucesso!";
    } else {
        $message = "Erro ao enviar a mensagem: " . $stmt->error;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/leticia.css">
      <link rel="stylesheet" href="../css/ana.css">
      <title>Página de Contato</title>
  </head>
  <body>
       <?php
            include ("../test_ana/menu.php");
        ?>
    <div class="container">
        <div class="contato1">
            <h1 class="titulonovo">ENTRE EM CONTATO CONOSCO</h1>
            <div class="contato2">Horário de Atendimento:</div>
            <p>Segunda à Sexta-Feira das 08h às 12h e 13:30h às 19h</p>
            <div class="contato2">SAC:</div>
            <p class="contato">(43) 0000-0000 / (43) 0000-0000</p>
            <div class="contato2">Instagram:</div>
            <p class="contato">Policlinica Artemis</p>
            <div class="contato2">Whatsapp:</div>
            <p class="contato">(43) 0000-0000 / (43) 0000-0000</p>
            <div class="contato2">E-mail:</div>
            <p class="contato">policlinicasja@gmail.com</p>
        </div>
    </div>
    <div class="container">
        <div class="contato1">
            <div class="row">
                <div class="col">
                    <h1 class="titulonovo">MANDE SUA DÚVIDA</h1>
                    <form method="post">
                        <div class="form-group">
                            <label for="nome" class="contato2">Nome:</label>
                            <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome...">
                        </div>
                        <div class="form-group">
                            <label for="email" class="contato2">E-mail:</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu e-mail...">
                        </div>
                        <div class="form-group">
                            <label for="duvida" class="contato2">Dúvida:</label>
                            <textarea class="form-control" name="duvida" id="duvida" placeholder="Digite sua dúvida..."></textarea>
                        </div>
                        <div id="esp" class="form-group">
                            <button class="button-princi" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("../test_ana/rodape.php");
    ?>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  
</html>