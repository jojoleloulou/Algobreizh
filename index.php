
<!DOCTYPE html>
<HEAD>
<meta charset="UTF-8">
<meta name="viewport"	content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes"/>
<link	rel="stylesheet" type="text/css"
        media="screen"
	/>
<link	rel="stylesheet" type="text/css"
	media="
        handheld,
        screen and (max-width: 480px),
        screen and (max-device-width: 480px)"
	/>
<style>
	#nav {
		text-align:center;
		}
	#connexion {
		display: none;
	}
</style>
<script>
function toggle_div(bouton, id) { // On déclare la fonction toggle_div qui prend en param le bouton et un id
  var div = document.getElementById(id); // On récupère le div ciblé grâce à l'id
  var liste_div=new Array("connexion");
  for (var i=0; i<1; i++)
	{
	if (liste_div[i] != id)
		{
		var x = document.getElementById(liste_div[i]);
		x.style.display = "none";
		}
	else {
		var x = document.getElementById(liste_div[i]);
		x.style.display = "block";
		}
	}
}

</script>
</head>
<body>
<header>
Welcome to algobreizh<br />
<button id="test" onClick="toggle_div('this','connexion')">Connexionr</button>
<div id="connexion">
		
	<form action="connexion.php" method="post">
	identifiant<input type="text" name="identifiant"><br>
	mot de passe<input type="password" name="mdp"><br>
	<input type="submit">
	</form>
</div>
</header>
<section>
Présentation rapide d'AlgoBreizh
</section>
<footer>
<a href="mention_legale.php">Mention Légale</a>
</footer>
</body>
</html>



