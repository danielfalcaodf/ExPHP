<?php
	$Nome=$_POST["nome"];
	$Nota1=$_POST["NotaAt"];
	$Nota2=$_POST["NotaAv"];
	
	$db= new mysqli ("localhost","root","","Escola" );//conexão
	if($db->connect_error>0)
		die ("Erro de conexão");
	else
	{
		$sql="insert into Alunos (nome, nota1, nota2) values ('$Nome',$nota1,$nota2)";
		if(!$result=$db->query($sql)) 
			die ("Erro sql");
		else
			echo"Informação inserida";
		 $media=($Nota1+$Nota2)/2; 
		 if($media>6)
		 {	echo "Resultado é "+$media;
			 echo "Aprovado";
		 }
		 else if($media<4)
		 {	echo "Resultado é "+$media;
			 echo "Reprovado";
		 }
		 else if($media>=4 && $media<6)
		 {	echo "Resultado é "+$media;
			 echo "Aprovado";
		 }
			
	}
	$db->close(); //fecha
	
?>