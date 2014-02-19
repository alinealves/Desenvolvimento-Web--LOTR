<?php

session_start();
if($_SESSION['login']==" " || $_SESSION['login']=="1"  ){
	header("Location: login.php");
} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
		<title> Area administrativa</title>
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
			
			#rodape{
				height:30px;
				width:100%;
				background:gray;
				clear: both;
				border-radius: 0px 0px 5px 5px ;
			}
			#corpo{
				height:775px;
				width:100%;	
							
			}
			.rodape{
				position:relative;
				top:10px;
				left:2px;
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
		
			#user{
				width:100px;
				height:100px;
				background-image: url('img/user.png');
				background-size:100px 100px;
				background-repeat: no-repeat;
				background-position: center;
				border: 1px solid #000000;
				margin-top:60px;
				margin-left:40px;
				float:left;
				border-radius: 10px;

				
			}
			#news{
				width:100px;
				height: 100px;
				background-image: url('img/news.jpg');
				background-size:100px 100px;
				background-repeat:no-repeat;
				background-position: center;
				margin-top:60px;
				margin-left:40px;
				float:left;
				border: 1px solid #000000;
				border-radius: 10px;
				
			}
			#midia{
				background-image:url('img/midia2.jpg');
				width: 100px;
				height: 100px;
				background-size:90px 90px;
				background-repeat:no-repeat;
				background-position:center;
				margin-top:60px;
				margin-left:40px;
				margin-right:50px;
				float:left;
				border: 1px solid #000000;
				border-radius: 10px;
 
    			
			}
			#menu1{
				background-image:url('img/menu.jpg');
				background-size:90px 90px;
				background-repeat:no-repeat;
				background-position:center;
				width:100px;
				height:100px;
				margin-top:60px;
				margin-right:640px;
				float:right;
				border: 1px solid #000000;
				border-radius: 10px;
    			
			}
			#configuracoes{
				background-image:url('img/config.jpg');
				background-size:90px 90px;
				background-repeat:no-repeat;
				background-position:center;
				width:100px;
				height:100px;
				margin-top:-100px;
				margin-right:490px;
				float:right;
				border: 1px solid #000000;
				border-radius: 10px;
			}
			#newletter{
				background-image:url('img/carta.jpg');
				background-size:90px 90px;
				background-repeat:no-repeat;
				background-position:center;
				width:100px;
				height:100px;
				margin-top:-105px;
				margin-left:40px;
				float:left;
				border: 1px solid #000000;
				border-radius: 10px;
				cursor:hand;
				
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
				</ul>
			</div>
			<div id="corpo">
			<h3>Administrador</h3>
				<div id="user" onclick="window.location='exibirmensagem.php'">
					<strong class="submenu">Usuarios</strong>
					
				</div>
				<div id="news" onclick="window.location='noticias.php'">
					<strong class="submenu" > Noticias </a></strong>
				</div>
				<div id="midia">
					<strong class="submenu"> Midias </strong>
				</div>
				<div id="menu1">
					<strong class="submenu">Menu</strong>
				</div>
				<div id="configuracoes">
					<strong> Configuracoes</strong>
				</div>
				<div id="newletter" onclick="window.location='email.php'">
					 <strong class="submenu"> Newsletter</strong>
						
					</div>		
			</div>
			
				
			</div>		
			<div id="rodape">
				<strong class="rodape">Created by Aline Alves</strong>
			</div>
		</div>
	</div>
		</body>
	</html>
<?php } ?>