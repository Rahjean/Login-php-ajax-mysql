<?php 
    require_once("Model/personne.php") ;
    $a = new Personne() ;

    session_start();
    
	//verifie si le session existe
	if(!$_SESSION['email']){
		header("location: index.php?action=login") ;
	} ;

	//equivalent am eachdo am ruby on rails
	$data = $a->selectPersonne() ;
	foreach ($data as $k) {

		//iaffichena ilay nom anilay manana ilay $_session['email'] rehefa ary am view/page.php
		if ($_SESSION['email'] == $k['email']) {

			$nom = $k['nom'] ;
			
			return $nom;
		} 	
	}



 ?>