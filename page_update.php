<?
session_start();
if(!isset($_SESSION['login'])) 
	{
	  echo 'Vous n\'êtes pas autoris´ à acceder à cette zone';
	  include('page_login.php');
	  exit;
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>GB Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jquery.mobile.datebox.min.css" /> 
		
		<!--***3 lignes à changer pour mettre à jour JQM***-->
		<link rel="stylesheet" href="cssperso.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
		<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jquery.mobile.datebox.min.js"></script>
		<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i8n/jquery.mobile.datebox.i8n.en.js"></script>
		<script>
			jQuery.extend(jQuery.mobile.datebox.prototype.options, {
			    'dateFormat': 'DD/MM/YYYY',
			    'headerFormat': 'DD/MM/YYYY'
			});
		</script>
	</head>
	<body> 
		<div data-role="page" data-theme="e" data-content-theme="e">
			<div data-role="header" data-id="myheader" data-position="fixed">
				<h1>Update</h1>
				<a href="index.php" class="ui-btn-right" data-theme="b">Retour</a>
			</div>
		
			<div data-role="content">	
				<h2>Mise A Jour<br/>
				Salut <?php echo $_SESSION['login']; ?>!</h2>
				<fieldset data-role="fieldcontain">
					<form name="formupdate" method="post" action="update.php" enctype="multipart/form-data" data-ajax="false">
						<div data-role="fieldcontain" class="ui-hide-label">
							<label for="emission">Emission</label>
								<select name="emission" id="emission" value="" data-prevent-focus-zoom="true"/>
									<option>Emission</option>   
							    	<?php
							    	session_start();
							    	
							    	$codesql=("select nom_em,id_em from emission order by nom_em");
							    	$connexion=mysql_connect("localhost","root","kja5s6ti") or die(mysql_error($connexion));
							    	mysql_select_db("mobile",$connexion)or die(mysql_error($connexion));	
							    	$requete=mysql_query($codesql)or die(mysql_error($connexion));		
							    	
							    	//if (utilisateur est administrateur)
							    		//{
								    	while ($ligne=mysql_fetch_row($requete))
								    	{
									    	$nom_em = $ligne[0];
									    	$id_em = $ligne[1];
									    	echo "<option value='$id_em'>$nom_em</option>";
								    	}
								    	//}
								    	//else
								    	//{
								    	//	$nom_em = emission du bon anim;
								    	//	$id_em = id de l'emission correspondante;
								    	//	echo "<option value='$id_em'>$nom_em</option>";
								    	//}
							    	
							    	mysql_close($connexion)
							    	?>
							 	</select>
						 </div>
						<div data-role="fieldcontain" class="ui-hide-label">	
							<label for="date">Date</label>
								<input name="date" id="date" type="date" data-role="datebox" data-options='{"mode": "calbox", "afterToday": true, "calStartDay": 1, "calTodayButton": true}' placeholder="Date" data-prevent-focus-zoom="true"/>
						</div>
						<div data-role="fieldcontain" class="ui-hide-label">
							<label for="guest">Invite</label>
								<input type="text" name="guest" id="guest" value="" placeholder="Invit&eacute;" data-prevent-focus-zoom="true"/>
						</div>
						<div data-role="fieldcontain" class="ui-hide-label">	
							<label for="theme">Thème</label>
								<input type="text" name="theme" id="theme" value="" placeholder="Thème" data-prevent-focus-zoom="true"/>
						</div>
						<div data-role="fieldcontain" class="ui-hide-label">
							<label for="maj">Mise à Jour</label>   
								<input type="submit" id="maj" value="Mise à Jour" data-theme="b"/>
						</div>
					</form>
				</fieldset>		
			</div>
		</div>	
	</body>
</html>