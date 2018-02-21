<?php 
include "header.php"; 
?>

<section>
<div class="container">
<div class="row text-center">

<?php
$id = $_GET['id'];
include 'conexao.php';

$sql = "SELECT * FROM produto WHERE (id)=('$id') ";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
?>

		<center><div class='card-body col-md-4 col-lg-4'>
		<img src=img/produtos/<?php echo $row['foto'];?>>
		<div class='card-body text-center'>
		<p class="h5"> Nome: <?php echo $row['nome'];?></p>
		<p class="h6">Descrição:<?php echo $row['descricao'];?></p>
		<p class='h5'>Preço: <?php echo $row['preco'];?></p>
		 <a href="#" class="btn btn-dark">Comprar</a>
		</div>
		</div>
		</center>
		</div>
		</div>
	

<?php
	}
}
else{
	echo "0 resultados";
}
$conn->close();
?>

</section>
</div>
</div>

<?php 
include "footer.php";
 ?>