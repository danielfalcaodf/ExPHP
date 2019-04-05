<?php

$cpf=$_POST["cpf1"];

$db=new mysqli("localhost","root","","Menu");

if($db->connect_error>0) die ("erro...");
else
	{
			$sql="select * from Cadastro where cpf='$cpf'";
			if(!$result=$db->query($sql)) die("erro..");	
			else
			{
				
				$row=$result->fetch_assoc();
				if(!$row) echo "informação não encontrada";
	
					$db->close();
				
			}
			
	}
?>
<form method='POST' action='alt1.php'>
CPF: 
<input type='text' name="cpf" value="<?php echo $row['cpf']; ?>" size='20'> <br>
<input type="hidden" value="<?php echo $row['cpf']; ?>" name="cpf1" />
Nome: 
<input type='text' name="nome" value="<?php echo $row['nome']; ?>" size='35'><br>
RG:
<input type='text' name="rg" value="<?php echo $row['rg']; ?>" size='9' ><br>
email: 
<input type='text' name="email" value="<?php echo $row['email']; ?>" size='45'><br>
Idade: 
<input type='number' name="idade" value="<?php echo $row['idade']; ?>" size='3'><br>
<input type='submit' value='enviar'>
</form>
