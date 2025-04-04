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

$id = mysqli_real_escape_string($conn, $_GET['idsenha']);

		$sql = "DELETE FROM trava WHERE idesnha=".$id;
		$remove = mysqli_query($conn, $sql);
		
        if ($remove == false) 
        {
			echo "Problemas na operação. Registro não excluido";
        }
        else
        {
			echo "Registro excluido com sucesso";
        }    
        mysqli_close($conn)
?>
