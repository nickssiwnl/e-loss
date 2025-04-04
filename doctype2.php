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

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    
    // Executa a instrução SELECT
    $sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
    $resultado = mysqli_query($conn, $sql);
        // Verifica se a instrução SELECT retornou registros
    if (mysqli_num_rows($resultado) > 0)
    {
		echo "Login realizado com sucesso!";
        header("location:amenu.html");
    } 
    else 
    {
        echo "Erro no Login encontrado!";
      header("location:doctype.html");
    }

    mysqli_close($conn);
?>