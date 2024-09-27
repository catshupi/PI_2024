<?php
    require("conexao.php");

    session_start();

        $id = $_SESSION['id_pacientes'];

        // Verifica se o usuário está logado
        if (!isset($_SESSION['id_pacientes'])) {
            die("Erro: Usuário não está logado.");

           
}

        $stmt = $mysqli->prepare("SELECT * FROM pi_2024_maria_pacientes WHERE id_pacientes = ? LIMIT 1");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();





if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {

    // Verifique se o arquivo é uma imagem
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check === false) {
        die("O arquivo não é uma imagem.");
    }

    // Verifique a extensão do arquivo
    $extensoesPermitidas = array('jpeg', 'jpg', 'png', 'gif');
    $extensaoArquivo = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    if (!in_array($extensaoArquivo, $extensoesPermitidas)) {
        die("Tipo de arquivo não suportado.");
    }

    // Verifique o tamanho do arquivo (por exemplo, limite de 5MB aqui)
    if ($_FILES["foto"]["size"] > 5000000) {
        die("Arquivo muito grande!! Max: 5MB");
    }

    // Defina o local para salvar a imagem
    $diretorioUpload = "imgconta/";
    $novoNomeArquivo = uniqid() . "." . $extensaoArquivo;
    $caminhoFinal = $diretorioUpload . $novoNomeArquivo;

   

    // Tente mover o arquivo temporário para o diretório final
    if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoFinal)) {
        die("Ocorreu um erro ao fazer o upload da imagem.");
    }

    // Atualize o caminho da imagem no banco de dados
    $stmt = $mysqli->prepare("UPDATE pi_2024_maria_pacientes SET arquivo_caminho = ? WHERE id_pacientes = ?");
    $stmt->bind_param("ss", $caminhoFinal, $id);
    if (!$stmt->execute()) {
        die("Erro ao atualizar o caminho da imagem no banco de dados.");
    }

    // Atualize a variável de sessão para refletir a mudança feita
    $_SESSION["foto_perfil_caminho"] = $caminhoFinal;

    // Redirecione o usuário de volta para a mesma página
    header("Location: minhaconta.php");
    exit;


}else if(isset($_FILES["foto"]) && $_FILES["foto"]["error"] != 0) {
    die("Erro no upload do arquivo.");
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
    <link rel="stylesheet" href="">

    <title>Minha Conta</title>
</head>

<body>


    <div class="container profile-container">
        <div class="text-center mb-4">
            <?php
            $imgPath = isset($usuario["arquivo_caminho"]) && !empty($usuario["arquivo_caminho"]) ? $usuario["arquivo_caminho"] : 'imgconta/foto_teste.png';
            //echo "Caminho da imagem: " . $imgPath . "<br>";

            //var_dump($imgPath);

          

            if (file_exists($imgPath)) {
                echo "<img class='profile-picture' src='$imgPath' alt='Foto de perfil'>";
            } else {
                echo "<img class='profile-picture' src='imgconta/' alt='Foto de perfil'>";
                echo "O arquivo $imgPath não foi encontrado."; // isso é apenas para depuração
            }


            ?>
            <?php
            if (isset($usuario["nome"])) {
                echo "<h1 class=\"mt-3\">Olá " . htmlspecialchars($usuario["nome"]) . "</h1>";
            } else {
                echo "<h1 class=\"mt-3\">Olá!</h1>";

             

}
?>
        </div>

        <form action="minhaconta.php" method="post" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <input type="file" name="foto" class="form-control" placeholder="Mudar foto de perfil" required>
            </div>
            <div class="text-center">
                <input type="submit" value="Envie a sua foto" class="btn btn-primary">
            </div>
        </form>


        <div class="conta">
            <h2 class="mb-3">Minhas informações:</h2>
            <p><span class="info-title">Nome:</span>
                <?php echo isset($usuario["nome"]) ? htmlspecialchars($usuario["nome"]) : 'Não disponível'; ?>
            </p>
            <p><span class="info-title">Telefone:</span>
                <?php echo isset($usuario["telefone"]) ? htmlspecialchars($usuario["telefone"]) : 'Não disponível'; ?>
            </p>
            <p><span class="info-title">Endereço:</span>
                <?php echo isset($usuario["endereco"]) ? htmlspecialchars($usuario["endereco"]) : 'Não disponível'; ?>
            </p>
            <p><span class="info-title">CPF:</span>
                <?php echo isset($usuario["cpf"]) ? htmlspecialchars($usuario["cpf"]) : 'Não disponível'; ?>
            </p>
            <p><span class="info-title">Data de nascimento:</span>
                <?php echo isset($usuario["datanasc"]) ? htmlspecialchars($usuario["datanasc"]) : 'Não disponível'; ?>
            </p>
            <p><span class="info-title">Email:</span>
                <?php echo isset($usuario["email"]) ? htmlspecialchars($usuario["email"]) : 'Não disponível'; ?>
            </p>
        </div>

        <div class="text-center mt-5">
            
            <a href="deletarminhaconta.php" class="btn btn-outline-danger">Deletar</a>
            <a href="alterarconta.php" class="btn btn-outline-info">Alterar</a>
            <p><a href="../static/sair.php" class="btn btn-outline-danger">Sair</a></p>
        </div>
    </div>













</body>

</html>