<?php
require_once "conexao.php";

$idplano = $_POST['idplano'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

$nova_senha = password_hash($senha, PASSWORD_DEFAULT);

$nome_arquivo = $_FILES['foto']['name'];
$caminho_temporario = $_FILES['foto']['tmp_name'];

$extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

$novo_nome = uniqid() . "." . $extensao;

$caminho_destino = "fotos_user/" . $novo_nome;

move_uploaded_file($caminho_temporario, $caminho_destino);

$sql = "INSERT INTO usuario (idplano, nome, email, senha, telefone, foto) VALUES (?, ?, ?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "isssss", $idplano, $nome, $email, $nova_senha ,$telefone, $novo_nome);

mysqli_stmt_execute($comando);

$resultado = mysqli_stmt_get_result($comando);


header("Location: index.php");
?>