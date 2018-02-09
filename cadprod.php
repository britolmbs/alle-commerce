<?php 
include "header.php";
include "conexao.php"
 ?>

<section>
<div class="container">

<p>&nbsp;</p>

<h1>Cadastre o Produto</h1><hr />
		<form method="POST" action="insertprod.php">
		<div class="form-group">
			<label for="nome">Nome do produto: </label>
			<input type="text" name="nome" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<label for="preco">Preço </label>
			<input type="text" name="preco" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<label for="descricao">Descrição do produto: </label>
			<input type="text" name="descricao" class="form-control form-control-lg" />
		</div>
		<div class="form-group">
			<label for="categoria">Categoria: </label>
		<select class="form-control col-md-4" name="categoria">
			<option value="livro">Livros</option>
			<option value="roupa">Roupa</option>
			<option value="eletronico">Eletrônico</option>
			<option value="game">Game</option>
			<option value="celular">Celular</option>
			<option value="informatica">Informática</option>
		</select>

		<div class="form-group">
			<label for="chave">Palavra-Chave: </label>
		<input type="text" name="chave" class="form-control form-control-lg" />

		<div class="form-group">
			<label for="exampleFormControlFile1">foto: </label>
		<input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1" />
		</div>
			<button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
		</form>
	
</div>
	
</section>
<?php 
include "footer.php";
 ?>