<?php

require 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];

$sql = "INSERT INTO profs(usuario, senha, email, matricula) VALUES ('$usuario', '$senha', '$email', '$matricula')";
$conn->query($sql);
echo '<span style="color: white">Cadastro realizado com sucesso!</span>';

include('formulario.php')

?>