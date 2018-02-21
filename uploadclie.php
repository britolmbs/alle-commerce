<?php 
include "header.php";
 ?>



<?php 
$target_dir = "img/cliente/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);

if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)){


	?>
	<section>

<div class="container">
<p class="h5">O Arquivo foi enviado</p>
<a href="login.php" class="btn btn-secondary">voltar</a>
</div>
</section>

	<?php
}
else {
	echo "Ops, ocorreu um erro";
}


 ?>

 <?php 
 include "footer.php";
  ?>