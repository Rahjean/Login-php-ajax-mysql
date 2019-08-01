<?php 


	require('../Model/personne.php') ; 
	$e = new Personne() ; 

	// récupération des data
	$nom = trim(htmlspecialchars($_POST['nom'])) ;
	$email = trim(htmlspecialchars($_POST['email'])) ;
	$pass = trim(htmlspecialchars($_POST['password'])) ;

	// enregistrement
	$e->setNom($nom) ; 
	$e->setEmail($email) ;
	$e->setPassword($pass) ;
	$e->insertPersonne() ;


 ?>