<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>All E-Commerce</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="estilo/estilo.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<header class="header">
		<div class="container">

<div class="row">
<div class="col-md-3">
	<img class="img" src="img/banner.jpg">
</div>
<div class="col-md-5">
			<form method="POST" action="busca.php" >
		<input class="form-control" type="search" name="chave" placeholder="Pesquisa">    
</div>
<div class="col-md-1">
	<button class="btn btn-secondary my-2 my-sm-0">Pesquisar</button>
     </form>
</div>
<div class="col-md-3">
	<a class="btn btn-info" href="cadastro.php">Cadastre-se aqui</a>
	<a class="btn btn-info" href="login.php">Login</a>
</div>
</div>
</div>
<!--Começo Menu-->


<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categoria.php?cat=celular">Celulares</a></li>
         <li class="nav-item">
         <a class="nav-link" href="categoria.php?cat=roupa">Roupas</a></li>
          <li class="nav-item">
          <a class="nav-link" href="categoria.php?cat=eletronico">Eletrônicos</a></li>
           <li class="nav-item">
           <a class="nav-link" href="categoria.php?cat=game">Games</a></li>
            <li class="nav-item">
           <a class="nav-link" href="categoria.php?cat=livro">Livros</a></li>
      <li class="nav-item">
           <a class="nav-link" href="categoria.php?cat=informatica">Informática</a>
      </li>
      </ul>
      </div>
      </nav>
      </div>
      </header>

<!--Fim menu-->

		
	