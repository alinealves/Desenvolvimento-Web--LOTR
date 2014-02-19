<html>
<head><title>NewsLetter</title></head>
<body>
<?php
include "conexao.php";

$email=$_POST['email'];

if($email==""){
?>
<script language='javascript' type='text/javascript'>alert('Insira um email');
						window.location.href='index.php';</script>
<?php
}else{
	$insert="insert into email values  ('$email');";
	$inserindo=mysql_query($insert);
?>
<script language='javascript' type='text/javascript'>alert('Email cadastrado com sucesso.');
								window.location.href='index.php';</script>
<?php
	}
		?>


</body>
</html>