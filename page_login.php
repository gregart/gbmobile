<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>GB Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" />
		<!--***3 lignes à changer pour mettre à jour JQM***-->
		<link rel="stylesheet" href="cssperso.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	</head>
	
	
	<body> 
	
		<div data-role="page" data-theme="e" data-content-theme="e">	
			<div data-role="header" data-id="myheader" data-position="fixed">
				<h1>GB Mobile</h1>
				<a href="index.php" class="ui-btn-right" data-theme="b">Retour</a>
			</div>
		
			<div data-role="content">	
				
				<h2>Connexion</h2>
				
				<form action="login.php" method="POST" data-ajax="false">
				    <fieldset data-role="fieldcontain">
				        <p>
					        <div data-role="fieldcontain" class="ui-hide-label">
					        	<label for="login">Login:</label>
					        	<?php
					        	echo"<input name='login' id='login' placeholder='Login' type='text'";
					        	if ( isset($_COOKIE['login']))
					        	{echo"value='".$_COOKIE['login']."'";}
					        	echo"/>";
					        	?>
					        </div>
					        
				        </p>
				        <p>
					        <div data-role="fieldcontain" class="ui-hide-label">
					            <label for="password">Mot de passe :</label>
					            <input type="password" name="password" id="password" value="" placeholder="Mot de Passe" />
					        </div>    
				        </p>
				        <p>
				            <input type="submit" value="Valider" data-theme="b" />
				        </p>
				    </fieldset>
				</form>
					
							
						
			</div>
		
			
		</div>
	
	</body>

</html>