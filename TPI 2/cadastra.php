<?php
$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$salario=$_POST["salario"];
$db=new mysqli("localhost","root","","EmpresaY");
if ($db->connect_error>0)die ("erro de connect");
else{
$sql="insert into funcionarios (nome,cpf,salario)values('$nome','$cpf',$salario)";
if(!$result=$db->query($sql)) die("erro inserção");
else
	echo "inserido com sucesso!";
}
$db->close();
?>
