<?php
$matricula=$_POST["matricula"];
$disciplina=$_POST["disciplina"];
$aulas=$_POST["aulas"];
$faltas=$_POST["faltas"];
if(acao.equals("Consultar"))
{
$consultar=$_POST["consultar"];
$acao=$_POST["acao"];
}
else
{
$matricula=$_POST["matricula"];
$disciplina=$_POST["disciplina"];
$aulas=$_POST["aulas"];
$faltas=$_POST["faltas"];
}
echo $acao;
/*
	$db=new mysqli("localhost","root","","escola1");
	if($db->connect_error>0)die("erro....");
	else
	{
		if($matricula>null)
		{
			$sql="insert into matricula (matricula,disciplina,totaldeaulas,totaldefaltas) values ('$matricula','$disciplina',$aulas,$faltas)";
			if(!$result=$db->query($sql))die("erro....");
			else{
				echo "inserido com sucesso!";
				
			}
		}
		else if($consultar>null)
		{
				$sqli="select*from users";
				if(!$result1=$db->query($sqli))die("erro....");
				else
				{
			while($row=$result1->fetch_assoc())
			{
				echo$row["user name"]."<br>";
			}
			}
		}
	}
	$db->close();*/
?>