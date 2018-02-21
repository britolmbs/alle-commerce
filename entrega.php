<?php 
include "header.php" 
?>
<section>
<div class="container">
<?php
$id = $_GET['id'];
include 'conexao.php';

$sql = "SELECT * FROM cliente WHERE (id)=('$id') ";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
?>

<h1>Atualize o Produto</h1><hr />
		<form method="POST" action="updatecliente.php">
		<div class="form-group">
			<label for="endereco">Endereço </label>
			<input type="text" name="endereco" class="form-control form-control-lg" />
			<label for="bairro">Bairro </label>
			<input type="text" name="bairro" class="form-control form-control-lg" />
			<label for="cidade">Cidade </label>
			<input type="text" name="cidade" class="form-control form-control-lg" />
			<label for="cep">CEP </label>
			<input type="text" name="cep" class="form-control form-control-lg" />

        <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
		</div>

		</form>
		</section>

	

<?php
	}
}
else{
	echo "0 resultados";
}
$conn->close();
?>

</div>
</section>
