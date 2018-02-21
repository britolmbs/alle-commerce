<?php
include "header.php";
include 'conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM produto WHERE id=$id";

if ($conn->query($sql) === TRUE) {

?>

<section>
	<div class="container">
		<p class="h3">Produto Excluido com sucesso</p>
		<a href="perfilfunc.php" class="btn btn-secondary">Volta ao Perfil</a>
		<a href="excluirprod.php" class="btn btn-secondary">Excluir mais Produtos</a>

	</div>

</section>

<?php                                                            
}
else{
	echo "Erro:". $conn->error;
}
 $conn->close();
?>