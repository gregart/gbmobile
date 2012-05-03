<html lang="fr">
	<head>
		<title>GB Mobile</title>
		<link rel="icon" type="image/png" href="/img/iconhdgb.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />

		<!--***3 lignes à changer pour mettre à jour JQM***-->
		<link rel="stylesheet" href="cssperso.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
		
	</head>
	
	
	<body> 
	
		<div data-role="page">
		
			<div data-role="header" data-id="myheader" data-position="fixed">
			
				<h1>GB Mobile</h1>
				<audio id="audioplayer" src="http://88.191.134.148:8000/streamhd.mp3" preload="none"></audio>
			</div>
		
			<div data-role="content">	
				<h2>Chat</h2>
	
	
	
	
	
	
	
	
	
				<div data-role="footer" data-id="myfooter" data-position="fixed">
				<div data-role="navbar">
					<ul>
<!--hebdo/player/tel-->
						<li><a href="index.php" data-role="button" data-icon="grid" data-iconpos="top">Nos programmes</a></li>
						<li><a href="javascript:playPause();" data-role="button" data-icon="gb" data-iconpos="top">GB Live!</a></li>
						<li><a href="tel:+33320889972" data-role="button" data-icon="star" data-iconpos="top">Tel.</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	
	</body>

</html>