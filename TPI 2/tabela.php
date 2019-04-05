<?php

echo "<table border='2'>";
echo "<h1>declarção de variaveis: o tipo de variavel esta associado ao canteudo que é atribuido.<h1>";
for($i=0;$i<10;$i++){ 

echo "<tr> <td> linha".($i+1).",coluna </td>" ;
	for($c=1;$c<10;$c++){
	echo "<td> linha".($i+1).",coluna". ($c+1)."</td>";
	}
echo "</tr>";

}
echo "</table>";


?>