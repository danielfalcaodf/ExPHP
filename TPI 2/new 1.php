<?php
	$coluna=5;
	$linha=4;
	$c=0;
echo "<table  border='1'>";
for ($l=0;$l<$linha;$l++)
{
	echo "<tr>";
		for ($c1=0;$c1<$coluna;$c1++)
		{
			$c++;
			echo "<td>";
			
			if ($c1==0|| $c1==4	 ){
			echo "<img src='sad.png' width='200' height='200'>";
			}
			else if ($l==0 ||$l==3){
			echo "<img src='sad.png' width='200' height='200'>";		
		}
				
			
			
				echo"</td>";
			
		}
	
		echo"</tr>";
	}
	
?>