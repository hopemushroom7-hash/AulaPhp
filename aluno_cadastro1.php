<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <?php include "menu.php" ?>
    <div class="conteudo">
        <h3>Confirmação de cadastro</h3>
        
    <?php

    if (isset($_REQUEST["enviar"]))
    {
        include "conexao.php";

        $nome = $_REQUEST["nome"];
        $cidade = $_REQUEST["cidade"];
        $estado = $_REQUEST["estado"];

        $sql = "insert into alunos (nome, cidade, estado) values (:nome, :cidade, :estado)";

        $result = $conexao->prepare($sql);
        $result->bindValue(":nome", $nome);
        $result->bindValue(":cidade", $cidade);
        $result->bindValue(":estado", $estado);
        $result->execute();

        echo "Aluno cadastrado com sucesso!<br>"
    }
    ?>

    <a href="aluno_cadastro.php">voltar</a>
</body>
</html>