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
  		<link rel="stylesheet" href="/resources/demos/style.css" />
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
					<li> <a href="#"> Home</li></a>
					<li> <a href="#">Menu</li></a>
					<li> <a href="#">Visualizar</li></a>
					<li><div id="fale" title="Fale Conosco">
						<form action="mensagem.php" method="POST">
	  						Nome: <input type="text" name="nome" /></br>
	  						E-mail:<input type="text" name="email"/></br>
	  						Comentário:<textarea rows="10" cols="25" name="assunto"></textarea>
	  						 <input type="submit" value="Enviar!"/>
						</form>
					</div> </li>
					<li id="open"><a href="#">Fale Conosco</a></li>
						<li><div id="quemsomos" title="Quem somos"> 
							 Olá, eu sou Aline Alves. E nós somos pobres alunos sobreviventes que chegaram ao 4º ano e estão na luta 
							 para concluir o Téc. Int.
						</div> </li>
					<li id="open1"><a href="#">Quem Somos</a></li>
					<li><a href="admin/login.php" id="link">Login</a></li>
				</ul>
			</div>
			<div id="corpo">
				<h3>Notícias que nem Frodo Baggins pode deixar de ler :3</h3>
				<div id="newsletter">
					<form action="nl.php" method="post">
						Cadastre seu email para receber nossas atualizações<br/>
						Email <input type="text" size="20" name="email"/>
							  <input type="submit" value="Ok!"/>
					</form>
				</div>	
				<div id="img">
				</div>
					 <?php 
						$not="select id, titulo, noticias from noticias";
						$query=mysql_query($not);
						$exibir=mysql_num_rows($query);
							while($linha = mysql_fetch_assoc($query)){ 
							$id=$linha['id'];
					?>
							<div id="new">
								<?php 
								echo "<strong><tr align='center'><td>".$linha['titulo']."</td></tr></strong>";
								echo "<tr align='center'><td>".$linha['noticias']."</td></tr>";
								?>
								<a href="coments.php?id=<?php echo $id; ?>">Comentar</a></br>
								<?php
								echo "<hr />";
							} 
									?>
							</div>
			</div>			
			 <div id="rodape">
				<strong>Created by Aline Alves</strong>
			</div>
		</div>
		
	</div>
				
				
			
	
		</body>
	</html>
<?php ?>