<?php

$cpf=$_POST["cpf"];

$db=new mysqli("localhost","root","","Menu");

if($db->connect_error>0) die ("erro...");
else
	{
			$sql="delete from Cadastro where cpf='$cpf'";
			if(!$result=$db->query($sql)) die("erro..");	
			else
			{					
				echo "Ecluido";
			}
			$db->close();
	}
?>