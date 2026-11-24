<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

        <form action="save_usuario.php" method="POST">

            Seu Nome:<br>
            <input  type="text"     name="nome"><br><br>
            Seu Peso:<br>
            <input  type="decimal"  name="peso"><br><br>
            Sua Altura:<br>
            <input  type="decimal"  name="altura"><br><br>

            Seu Plano:<br>
            <input  type="text"     name="plano"><br><br>


            <input type="submit"    value="Salvar/Cadastrar">         
        </form>            
</body>

</html>