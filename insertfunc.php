<?php
include "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cargo = $_POST['cargo'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];



$sql = "INSERT INTO funcionario (nome, cpf, telefone, endereco, bairro, cep, cargo, senha, foto) VALUES ('$nome', '$cpf', '$telefone', '$endereco', '$bairro', '$cep', '$cargo', '$senha', '$foto')";
if($conn->query($sql) === TRUE){
	HEADER('location: loginfunc.php');
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>