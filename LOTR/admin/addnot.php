<?php

include "../conexao.php";

$titulo=$_POST['titulo'];
$noticias=$_POST['noticia'];


$inserir="insert into noticias (noticias, titulo) values ('$noticias', '$titulo');";
$inserindo = mysql_query($inserir);

if(!$inserindo){ 
	echo"<script language='javascript' type='text/javascript'>alert('Erro ao inserir not�cia');
							window.location.href='editarnot.php';
							</script>";
}else{
	echo"<script language='javascript' type='text/javascript'>alert('Not�cia inserida com sucesso');
							window.location.href='noticias.php';
							</script>";
}


?>
 
 

