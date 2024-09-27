<?php
session_start();
include("conexao.php"); // Inclui a conexão com o banco de dados

// Verifica se o usuário está logado
if (!isset($_SESSION['id_pacientes'])) {
    header("Location: login.php"); // Redireciona para a página de login se o usuário não estiver logado
    exit();
}

// Obtém o ID do usuário logado da sessão
$id_pacientes = $_SESSION['id_pacientes'];

// Verifica se o formulário foi enviado para deletar a conta
if (isset($_POST['confirmar_delete'])) {
    // Deleta a conta do banco de dados
    $sql_delete = "DELETE FROM  pi_2024_maria_pacientes WHERE id_pacientes = ?";
    $stmt = $mysqli->prepare($sql_delete);
    $stmt->bind_param("i", $id_pacientes);

    if ($stmt->execute()) {
        // Destrói a sessão após deletar a conta
        session_destroy();
        echo "<script>alert('Sua conta foi deletada com sucesso!'); window.location.href='index.php';</script>";
        exit();
    } else {
        echo "Erro ao deletar a conta: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Deseja realmente excluir sua conta?</h2>
        <p>Essa ação não pode ser desfeita. Todos os seus dados serão permanentemente removidos.</p>

        <form method="post">
            <button type="submit" name="confirmar_delete" class="btn btn-danger">Deletar Minha Conta</button>
            <a href="minhaconta.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
