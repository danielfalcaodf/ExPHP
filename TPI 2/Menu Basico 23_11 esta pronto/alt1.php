<?php
	$nome=$_POST['nome'];
	$rg=$_POST['rg'];
	$email=$_POST['email'];
	$idade=$_POST['idade'];
	$cpfnew=$_POST['cpf'];
	$cpf=$_POST['cpf1'];
	$db=new mysqli("localhost","root","","Menu");
	
	if($db->connect_error>0) die ("erro...");
	else
	{
			$sql="update Cadastro set nome='$nome', cpf='$cpfnew', rg='$rg', email='$email', idade=$idade where cpf ='$cpf'";
			if(!$result=$db->query($sql)) die("erro sql");	
			print "Editado com sucesso";
	}
	$db->close();
	
?>