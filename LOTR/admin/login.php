<html>
	<title>Verificando login</title>
<?php

include "../conexao.php";

$login=$_POST['login'];
$senha=$_POST['senha'];

$sql = "Select * from user where login = '".$login."' and senha = '".$senha."'";

$query = mysql_query($sql);

$consulta = mysql_num_rows($query);

if($consulta){
	session_start(); 
	$_SESSION['login']=$login;
	header("Location:admin.php");
}else{  
	header("Location: login.php");
}

mysql_close($conex);
?>
</html>