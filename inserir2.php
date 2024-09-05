    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        // echo $nome."<br>";
        // echo $email."<br>";
        // echo $senha."<br>";


        include "conecta.php";
        $sql = "INSERT INTO usuario(nome, senha, email) values('$nome', '$senha', '$email')";
        $resultado = mysqli_query($conexao, $sql);
        if ($resultado > 0) {
            // echo "Cadastrado com sucesso!";
            
            header("location: usuarios2.php");
        }
    ?>
