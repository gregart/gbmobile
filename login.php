<?
$connexion=mysql_connect("localhost","root","kja5s6ti") or die(mysql_error($connexion));
mysql_select_db("mobile",$connexion) or die(mysql_error($connexion));

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) 
	{
extract($_POST);
$codesql = "select password from user where login='".$login."'";
$requete = mysql_query($codesql) or die('Erreur SQL !<br>'.$codesql.'<br>'.mysql_error());
$data = mysql_fetch_assoc($requete);
	if($data['password'] != $password) 
	{
	   	echo '<p>Mauvais login ou password. Merci de recommencer</p>';
	    include('page_login.php');
	    exit;
	}
	else 
	  	{
		    session_start();
		    $_SESSION['login'] = $_POST['login'];
		    setcookie("login",$_POST['login'],time()+24*3600);
		    echo '<meta http-equiv="refresh" content="0;URL=page_update.php">';  
	  	}    
	}
else 
	{
	echo '<p>Vous avez oublié de remplir un champ.</p>';
	include('page_login.php');
	exit;
	}
?>
