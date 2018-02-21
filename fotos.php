<?php 
include "header.php";
include "conexao.php"
 ?>

<section>
<div class="container">

<p>&nbsp;</p>

<h1>Trocar Foto</h1><hr />
		<form method="POST" action="uploadclie.php" enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" name="foto" class="form-control form-control-lg" />

			<button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
			</div>
		</form>
		</div>