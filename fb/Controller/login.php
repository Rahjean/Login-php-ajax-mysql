<?php 
	
	session_start() ;

	require('../Model/personne.php') ; 
	$e = new Personne() ; 

	// récupération des data
	$email = trim(htmlspecialchars($_POST['email'])) ;
	$pass = trim(htmlspecialchars($_POST['password'])) ;
	
	if($data=$e->recherchePersonne($email,$pass)->fetch()) {
		//satria efa une fois nanao comparaison any amilay model/personne oe misy v ilay email= amilay tedavina sy ilay password=tedavina dia efa mirenvoyer true ilay return rechercherPersonne()
	   $logged_user = true;
	   $message = "Connexion effectuée !";
    }else
    {                  
    	$logged_user = false;
    	$message = "Mot de passe ou email invalide";
    } 
	
	$return_data = ["user_logged" => $logged_user, "message" => $message];

	//tsy maints atao echo mba ho hitanlay ary am ajax oe valeur text ilay iz
	echo json_encode($return_data);

	$_SESSION['email'] = $_POST['email'] ;
	

	exit();

 ?>