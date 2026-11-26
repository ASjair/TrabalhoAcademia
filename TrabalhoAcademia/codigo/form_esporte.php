<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save_esporte.php" method="get">
        <a>nome do esporte:</a><br> 
        <input type="text" name="nome"><br>

        <a>descrição do esporte:</a><br> 
        <input type="text" name="descricao_esporte"><br>

        <a>hora que começa:</a><br> 
        <input type="time" name="hora_inicio"><br>

        <a>horario que termina:</a><br> 
        <input type="time" name="hora_fim"><br>
        
        <input type="submit" value="cadastrar">
    </form>

    <a href="index.php">inicio</a>
</body>
</html>