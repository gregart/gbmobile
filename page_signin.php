<html>
	<head>
		<title>GB Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
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
				<h2>Ajouter utilisateur</h2>
				<fieldset data-role="fieldcontain">
					<form action="signin.php" method="POST" data-ajax="false">
						<p>
							<div data-role="fieldcontain" class="ui-hide-label">
								<label for="login">Login:</label>
								<input name='login' id='login' placeholder='Login' type='text'/>
							</div>   
						</p>
						<p>
							<div data-role="fieldcontain" class="ui-hide-label">
								<label for="password">Mot de passe :</label>
								<input type="text" name="password" id="password" value="" placeholder="Mot de Passe" />
							</div>    
						</p>
<!-- Scripts php à inserer -->						
						<p>
							<select name="emission" id="emission" value="" data-prevent-focus-zoom="true"/>
								<option>Emission</option>   
							    <optgroup label="Quotidiennes">
							    	<option value='$id_em'>liste des quotid</option>
							    </optgroup>
							    <optgroup label="Hebdomadaires">
							    	<option value='$id_em'>liste des hebdos</option>
							    </optgroup>
							</select>
						</p>
<!-- Donne des privilèges d'admin au nouveau membre -->						
						<p>
							<div data-role="fieldcontain">
							    <fieldset data-role="controlgroup">
								   <input type="checkbox" name="admin" id="admin" />
								   <label for="admin">Administrateur</label>
							    </fieldset>
							</div>    
						</p>
<!-- Necessite le pass de l'admin pour l'input -->
						<p>
							<div data-role="fieldcontain" class="ui-hide-label">
								<label for="passadmin">Mot de passe admin :</label>
								<input type="password" name="passadmin" id="passadmin" value="" placeholder="Mot de Passe Admin" />
							</div>    
						</p>
						<p>
							<div data-role="fieldcontain" class="ui-hide-label">
								<input type="submit" value="Valider" data-theme="b" />
							</div>	
						</p>
					</form>    
				</fieldset>			
			</div>		
		</div>
	</body>
</html>