<?php
 
include "conexao.php";
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];

$inserir = "INSERT INTO faleconosco (email, nome, mensagem) values('$email','$nome','$assunto');";
$exec    = mysql_query($inserir);
	if ($exec){
	echo "<script language='javascript' type='text/javascript'>alert('Inserido com sucesso');
  		window.location.href='index.php';</script>";
  
}else{
	echo "<script language='javascript' type='text/javascript'>alert('Está morto, Jim. Ocorreu um erro!');
		window.location.href='index.php';</script>";
}




?>