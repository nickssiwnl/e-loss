<?php

$host = "e_loss.mysql.dbaas.com.br";
$user = "e_loss";
$pass = "Tcc2024#";
$bd = "e_loss";

$conn = mysqli_connect($host, $user, $pass, $bd);

if ($conn == false)
{
    echo("Falha na conexão: " . mysqli_connect_error());
}

    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $novasenha = mysqli_real_escape_string($conn, $_GET['senha']);
    

    // Executa a instrução SELECT
    $sql = "UPDATE usuario SET senha = '$novasenha' WHERE email = '$email'";
    $resultado = mysqli_query($conn, $sql);
        // Verifica se a instrução SELECT retornou registros
    if (($resultado) && (mysqli_affected_rows($conn) > 0))
    {
		echo "Senha Alterada com sucesso";
       header("location:usuario.html");
    } 
    else 
    {
        echo "Email Inexistente ou Senha já Existente";
    }

    mysqli_close($conn);
?>