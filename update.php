<?php
$date=$_POST['date'];
$emission=$_POST['emission'];
$guest=$_POST['guest'];
$theme=$_POST['theme'];

echo $emission,$date,$guest,$theme;

$codesql=("update emission set invit_em='$guest', theme_em='$theme', date_next_em='$date' where id_em=$emission");

$connexion=mysql_connect("localhost","root","kja5s6ti") or die(mysql_error($connexion));
mysql_select_db("mobile",$connexion)or die(mysql_error($connexion));	
$requete=mysql_query($codesql)or die(mysql_error($connexion));		
header('location:index.php');
?>