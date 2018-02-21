<?php 
include"header.php";
 ?>



<?php
session_start();
include "conexao.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM funcionario WHERE (cpf)=('$cpf') AND (senha)=('$senha')";
$result = $conn->query($sql);

if($result->num_rows>0){
	$_SESSION['logado'] = 1;
	$_SESSION['cpf'] = $cpf;

	while($row = $result->fetch_assoc()){
		?>
<div class="container">
<section>
  
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['nome'];?></h5>
    <h6 class="card-subtitle mb-2">Seja Bem Vindo ao All E-Commerce</h6>
    <h6 class="card-subtitle mb-2"><?php echo $row['cargo'];?> da All E-Commercer</h6>
    <p class="card-text"></p>
    <a href="cadprod.php" class="card-link btn btn-secondary">Cadastrar Produtos</a>
    <a href="atualizaprod.php" class="card-link btn btn-secondary">Atulizar Produtos</a>
    <a href="excluirprod.php" class="card-link btn btn-secondary">Deletar Produto</a>
  </div>
</div>
</div>

</section>
		<?php 
	}

}
else{
HEADER('location: loginfunc.php');
}
$conn->close();
?>



<?php include "footer.php";
 ?>