<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save_instrutor.php" method="get">
        <a>nome do instrutor:</a><br> 
        <input type="text" name="nome"><br>
        <a>tempo de experiencia(em anos):</a><br> 
        <input type="int" name="experiencia"><br>
        <a>selecione o esporte em que o instrutor trabalhara:</a><br>
        <select name="idesporte">
            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM esporte";

            $comando = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($comando);
            $esporte = mysqli_stmt_get_result($comando);

            while ($esporte = mysqli_fetch_array($esporte)) {
                $idesporte = $esporte['idturma'];
                $nome = $esporte['nome'];

                echo "<option value='$idesporte'>$nome</option>";
            }
            ?>

        </select><br>
    <input type="submit" value="cadastrar"><br>
    </form>
    <a href="index.php">inicio</a>
</body>
</html>