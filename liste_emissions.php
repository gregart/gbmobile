<!DOCTYPE html>

<html lang="fr">
	<head>
		<title>GB Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" />
		
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
				<audio id="audioplayer" src="http://88.191.134.148:8000/streamhd.mp3" preload="none"></audio>
			</div>
		
			<div data-role="content">	
				<p>Retrouvez ici le détail de tous nos programmes! Les horaires, animateurs et émissions n'auront plus de secrets pour vous! 
				<ul data-role="listview">
				<li data-role="list-divider" role="heading">Nos programmes hebdomadaires</li>
					<?php
					session_start();
					
					$codesql=("select nom_em, heure_em, anim_em, id_em, jour from emission where hebdo!='non' order by id_em");
					$connexion=mysql_connect("localhost","root","kja5s6ti") or die(mysql_error($connexion));
					mysql_select_db("mobile",$connexion)or die(mysql_error($connexion));	
					mysql_query("SET NAMES 'utf8'");
					$requete=mysql_query($codesql)or die(mysql_error($connexion));		
					
					while ($ligne=mysql_fetch_row($requete))
					{
					
					$nom_em = $ligne[0];
					$heure_em = $ligne[1];
					$anim = $ligne[2];
					$id_em = $ligne[3];
					$jour = $ligne[4];
					
					echo "
							<li><a href='detail_emissions.php?id_em=$id_em'><img src='img/logo/$id_em.png'>
								<h3 class='ui-li-heading'>$nom_em</h3>
								<p>
									 <b>"; switch($jour)
												{
												    case 'Monday';
												        echo 'Lundi';
												    break;
												    case 'Tuesday';
												        echo 'Mardi';
												    break;
												    case 'Wednesday';
												        echo 'Mercredi';
												    break;
												    case 'Thursday';
												        echo 'Jeudi';
												    break;
												    case 'Friday';
												        echo 'Vendredi';
												    break;
												}
											 echo " à $heure_em 
									</b>avec $anim.
								</p>
							</a></li>
						 ";
					}
					mysql_close($connexion)
					?>
						
				</p>		
			
			
			<li data-role="list-divider" role="heading">Nos programmes journaliers</li>
					<?php
					session_start();
					
					$codesql=("select nom_em, heure_em, anim_em, id_em, jour from emission where hebdo='non' order by id_em");
					$connexion=mysql_connect("localhost","root","kja5s6ti") or die(mysql_error($connexion));
					mysql_select_db("mobile",$connexion)or die(mysql_error($connexion));	
					mysql_query("SET NAMES 'utf8'");
					$requete=mysql_query($codesql)or die(mysql_error($connexion));		
					
					while ($ligne=mysql_fetch_row($requete))
					{
					
					$nom_em = $ligne[0];
					$heure_em = $ligne[1];
					$anim = $ligne[2];
					$id_em = $ligne[3];
					
					echo "
							<li><a href='detail_emissions.php?id_em=$id_em'><img src='img/logo/$id_em.png'>
								<h3 class='ui-li-heading'>$nom_em</h3>
								<p>
									 <b>Tous les jours à $heure_em </b>
									avec $anim.
								</p>
							</a></li>
						 ";
					}
					mysql_close($connexion)
					?>
				</ul>		
				</p>		
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