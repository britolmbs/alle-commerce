<?php 
include"header.php";
 ?>




    <div class="container">
		<section>
		<h1>Excluir o Produto</h1><hr />
		<form method="POST" action="deleteprod.php">
		<div class="form-group">
			<label for="id">Id do Produto: </label>
			<input type="text" name="id" class="form-control form-control-lg" />
		</div>
        <button type="submit" class="btn btn-dark btn-lg">Enviar</button>
		</div>

		</form>
		</section>
	</div>



<?php 
include "footer.php";
 ?>