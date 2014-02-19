<?php
include "conexao.php";
$idnot = (int)$_POST['id_noticia'];
$autor = $_POST['autor'];
$comentario = $_POST['comentario'];

	$inserir = "INSERT INTO comentario(comentario, autor, id_not) VALUES ('".$comentario."', '".$autor."', '".$idnot."')";
	$inserindo = mysql_query($inserir);
	
if ($inserindo){
	echo "<script language='javascript' type='text/javascript'>alert('Comentado com sucesso');
  		window.location.href='coments.php?id=".$idnot."';</script>";
  
}else{
	echo "<script language='javascript' type='text/javascript'>alert('Está morto, Jim');
		window.location.href='coments.php?id=".$idnot."';</script>";

}

  
		
?>
