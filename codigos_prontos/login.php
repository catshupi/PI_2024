<?php
include("conexao.php");
session_start(); // Inicia a sessão no início

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        if (empty($email) || empty($senha)) {
            echo '<script>alert("Preencha todos os campos.");</script>';
        } else {
            // Primeiro, verifica na tabela de pacientes
            $sql_code = "SELECT * FROM pi_2024_maria_pacientes WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            $usuario = $sql_query->fetch_assoc();

            if ($usuario) {
                $user_type = 'paciente';
            } else {
                // Se não encontrar na tabela de pacientes, verifica na tabela de profissionais
                $sql_code = "SELECT * FROM pi_2024_profissionais WHERE email = '$email'";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
                $usuario = $sql_query->fetch_assoc();
                
                if ($usuario) {
                    $user_type = 'profissional';
                } else {
                    // Se não encontrar na tabela de profissionais, verifica na tabela de administradores
                    $sql_code = "SELECT * FROM pi_2024_adm WHERE email = '$email'";
                    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
                    $usuario = $sql_query->fetch_assoc();
                    $user_type = 'administrador';
                }
            }

            if ($usuario && password_verify($senha, $usuario['senha'])) {
                if ($user_type === 'paciente') {
                    $_SESSION['id_pacientes'] = $usuario['id_pacientes'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['endereco'] = $usuario['endereco'];
                    $_SESSION['cpf'] = $usuario['cpf'];
                    $_SESSION['datanasc'] = $usuario['datanasc'];
                    $_SESSION['email'] = $usuario['email'];
                    $_SESSION['telefone'] = $usuario['telefone'];
                } elseif ($user_type === 'profissional') {
                    $_SESSION['id_nome'] = $usuario['id_nome'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['telefone'] = $usuario['telefone'];
                    $_SESSION['especialidade'] = $usuario['especialidade'];
                    $_SESSION['endereco'] = $usuario['endereco'];
                    $_SESSION['cpf'] = $usuario['cpf'];
                    $_SESSION['crm'] = $usuario['crm'];
                    $_SESSION['datanasc'] = $usuario['datanasc'];
                    $_SESSION['email'] = $usuario['email'];
                } elseif ($user_type === 'administrador') {
                    $_SESSION['id_nome'] = $usuario['id_nome'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['email'] = $usuario['email'];
                    $_SESSION['arquivo_caminho'] = $usuario['arquivo_caminho'];
                }
                echo '<script>alert("Login realizado com sucesso.");window.location.href="index.php";</script>';
            } else {
                echo '<script>alert("Erro no login.");</script>';
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ana.css">
    <title>Página de Login</title>
</head>
<body>

        <?php
            include ("../test_ana/menu.php");
        ?>
         

         <div class="container text-center">
        <h1 class="cadas">Login</h1>
    </div>
<div class="container d-flex justify-content-center">

    <form class="form" action="" method="post" onsubmit="return validateFields();">
        <div class="flex-column">
            <label>Email</label></div>
        <div class="inputForm">
        <i class="bi bi-at"></i>
            <input placeholder="Email" class="input" type="text" name="email">
        </div>
        <div class="flex-column">
            <label>Senha</label></div>
        <div class="inputForm">
        <i class="bi bi-person-fill-lock"></i>
            <input placeholder="Senha" class="input" type="password" name="senha">
        </div>
        <button class="button-submit">Entrar</button>
    </form>
    </div>

    <script>
    function validateFields() {
        var email = document.querySelector('input[name="email"]').value;
        var senha = document.querySelector('input[name="senha"]').value;
        if (!email || !senha) {
            alert('Preencha todos os campos.');
            return false;
        }
        return true;
    }
    </script>

    <?php
        include("../test_ana/rodape.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
