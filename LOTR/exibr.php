<?php
$id=$_GET['id'];
				include "../conexao.php";
				$not="select * from noticias where id='$id'";
						$consultando=mysql_query($not);
						$conf_msg=mysql_num_rows($consultando);
						if(!$consultando){
							echo "Nenhuma notícia cadastrada";
						} else{
							echo "<table border='2'><tr align='center'><td><b>ID</b></td><td><b>Título</b></td><td><b>Notícia</b></td></tr>";
							while($linha = mysql_fetch_array($consultando)){
		
							echo "<tr align='center'><td>".$linha['id']."</td><td>".$linha['titulo']."</td><td>".$linha['noticias']."</td></tr>";
							}
							echo "</table>";
						}
				?>