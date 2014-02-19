<?php
session_start();
if($_SESSION['login']==" " || $_SESSION['login']=="1"  ){
	header("Location: ../login.html");
} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Visualização de Notícias</title>
		
		
		<style type="text/css">
	
			#pag{
				width:100%;
				height:100%;
				background-image:url('../img/mordor.jpg') ;
				border-radius: 10px 10px 10px 10px ;
				background-size:100% 100%;
			}
			#container{
				width:920px;
				height:925px;
				margin:auto;
				border:1px solid black;
				box-shadow: 2px 0 3px #000,  -2px 0 3px #000;
				border-radius:10px;
				background:white;
			}
			#topo{
				width:920px;
				height: 100px;
				margin:auto;
				background-image:url('../img/ring.jpg');
				background-size:100% 100px;
				background-repeat: no-repeat;
				box-shadow: 2px 0 3px #000,  -2px 0 3px #000;
				border-radius: 10px 10px 0px 0px ;
				
			}
			#rodape{
				height:30px;
				width:100%;
				background:gray;
				clear: both;
				border-radius: 0px 0px 5px 5px ;
				
				
			}
			#menu{
				height:35px;
				width:920px;
				float:left;
				background:silver;
				display:inline;
				
			}
			#link{
				text-decoration: none;
				float:right;
				margin-right:50px;
				color:black;
			}
			#menu ul li{
				list-style:none;
				display:inline;
				margin-left:15px;
			}
		
			#link{
				text-decoration: none;
				float:right;
				margin-right:50px;
				color:black;
			}
			
			}
			a{
				text-decoration: none;
				color:black;
			}
			
			h3{
				position:relative;
				top:30px;
				left:50px;
			}
			.back{
			position:relative;
			left:200px;
			top:300px;
			}
			
			#opcoes{
			position:relative;
			width:100%;
			height:765px;
			margin-top:30px;
			
			}
			</style>
		
	</head>
	<body>
	<div id="pag">
		<div id="container">
			<div id="topo"> </div>
			<div id="menu">
				<ul>
					<li><a href="sair.php" id="link">Sair</a></li>
					<li><a href="admin.php" id="link">Área de administração</a></li>
					
				</ul>
			</div>
			
			<div id="opcoes">
			<?php
					include "../conexao.php";
					$msg="select * from faleconosco";
					$consultando=mysql_query($msg);
					$conf_msg=mysql_num_rows($consultando);
						if ($conf_msg==0){
							echo "Nenhuma mensagem cadastrada";
						} else{
							echo "<table border='2'><tr align='center'><td><b>Nome</b></td><td><b>Email</b></td><td><b>Mensagem</b></td></tr>";
						while($linha = mysql_fetch_assoc($consultando)){
						echo "<tr align='center'><td>".$linha['nome']."</td><td>".$linha['email']."</td><td>".$linha['mensagem']."</td></tr>";
						}
						echo "</table>";
						}
			?>
			</div>
			<div id="rodape">
				<strong>Created by Aline Alves</strong>
			</div>
		</div>
	</div>
	</body>
</html>
<?php } ?>