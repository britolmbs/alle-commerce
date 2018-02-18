<?php 
include"header.php";
 ?>



<?php
session_start();
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cliente WHERE (email)=('$email') AND (senha)=('$senha')";
$result = $conn->query($sql);

if($result->num_rows>0){
	$_SESSION['logado'] = 1;
	$_SESSION['email'] = $email;

	while($row = $result->fetch_assoc()){
		?>
<div class="container">
<section>
  
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['nome'];?></h5>
    <h6 class="card-subtitle mb-2">Seja Bem Vindo ao All E-Commerce</h6>
    <p class="card-text"></p>
    <a href="entrega.php" class="card-link btn btn-secondary">Mudar Local de entrega</a>
    <a href="index.php" class="card-link btn btn-secondary">Compras</a>
  </div>
</div>
</div>

</section>
		<?php 
	}

}
else{
HEADER('location: login.php');
}
$conn->close();
?>