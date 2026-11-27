<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>email</td>
            <td>telefone</td>
            <td>foto</td>
            <td>id do plano</td>
        </tr>

        <?php
        require_once "conexao.php";

        $sql = "SELECT usuario.*, plano.nome AS nomeplano
        FROM usuario
        INNER JOIN plano
        ON usuario.idplano = plano.idplano";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $idusuario = $linha['idusuario'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $telefone = $linha['telefone'];
            $foto = $linha['foto'];
            $nomeplano = $linha['nomeplano'];

            echo "<tr>";
            echo "<td>$idusuario</td>";
            echo "<td>$nome</td>";
            echo "<td>$email</td>";
            echo "<td>$telefone</td>";
            echo "<td><img src='fotos_user/$foto' width='50'></td>";
            echo "<td>$nomeplano</td>";
            echo "</tr>";
        }


        ?>

    </table>
    <a href="index.php">inicio</a>
</body>
</html>