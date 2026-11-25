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
            Sua Foto:<br>
            <input  type="file"  name="foto"><br><br>


            <input type="submit"    value="Salvar/Cadastrar">         
        </form>            
</body>

</html>