<?php

$cpf=$_POST["cpf"];

$db=new mysqli("localhost","root","","Menu");

if($db->connect_error>0) die ("erro...");
else
	{
			$sql="select * from Cadastro where cpf='$cpf'";
			if(!$result=$db->query($sql)) die("erro..");	
			else
			{					
				while(true)
				{
					if($row=$result->fetch_assoc())
					{
						echo "CPF: ";
						echo $row["cpf"]. "<br>";
						echo "Nome: ";
						echo $row["nome"]. "<br>";
						echo "RG: ";
						echo $row["rg"]. "<br>";
						echo "email: ";
						echo $row["email"]. "<br>";
						echo "Idade: ";
						echo $row["idade"]. "<br>";
					}
					else
					{
						echo $row["cpf"]. "<br>";
						break;
					}
					
					
						
				}
			
			}
			$db->close();
	}
?>