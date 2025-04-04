<?php
   $host = "e_loss.mysql.dbaas.com.br";
   $user = "e_loss"; 
   $pass = "Tcc2024#";
   $bd = "e_loss";  
   
   $conn = mysqli_connect($host, $user, $pass, $bd);
   
   if ($conn == false) 
   { 
   die("Falha na conexão: " . mysqli_connect_error());
   } 
   $data = date("Y-m-d"); $hora = date("H:i:s"); 
   $sql = "INSERT INTO trava (data, hora) VALUES ('$data', '$hora')";
   if (mysqli_query($conn, $sql))
	   { echo "Data e hora gravadas com sucesso"; }
   else

	   { echo "Erro ao gravar dados: " . mysqli_error($conn); } 

   mysqli_close($conn); 
?>