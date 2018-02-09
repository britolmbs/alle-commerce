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





		<?php 
	}

}
else{
HEADER('location: login.php');
}
$conn->close();
?>