<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-size: 30px;">
    <?php
    include "conecta.php";
    $sql = "INSERT INTO usuario(nome, senha, email) values('Testando', 'teste', 'teste')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado > 0)
    {
        echo "Cadastrado com sucesso!";
    }
    ?>
</body>

</html>