<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>email</td>
            <td>telefone</td>
            <td>foto</td>
            <td>idplano</td>
        </tr>

        <?php
        require_once "./conexao.php";

        $sql = "SELECT idusuario, nome, email, telefone, foto, idplano FROM usuario";

        $resultados = mysqli_query($conexao, $sql);

            if (!$resultados) {
                die("Erro na consulta: " . mysqli_error($conexao));
            }

            while ($linha = mysqli_fetch_assoc($resultados)) {
            echo "<pre>";
            print_r($linha);
            echo "</pre>";
        }

        // $sql = "SELECT * FROM usuario";

        // $resultados = mysqli_query($conexao, $sql);

        // while ($linha = mysqli_fetch_array($resultados)) {
        //     $idusuario = $linha['idusuario'];
        //     $nome = $linha['nome'];
        //     $email = $linha['email'];
        //     $telefone = $linha['telefone'];
        //     $foto = $linha['foto'];
        //     $idplano = $linha['idplano'];

        //     echo "<tr>";
        //     echo "<td>$idusuario</td>";
        //     echo "<td>$nome</td>";
        //     echo "<td>$email</td>";
        //     echo "<td>$telefone</td>";
        //     echo "<td>$foto</td>";
        //     echo "<td>$idplano</td>";
        //     echo "</tr>";
        // }


        ?>

    </table>
    <a href="index.php">inicio</a>
</body>
</html>