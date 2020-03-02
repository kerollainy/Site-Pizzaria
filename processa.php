<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];

$sql = "insert into usuarios (nome,telefone,email,cep) values ('$nome','$telefone','$email','$cep')";
$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

print "Cadastrado com Sucesso!"

?>
