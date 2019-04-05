<?php
	$Nome=$_POST["nome"];
	$idade=$_POST["Idade"];
	$db= new mysqli ("localhost","root","","Escola" );//conexão
	if($db->connect_error>0)
		die ("Erro de conexão");
	else
	{
		$sql="insert into Alunos (nome,idade) values ('$Nome',$idade)";
		if(!$result=$db->query($sql)) 
			die ("Erro sql");
		else
			echo"Informação inserida";
			
	}
	$db->close(); //fecha
	
?>