<?php 
include"header.php";
 ?>


    <div class="container">
		<section>
		<h1>Atualize o Produto</h1><hr />
		<form method="POST" action="updateprod.php">
		<div class="form-group">
			<label for="id">Id do Produto: </label>
			<input type="text" name="id" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<label for="nome">Nome </label>
			<input type="text" name="nome" class="form-control form-control-lg" />
			<label for="preco">preço </label>
			<input type="text" name="preco" class="form-control form-control-lg" />
			<label for="descricao">Descrição </label>
			<input type="text" name="descricao" class="form-control form-control-lg" />
			<label for="chave">Palavra-Chave </label>
			<input type="text" name="chave" class="form-control form-control-lg" />

        <br />
        <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
		</div>

		</form>
		</section>
	</div>



<?php 
include "footer.php";
 ?>