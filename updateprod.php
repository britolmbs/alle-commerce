<?php
include "header.php";
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco= $_POST['preco'];
$descricao = $_POST['descricao'];
$chave = $_POST['chave'];

$sql = "UPDATE produto SET nome='$nome', preco='$preco', descricao='$descricao', chave='$chave'  WHERE id=$id";

if ($conn->query($sql) === TRUE) {

?>                                                            

<section>
	<div class="container">
		<p class="h3">Produto Atualizado com sucesso</p>
		<a href="perfilfunc.php" class="btn btn-secondary">Volta ao Perfil</a>
		<a href="atualizaprod.php" class="btn btn-secondary">Atulizar mais Produtos</a>

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