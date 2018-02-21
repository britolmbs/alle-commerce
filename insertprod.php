<?php
include "conexao.php";
include "header.php";

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$chave = $_POST['chave'];
$foto = $_POST['foto'];



$sql = "INSERT INTO produto (nome, preco, descricao, categoria, chave, foto) VALUES ('$nome', '$preco', '$descricao', '$categoria', '$chave', '$foto')";
if($conn->query($sql) === TRUE){
	?>

 <section>
 <div class="container">
 <p class="h3 text-center">Produto Cadastrado com Sucesso!</p>
 <a href="cadprod.php" class="btn btn-secondary">Voltar</a>
 <a href="perfilfunc.php" class="btn btn-secondary">Perfil</a>
 	
 </div>
 </section>

	<?php 
}
else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>

<?php 

include "footer.php";
 ?>