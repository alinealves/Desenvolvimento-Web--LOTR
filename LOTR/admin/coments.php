<?php
 
include "../conexao.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type" /> 
		<title> Lord of the Rings and The Hobbit</title>
		<style type="text/css">
	
			#pag{
				width:100%;
				height:100%;
				background-image:url('img/mordor.jpg') ;
				border-radius: 10px 10px 10px 10px ;
				background-size:100% 100%;
			}
			#container{
				width:950px;
				height:100%;
				margin:auto;
				border:1px solid black;
				box-shadow: 2px 0 3px #000,  -2px 0 3px #000;
				border-radius:10px;
				background:white;
			}
			#topo{
				width:950px;
				height: 100px;
				margin:auto;
				background-image:url('img/ring.jpg');
				background-size:100% 100px;
				background-repeat: no-repeat;
				box-shadow: 2px 0 3px #000,  -2px 0 3px #000;
				border-radius: 10px 10px 0px 0px ;
				
			}
			#menu{
				height:35px;
				width:950px;
				float:left;
				background:silver;
				display:inline;
				
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
				overflow: scroll;
				
							
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
				margin-bottom:900px;
				color:black;
			}
			#menu ul li{
				list-style:none;
				display:inline;
				margin-left:15px;
			}
			#menu ul li:hover{
				color:#CCCCCC;
				background-color:#797979;
			}
			a{
				text-decoration: none;
				color:black;
			}
			#new{
				width:auto;
				height:auto;
				float:left;
				margin-top:50px;
				
			}		
			#img{
				width:250px;
				height:250px;
				background-image:url('img/frodo.jpg');
				background-size: 250px 250px;
				float:left;
				margin-top:50px;
				
			}
			h3{
				position:relative;
				top:30px;
				left:50px;
			}
			#newsletter{
			heigth:auto;
			width:190px;
			position:relative;
			margin-left:1130px;
			border:red dashed 1px;
			}
			#coment{
			heigth:30px;
			width:50px;
			margin-top: 10px;
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