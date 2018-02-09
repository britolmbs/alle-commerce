<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "alle-commercer";

// Cria a conexão
$conn = new mysqli($servename, $username, $password, $dbname);
// Checar conexão
if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
}
?>