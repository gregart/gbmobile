<?php

$login=$_POST['login'];
$password=md5($_POST['password']);
$passadmin=$_POST['passadmin'];


if($login!="" && $_POST['password']!="" && $passadmin=="hdncks")
	{
	$connexion=mysql_connect("localhost","root","kja5s6ti") or die(mysql_error($connexion));
	
	mysql_select_db("mobile",$connexion) or die(mysql_error($connexion));
	
	$requete=mysql_query("insert into user(login,password) values('$login','$password')") or die(mysql_error($connexion));
	
	mysql_close($connexion);
	
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
else
	{
	echo '<meta http-equiv="refresh" content="0;URL=page_signin.php">';
	}
?>	

