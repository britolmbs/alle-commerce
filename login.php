<?php 
include "header.php"; 
 ?>

 <section>
 <div class="container">
<p>&nbsp;</p>
<?php session_start(); ?>
 <p class="h3 text-center">Login</p><hr />

 	 <form method="POST" action="perfil.php">
      <div class="form-group">
      <label for="email">Email: </label>
      <input type="email" name="email" class="form-control form-control-lg" />
    </div>
    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" name="senha" class="form-control form-control-lg"></input>
    </div>
      <button type="submit" class="btn btn-secondary btn-lg">Enviar</button>
      
    </form>
 </div>
 
 </section>

 <?php 

 include "footer.php";
  ?>

