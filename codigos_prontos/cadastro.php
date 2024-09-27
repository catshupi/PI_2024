<?php
include ("conexao.php");

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $datanasc = $_POST['datanasc'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $arquivo_caminho = "";

    //var_dump($_POST);

    // Preparar a instrução SQL
    $stmt = $mysqli->prepare("INSERT INTO pi_2024_maria_pacientes (nome, telefone, endereco, cpf, datanasc, email, senha, arquivo_caminho) values('$nome', '$telefone', '$endereco', '$cpf', '$datanasc', '$email', '$senha', '$arquivo_caminho')") or die ($mysqli->error);

    // Verificar se a preparação foi bem-sucedida
    if ($stmt === false) {
        die("Erro ao preparar a instrução SQL: " . $mysqli->error);
    }

   
    // Executar a instrução SQL
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        die("Erro ao cadastrar: " . $stmt->error);
    }

    // Fechar a instrução
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ana.css">
    <title>Tela de Cadastro</title>

    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ana.css">
    <title>Tela de Cadastro</title>

-->

</head>

<body>
    <?php
    include("../test_ana/menu.php");
    ?>
    <div class="container text-center">
        <h1 class="cadas">Cadastro</h1>
    </div>
    <div class="container d-flex justify-content-center">


        <form class="form" method="post">
            <div class="flex-column">
                <label>Nome </label>
            </div>
            <div class="inputForm">
                <i class="bi bi-person-lines-fill"></i>

                <input type="text" class="input" placeholder="Digite seu Nome" name="nome" />
            </div>
            <div class="flex-column">
                <label>Telefone </label>
            </div>
            <div class="inputForm">
                <i class="bi bi-person-lines-fill"></i>
                <input type="text" class="input" placeholder="Digite seu Telefone" name="telefone" />
            </div>

            <div class="flex-column">
                <label>Endereço </label>
            </div>
            <div class="inputForm">
                <i class="bi bi-person-lines-fill"></i>
                <input type="text" class="input" placeholder="Digite seu Endereço" name="endereco" />
            </div>

            <div class="flex-column">
                <label>CPF</label>
            </div>
            <div class="inputForm">
                <i class="bi bi-person-lines-fill"></i>
                <input type="text" class="input" placeholder="Digite seu CPF" name="cpf" />
            </div>

            <div class="flex-column">
                <label>Data de Nascimento</label>
            </div>
            <div class="inputForm">
                <i class="bi bi-person-lines-fill"></i>
                <input type="date" class="input" placeholder="Digite sua Data de Nascimento" name="datanasc" />
            </div>

            <div class="flex-column">
                <label>Email </label>
            </div>
            <div class="inputForm">
                <i class="bi bi-at"></i>
                <input type="text" class="input" placeholder="Digite seu Email" name="email" />
            </div>


            <div class="flex-column">
                <label>Senha</label>
            </div>
            <div class="inputForm">
                <i class="bi bi-person-fill-lock"></i>
                <input type="password" class="input" placeholder="Crie uma Senha" name="senha" />
            </div>



            <button class="button-submit" type="submit" value="Cadastrar">Cadastrar</button>
            <p class="p">Já possui uma conta?<a class="span" href="login.php">Faça seu Login</spa>
            </p>

    </form>
    </div>
    <?php
    include("../test_ana/rodape.php");
    ?>

</body>

</html>