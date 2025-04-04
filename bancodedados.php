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
$query = "SELECT * FROM trava";
$res = mysqli_query($conn,"SELECT * FROM trava");

if(mysqli_num_rows($res) > 0)
{
    echo "Tabela com registros:";
}
else
{
    echo "Sem dados para exibir";
}
mysqli_close($conn); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="cssbanco.css">
</head>
<body backgraund="back.png">
    <div class="header">
        <span class="username">Usuário</span>
    </div>
    
    <div class="container">
        <h1>Banco de Dados</h1>
        
        <table>
            <tr>
                <th>ID</th>
                <th>DATA</th>
                <th>HORA</th>
            </tr>
   
        
       
      <?php
        while ($dados=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            echo "<td>".$dados['idsenha']."</td>";
            echo "<td>".$dados['data']."</td>";
            echo "<td>".$dados['hora']."</td>";
            echo "</tr>";
        }
    ?>
          </table>
        <div class="buttons">
            <button onclick="window.location.href='amenu.html';"> Voltar ao Menu </button>
			</div>
			<br>
			<br>
           
        </div>
    
    </div>

</body>
</html>