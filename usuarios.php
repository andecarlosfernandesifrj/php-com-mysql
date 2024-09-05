<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            display: flex;
            /* flex-direction: row; */
            list-style: none;
            background-color: black;
        }

        li {
            padding: 5px;
        }

        * {
            margin: 0;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            background-color: white;
            color: black;
            padding: 8px;
            transition: 250ms;
        }
        main{
            display: flex;
            margin: 10px;
            padding: 10px;
        }
        img{
            width: 120px;
        }
        #imagem{
            /* background-color: lightblue; */
            /* width:"20%"; */
            /* height:"20%"; */
        }
        #dados{
            background-color: lightcoral;
            width: 80%;
            height: 80%;
            color: green;
            border: 2px solid;
            border-radius: 10px;
            padding: 10px;
        }
        span{
            color: black;
            font-weight: bold;
            border-bottom: 1px solid;
            margin: 15px;
        }
        p{
            background-color: palegreen;
            /* border: 1px dashed; */
            padding: 15px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contatos</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="imagem">
            <img src="imagem.jpg">
        </div>
        <div id="dados">
            <p>
            <?php
                include "conecta.php";
                $sql = "SELECT id, nome, senha, email FROM usuario";
                $resultado = mysqli_query($conexao, $sql);
                // echo "numero de linhas: ". mysqli_num_rows($resultado);
                if (mysqli_num_rows($resultado) > 0) {
                    while($registro = mysqli_fetch_assoc($resultado)) {
                        echo "<span> ID: </span>". $registro["id"];
                        echo "<span> Nome: </span>". $registro["nome"];
                        echo "<span> E-mail: </span>". $registro["email"];
                        echo "<br>";
                    }
                }
                else{
                    echo "Nenhum usuário encontrado!";
                }
            ?>
            </p>
        </div>
    </main>

</body>

</html>