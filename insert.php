<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$senha = $_POST['senha'];



$sql = "INSERT INTO cliente (nome, email, cpf, telefone, endereco, bairro, cidade, cep, senha) VALUES ('$nome', '$email', '$cpf', '$telefone', '$endereco', '$bairro', '$cidade', '$cep', '$senha')";
if($conn->query($sql) === TRUE){
	HEADER('location: login.php');
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>