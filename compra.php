<?php 
include 'header.php';
$id = $_GET['id'];
session_start();


 ?>
<section>
<div class="container">
	<p class="h2 text-center">Confirmar a compra</p><hr />

	<div class="row">
	<?php 
	$sql = "SELECT * FROM produto WHERE (id)=('$id') ";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
?>

		<div class='card-body col-md-4 col-lg-4'>
		<div class='card-body text-center'>
		<p class="h5"> Nome: <?php echo $row['nome'];?></p>


		
		</div>
		</div>
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





 <?php 
include "footer.php";
  ?>