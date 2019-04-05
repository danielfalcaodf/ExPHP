<?php
$totcalunas=20;
$totlinhas=30;
echo "<table border='1'>";//inicia tabelas
for ($l=0;$l<$totlinhas;$l++){//criar linha
	echo "<tr>";
	for ($c=0;$c<$totcalunas;$c++){
	echo "<td>".$l.",".$c."</td>"; //cria coluna
	}
echo"</tr>";
}
echo "</table>";
?>