<?php

$email = $_POST ["email"];
$senha = $_POST ["senha"];
$nome = $_POST ["nome"];
$host = "e_loss.mysql.dbaas.com.br";
$user = "e_loss";
$pass = "Tcc2024#";
$bd = "e_loss";

$conn = mysqli_connect($host, $user, $pass, $bd);


if (!$conn)
{
    echo("Falha na conexão: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuario (email,senha,nome) VALUES ('$email','$senha','$nome')";

    if(mysqli_query($conn, $sql))
{
    echo" Cadastro realizado com sucesso";
    header("location:doctype.html");
}
    else
{
    echo " Erro! Tente novamente inserir registro: " . mysqli_error($conn);
}
mysqli_close($conn);

?>