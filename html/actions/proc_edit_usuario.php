<?php

// Conexão com banco de dados
require_once __DIR__ . '/../includes/connect_db.php';

$id = mysqli_escape_string($connect, $_POST['id']);
$login = mysqli_escape_string($connect, $_POST['login']);
$username = mysqli_escape_string($connect, $_POST['username']);
$senha = mysqli_escape_string($connect, $_POST['senha']);
$cpf = mysqli_escape_string($connect, $_POST['cpf']);
$address = mysqli_escape_string($connect, $_POST['address']);
$class = mysqli_escape_string($connect, $_POST['class']);
$registration_number = mysqli_escape_string($connect, $_POST['registration_number']);

$sql = "UPDATE users SET login='$login', username='$username', senha='$senha', cpf='$cpf', address='$address', class='$class', registration_number='$registration_number', modified=NOW() WHERE id='$id';";
mysqli_query($connect, $sql);

if(mysqli_affected_rows($connect)){
  echo "Concluído!";
} else{
  echo "Erro: " . mysqli_connect_error();
}

mysqli_close($connect);

?>

