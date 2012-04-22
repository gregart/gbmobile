<?php
session_start();

$codesql=("select nom_em, heure_em, anim_em, jour, desc_em, theme_em, invit_em, date_next_em, id_em from emission where id_em='$_GET[id_em]'");


$connexion=mysql_connect("localhost","root","kja5s6ti") or die(mysql_error($connexion));
mysql_select_db("mobile",$connexion)or die(mysql_error($connexion));	
$requete=mysql_query($codesql)or die(mysql_error($connexion));		

$ligne=mysql_fetch_row($requete);

$nom = $ligne[0];
$heure = $ligne[1];
$anim = $ligne[2];
$jour = $ligne[3];
$desc = $ligne[4];
$theme = $ligne[5];
$invit = $ligne[6];
$date_next_em = $ligne[7];
$id_em = $ligne[8];

?>
<html>
	<head>
		<title>GB Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!--***3 lignes à changer pour mettre à jour JQM***-->
		<link rel="stylesheet" href="cssperso.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
		<script type="text/javascript">
		       function playPause() {
		       var song = document.getElementsByTagName('audio')[0];
		       if (song.paused)
		           song.play();
		       else
		           song.pause();
		       }
		</script>
	</head>
	
	
	<body> 
	
		<div data-role="page">
		
			<div data-role="header" data-id="myheader" data-position="fixed">
				<h1>GB Mobile</h1>
				<a href="index.php" class="ui-btn-right" data-theme="b">Retour</a>
				<audio id="audioplayer" src="http://88.191.134.148:8000/streamhd.mp3" preload="none"></audio>
			</div>
		
			<div data-role="content">
				<fieldset class="ui-grid-a">	
					<p>
						<div class="ui-block-a">
							<h2><?php echo $nom; ?><br/></h2>
							Tous les <?php switch($jour)
											{
											    case 'Monday';
											        echo 'lundi';
											    break;
											    case 'Tuesday';
											        echo 'mardi';
											    break;
											    case 'Wednesday';
											        echo 'mercredi';
											    break;
											    case 'Thursday';
											        echo 'jeudi';
											    break;
											    case 'Friday';
											        echo 'vendredi';
											    break;
											    case 'Jours';
											        echo 'jours';
											    break;
											}
										?>
							&agrave; <?php echo $heure; ?> avec <?php echo $anim; ?></p>
						</div>
						<div class="ui-block-b">
							<img src="img/logo/<?php echo $id_em ?>.png" width="100%"></img>
						</div>
					</p>
				</fieldset>
				<fieldset class="ui-grid-b">
						<p>
							<?php echo $desc; ?> <br/><br/>
							
							<input type="submit" id="azerty" value="Th&egrave;me : <?php echo $theme; ?>" data-theme="e"/><br/>
							<input type="submit" id="qsdfgh" value="Invit&eacute; du <?php echo $date_next_em; ?> : <?php echo $invit; ?>" data-theme="e"/>
						</p>
				</fieldset>			
			</div>
		
			<div data-role="footer" data-id="myfooter" data-position="fixed">
				<div data-role="navbar">
					<ul>
<!--home/player/tel-->
						<li><a href="index.php" data-role="button" data-icon="home" data-iconpos="top">Home</a></li>
						<li><a href="javascript:playPause();" data-role="button" data-icon="gb" data-iconpos="top">GB Live!</a></li>
						<li><a href="tel:+33320889972" data-role="button" data-icon="star" data-iconpos="top">Tel.</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	
	</body>

</html>