<?php
	$nome=$_POST["nome"];
	$rg=$_POST["rg"];
	$cpf=$_POST["cpf"];
	$email=$_POST["email"];
	$idade=$_POST["idade"];
	
	$db=new mysqli("localhost","root","","Menu");
	
	if($db->connect_error>0) die ("erro...");
	else
	{
			$sql="insert into Cadastro (nome,rg,cpf, email, idade) values ('$nome','$rg','$cpf', '$email', $idade)";
			if(!$result=$db->query($sql)) die("erro sql");	
			else
			{			
				echo "Cadastrado com sucesso!";				
			}
	}
	$db->close();
	
?>