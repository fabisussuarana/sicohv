<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

require('conexao.php');

// sql pra selecionar o usuario e senha
$sql = "SELECT * FROM profs WHERE usuario = '$usuario' AND senha = '$senha';";

$result = $conn->query($sql);
$user = $result->fetch();

// Verifica se tem uma ou mais linhas na matriz
if ($user){
    include 'portal-professor.php';
}
else{
    echo '<span style="color: white">Erro, seu usuário ou senha está incorreto!</span>';
    include('formulario.php');
}

?>