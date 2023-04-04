<?php

require 'conexao.php';

$id           = isset($_POST['id'])           ? $_POST['id']           : 0;
$usuario      = isset($_POST['usuario'])      ? $_POST['usuario']      : 0;
$senha        = isset($_POST['senha'])        ? $_POST['senha']        : 0;
$email        = isset($_POST['email'])        ? $_POST['email']        : 0;
$matricula    = isset($_POST['matricula'])    ? $_POST['matricula']    : 0;
$update       = isset($_POST['update'])       ? $_POST['update']       : 0;
$delete       = isset($_POST['delete'])       ? $_POST['delete']       : 0;

echo $usuario . $senha . $email . $matricula;

if ($delete) {
    $sql = "DELETE FROM `profs` WHERE id=?";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    echo 'Registro deletado com sucesso!';
} else {
    $sql = "UPDATE `profs` SET `usuario`=?,`senha`=?,`email`=?,`matricula`=? WHERE id=?";
    $query = $conn->prepare($sql);
    $query->execute([$usuario, $senha, $email, $matricula, $id]);
    echo 'Registro atualizado com sucesso!';
}

include('admin.php')

?>