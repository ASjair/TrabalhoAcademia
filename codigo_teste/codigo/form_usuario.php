<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

        <form action="save_usuario.php" method="POST" enctype="multipart/form-data">

            Seu Nome:<br>
            <input  type="text"     name="nome"><br><br>

            Seu Email:<br>
            <input  type="text"  name="email"><br><br>

            Sua Senha:<br>
            <input  type="int"  name="senha"><br><br>

            Seu Telefone:<br>
            <input  type="text"  name="telefone"><br><br>

            Sua Foto:<br>
            <input  type="file"  name="foto"><br><br>

            Seu Plano:<br>

<?php
require_once "conexao.php";

$sql = "SELECT idplano, nome, valor FROM plano";
$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_execute($comando);
$resultados = mysqli_stmt_get_result($comando);

while ($linha = mysqli_fetch_array($resultados)) {
    $idplano = $linha['idplano'];
    $nome = $linha['nome'];
    $valor = number_format($linha['valor'], 2, ',', '.');

    echo "<label>";
    echo "<input type='checkbox' name='idplano' value='$idplano'> $nome - R$ $valor";
    echo "</label><br>";
}

mysqli_stmt_close($comando);
?>

            <input type="submit"    value="Salvar/Cadastrar">         
        </form>            
</body>

</html>