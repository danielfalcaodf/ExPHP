<?php
	$db=new mysqli("localhost","root","","escola");
	if($db->connect_error>0)die("erro....");
	else
	{	
				if($acao=$_POST["acao"]=="Consultar")
				{
				$consultar=$_POST["consultar"];
				$acao=$_POST["acao"];
					if($consultar>null)
					{
					$sqli="select totaldeaulas,totaldefaltas,nome,disciplina,frequencia from matricula where matricula=$consultar";
					if(!$result1=$db->query($sqli))die("erro no comando....");
					else
					{	
						
						while($row=$result1->fetch_assoc())
						{
							$n1=$row["totaldeaulas"];
							$n2=$row["totaldefaltas"];
							$calc=$row["frequencia"];
							if($calc>=75 && $calc<=99)
							{
							echo"<b><font face=\"cursive\" size=\"+6\">Nome:",$row["nome"]."<br>","Matricula: $consultar<br>","Disciplina: ",$row["disciplina"]."<br>","Total de aulas: ",$row["totaldeaulas"]."</font><br><b><font face=\"cursive\" size=\"+6\">Total de faltas: ",$row["totaldefaltas"]."<br><font face=\"cursive\" size=\"+6\" color=\"green\">frequencia correta $calc <br></fort>";
						
							
							}
							else if ($calc>=100)
							{
								echo"<b><font face=\"cursive\" size=\"+6\">Nome:",$row["nome"]."<br>","Matricula: $consultar<br>","Disciplina: ",$row["disciplina"]."<br>","Total de aulas: ",$row["totaldeaulas"]."<br>Total de faltas: ",$row["totaldefaltas"]."</font><br><font face=\"cursive\" size=\"+6\" color=\"blue\">Parabens!! $calc de frequencia <br></font></fort>";
						
							}
							else if ($calc<75)
							{
								echo"<b><font face=\"cursive\" size=\"+6\">Nome:",$row["nome"]."<br>","Matricula: $consultar<br>","Disciplina: ",$row["disciplina"]."<br>","Total de aulas: ",$row["totaldeaulas"]."</font><br><b><font face=\"cursive\" size=\"+6\" >Total de faltas: ",$row["totaldefaltas"]."</font><br><font face=\"cursive\" size=\"+6\" color=\"red\">frequencia baixa: ".$calc." <br></fort>";
							}
						}
		
					
					}
						}
				}
				else
				{
				$matricula=$_POST["matricula"];
				$nome=$_POST["nome"];
				$disciplina=$_POST["disciplina"];
				$aulas=$_POST["aulas"];
				$faltas=$_POST["faltas"];
				
				$calc=(($aulas-$faltas)*100)/$aulas;
				
					if($matricula>null)
					{
					$sql="insert into matricula (nome,matricula,disciplina,totaldeaulas,totaldefaltas,frequencia) values ('$nome','$matricula','$disciplina',$aulas,$faltas,$calc)";
					if(!$result=$db->query($sql))die("erro no comando...");
					else
					{
						echo "inserido com sucesso!";
						
					}
					}
				}

		}
	
	$db->close();
?>