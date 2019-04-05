<?php
$totcalunas=3;
$totlinhas=3;
$cont=0;
echo "<table border='1'>";//inicia tabelas
for ($l=0;$l<$totlinhas;$l++){//criar linha
	echo "<tr>";
		for ($c=0;$c<$totcalunas;$c++){
	echo "<td>";
	$cont++;
	if(($cont%2)==1){
	echo "<img src='sad.png' width='200' height='200'>";
	}
	else{
		echo "<img src='sorriso1.jpg' width='200' height='200'>";
	}
	echo "</td>"; //cria coluna
	
	}
	
}
?>	