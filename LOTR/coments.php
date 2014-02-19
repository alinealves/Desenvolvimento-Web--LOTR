<?php
 
include "conexao.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type" /> 
		<title> Lord of the Rings and The Hobbit</title>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<link rel="stylesheet" href="jquery/jquery-ui.css" />
  		<script src="jquery/jquery-1.9.1.js"></script>
  		<script src="jquery/jquery-ui.js"></script>
		<script>
  		$(function() {
   			 $( "#fale" ).dialog({
      		autoOpen: false,
      		show: {
        	effect: "blind",
        	duration: 1000
      		},
      		hide: {
        	effect: "explode",
        	duration: 1000
      		}
   		 });
 
    		$( "#open" ).click(function() {
      		$( "#fale" ).dialog( "open" );
    	});
 	 });
 	 $(function() {
   			 $( "#quemsomos" ).dialog({
      		autoOpen: false,
      		show: {
        	effect: "blind",
        	duration: 1000
      		},
      		hide: {
        	effect: "explode",
        	duration: 1000
      		}
   		 });
 
    		$( "#open1" ).click(function() {
      		$( "#quemsomos" ).dialog( "open" );
    	});
 	 });
 	 </script>
  		
</head>
<body>
	<div id="pag">
		<div id="container">
			<div id="topo"> </div>
			<div id="menu">
				<ul>
					<li> <a href="index.php"> Home</li></a>
					<li> <a href="#">Menu</li></a>
					<li> <a href="#">Visualizar</li></a>
					<li><div id="fale" title="Fale Conosco">
						<form action="mensagem.php" method="post">
	  						Nome: <input type="text" name="nome" /></br>
	  						E-mail:<input type="text" name="email"/></br>
	  						Comentário:<textarea rows="10" cols="25" name="assunto"></textarea>
	  						 <input type="submit" value="Enviar!"/>
						</form>
					</div> </li>
					<li id="open"><a href="#">Fale Conosco</a></li>
						<li><div id="quemsomos" title="Quem somos"> 
							 Oi, eu sou Aline Alves. E nós somos pobres alunos sobreviventes que chegaram ao 4º ano e estão na luta 
							 para concluir o Téc. Int.
						</div> </li>
					<li id="open1"><a href="#">Quem Somos</a></li>
					<li><a href="login.html" id="link">Login</a></li>
				</ul>
			</div>
			<div id="corpo"> 
			<?php $id = $_GET['id'];
						include "conexao.php";
						$not="select titulo, noticias from noticias where id=".$id."";
						$query=mysql_query($not);
						$exibir=mysql_num_rows($query);
						while($linha = mysql_fetch_assoc($query)){ 
			?>
			<div id="new">
							<?php 
							echo "<strong><tr align='center'><td>".$linha['titulo']."</td></tr></strong>";
							echo "<tr align='center'><td>".$linha['noticias']."</td></tr>";
						}
							?>
							
			</div>
			
			<div id="new1">
			<h2> Comentarios relacionados a essa noticia</h2>
				<?php 
						$com="select autor, comentario from comentario where id_not=".$id."";
						$query=mysql_query($com);
						$exibir=mysql_num_rows($query);
						while($linha = mysql_fetch_assoc($query)){ 
							echo "<strong><tr><td>".$linha['autor']."</td></tr></strong><br />";
							echo "<tr><td>".$linha['comentario']."</td></tr>";
							echo "<hr />";
							}
				?>
			</div>
			
			<div id="form">
				<form action="inserircom.php" method="post" >
					<fieldset>
						<legend>Comente aqui</legend>
						<div class="form">
							<label for="autor"><h3>Autor:</h3></label></br>
							<input type="text"  name="autor" id="autor" />						
						</div>
						<div class="form">
							<label for="comentario"><h3>Comente:</h3></label></br>
							<textarea rows="10" cols="25" name="comentario" id="comentario"></textarea>
							<input type="hidden" name="id_noticia" value="<?php echo $id; ?>" />
						</div>
						<input type="submit" name="submit" class="submit" value="Enviar" />
					</fieldset>
			</form>
			</div>					
			</div>
			<!--<div id="rodape"> <strong>Created by Aline Alves.</strong>
			</div>-->
		</div>
	</div>
</body>
</html>
<?php ?>