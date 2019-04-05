<?php
$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$VD=$_POST["VD"];
$VP=$_POST["VP"];
$calc;

$calc=($VP*100)/$VD;

$DB=new mysqli("localhost","root","","pagamento");

if($DB->connect_error>0)die("erro de conexão");
else
{
	$sql="insert into Cliente (nome,cpf,valordivida,valorpago,porc)values ('$nome','$cpf',$VD,$VP,$calc)";
	if(!$result=$DB->query($sql))die("erro inserção");
	else
		echo"informação inserida";
}
$DB->close();
?>