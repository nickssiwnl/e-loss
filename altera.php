<?php

$host = "e_loss.mysql.dbaas.com.br";
$user = "e_loss";
$pass = "Tcc2024#";
$bd = "e_loss";

$conn = mysqli_connect($host, $user, $pass, $bd);

if (!$conn)
{
    echo("Falha na conexão: " . mysqli_connect_error());
}

$senha = mysqli_real_escape_string($conn, $_GET['idsenha']);
$data = mysqli_real_escape_string($conn, $_GET['data']);
$hora = mysqli_real_escape_string($conn, $_GET['hora']);

$sql = "UPDATE trava SET data ='$data', hora = '$hora'  =  WHERE idsenha = '$senha'";

if (mysqli_query($conn, $sql))
{
    echo "Registro atualizado com sucesso!";
}
else 
{
    "Erro ao atualizar registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>