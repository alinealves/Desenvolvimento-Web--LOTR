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
	<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Aline",
			staffid : "991234"
		}
	});
</script>
		<title> Adicionar notícia</title>
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
			top:100px;
			left:70px;
			width:100%;
			height:778px;
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
					<li><a href="noticias.php" id="link">Voltar</a></li>
					<li><a href="admin.php" id="link">Área de administração</a></li>
				</ul>
			</div>
			
			<div id="opcoes">
				<h2>Adicionar notícia</h2>
					<form action="addnot.php" method="POST">
					Título: <input type="text" name="titulo"/>
					<textarea name="noticia" style="width:50%"></textarea></br>
					</form>
			</div>
			<div id="rodape">
				<strong>Created by Aline Alves</strong>
			</div>
		</div>
	</div>
	</body>
</html>
<?php } ?>