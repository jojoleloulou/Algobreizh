 <?
// pensez a ouvrir une connexion vers mysql ici
// voir les exercices dans le menu de droite pour cela.
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=algoBreizh', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

if(isset($_POST) && !empty($_POST['identifiant']) && !empty($_POST['mdp'])) {
  $identifiant=$_POST["identifiant"];
  $mdp=$_POST["mdp"];
  // on recupère le password de la table qui correspond au login du visiteur
  $sql = "select * from utilisateur where identifiant='".$identifiant."'";
  $req = $bdd->query($sql);
  $data =$req->fetch();

  
  if($data['mdp'] != $mdp) {
    echo '<p>Mauvais login / password. Merci de recommencer</p>';
    include('index.php'); // On inclut le formulaire d'identification
    exit;
  }
  else {
    session_start();
    $_SESSION['identifiant'] = $identifiant;
    $nom=$data['nom'];
    $prenom=$data['prenom'];
    $fonction=$data['fonction'];
    $_SESSION['nom']=$nom;
    $_SESSION['prenom']=$prenom;

    if($fonction=="administrateur"){
	include('administrateur.php');
	}
    else if ($fonction=='commercial'){
	include('commercial.php');
	}
    else if ($fonction=='distributeur'){
	include('distributeur.php');
    	}
    
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres
  }  
}
else {
  echo '<p>Vous avez oublié de remplir un champ.</p>';
   include('index.php'); // On inclut le formulaire d'identification
   exit;
}
?>
