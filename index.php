<?php 
include "header.php";
include "conexao.php";
?>
 <section>


<!--Começo carrocel-->

<div class="container">
<p>&nbsp;</p>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 banner" src="img/banner.jpg" alt="Primeiro slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 banner" src="img/banner2.jpg" alt="Segundo slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 banner" src="img/banner3.jpg" alt="Terceiro slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 banner" src="img/banner4.jpg" alt="Quarto slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 banner" src="img/banner5.jpg" alt="Quinto slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Proximo</span>
  </a>
</div>
</div>

<!--fim carrocel-->



 
 <?php 
$sql = "SELECT * FROM produto order by id desc limit 3";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		?>


<p>&nbsp;</p>
<div class="card col-md-3">
  <img class="card-img-top" src="img/produtos/<?php echo $row['foto']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['nome']; ?></h5>
    <p class="card-text h6">R$: <?php echo $row['preco']; ?></p>
    <a href="produto.php?id=<?php echo $row['id'];?>" class="btn btn-dark">Ver mais</a>
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
</div>
</div>


 </section>

<?php include "footer.php"; ?>





