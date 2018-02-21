<?php 
include "header.php";
include "conexao.php";
 ?>

<?php
include "conexao.php";
$busca = $_POST['chave'];

$sql = "SELECT * FROM produto WHERE UPPER (chave) = UPPER('$busca')";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		?>
		<section class="container">
		<p>&nbsp;</p>
		<div class="row">
<div class="card col-md-3">
  <img class="produto card-img-top" src="img/produtos/<?php echo $row['foto']; ?>" alt="Card image cap"></p>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['nome']; ?></h5>
    <p class="card-text h6">R$: <?php echo $row['preco']; ?></p>
    <a href="produto.php?id=<?php echo $row['id'];?>" class="btn btn-secondary">Ver mais</a>
    </div>
  </div>
  </div>
  </div>
  </section>
		<?php 
	}
}
else{
?>
<div class="container">
  <p class="h3">Produto não encontrado!</p>
  <a href="index.php" class="btn btn-secondary">Voltar</a>
</div>
<?php 
}
$conn->close();
?>

<?php include "footer.php"; ?>