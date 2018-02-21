<?php
session_start();
include "header.php";
include 'conexao.php';
$id = $_SESSION['id'];
$endereco = $_POST['endereco'];
$bairro= $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];

$sql = "UPDATE cliente SET endereco='$endereco', bairro='$bairro', cidade='$cidade', cep='$cep'  WHERE id=$id";

if ($conn->query($sql) === TRUE) {

?>                                                            

<section>
	<div class="container">
		<p class="h3">Endereço Atualizado com sucesso</p>
		<a href="perfil.php" class="btn btn-secondary">Volta ao Perfil</a>

	</div>

</section>


<?php
}
else{
	echo "Erro:". $conn->error;
}
 $conn->close();
?>


<?php 
include "footer.php";
 ?>