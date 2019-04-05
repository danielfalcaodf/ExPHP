<?php
$totcalunas=4;
$totlinhas=4;
$cont=0;
echo "<table border='1'>";//inicia tabelas
for ($l=0;$l<$totlinhas;$l++){//criar linha
	echo "<tr>";
		for ($c=0;$c<$totcalunas;$c++){
			$cont++;
	echo "<td>";
			if($c==$l && ($cont%2)==0){
	echo "<img src='sad.png' width='200' height='200'>";
	}
	else if ($c==$l) {
		echo "<img src='sorriso1.jpg' width='200' height='200'>";
	}

	echo "</td>"; //cria coluna
	}
	echo "</tr>";
	}
?>