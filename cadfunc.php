<?php 
include "header.php";
include "conexao.php"
 ?>

<section>
<div class="container">

<p>&nbsp;</p>

<h1>Cadastro do Funcionário</h1><hr />
		<form method="POST" action="insertfunc.php">
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<label for="cpf">CPF: </label>
			<input type="text" name="cpf" class="form-control form-control-lg" />
		</div>
		<div class="form-group">
			<label for="telefone">Telefone: </label>
		<input type="tel" name="telefone" class="form-control form-control-lg" />

		<div class="form-group">
			<label for="endereco">Endereço: </label>
		<input type="text" name="endereco" class="form-control form-control-lg" />

		<div class="form-group">
			<label for="bairro">Bairro: </label>
		<input type="text" name="bairro" class="form-control form-control-lg" />

		<div class="form-group">
			<label for="cep">CEP: </label>
		<input type="text" name="cep" class="form-control form-control-lg" />

		<div class="form-group">
			<label for="cargo">Cargo: </label>
		<input type="text" name="cargo" class="form-control form-control-lg" />

		<div class="form-group">
			<label for="senha">senha: </label>
		<input type="password" name="senha" class="form-control form-control-lg" />
		</div>
		<div class="form-group">
			<label for="exampleFormControlFile1">Foto: </label>
		<input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1" />
		</div>
			<button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
			
		</form>
	
</div>
	
</section>
<?php 
include "footer.php";
 ?>