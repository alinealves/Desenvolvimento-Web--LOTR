<?php
$conex=mysql_connect("localhost","root","aline");
if(!$conex)
	die("Problema".mysql_error());

$schema=mysql_select_db("site",$conex);
if(!$schema)
	die("Problema".mysql_error());
?>