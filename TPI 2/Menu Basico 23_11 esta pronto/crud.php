<?php
	$acao = $_POST["acao"];
	echo $acao;
	if ($acao=="cadastrar") header('Location:cad.php');
	
	else if ($acao=="consultar") header('Location:cons.php');
	
	else if ($acao=="alterar") header('Location:alt.php');
	
	else if ($acao=="excluir") header('Location:Excluir.php');
	
			
	
	
?>