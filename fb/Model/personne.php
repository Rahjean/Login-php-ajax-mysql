<?php 
	require_once("connexionDB.php") ; 
	
	class Personne{
		
		private $id, $nom, $email, $password ; 

		public function __construct() {
			$c = new connexionDB() ; 
			$this->bdd = $c->getConnexion() ;

		}
		
		// setters
		public function setId($nom) {
			$this->id = strtoupper($nom) ; 
		}
		public function setNom($nom) {
			$this->nom = $nom ; 
			echo $this->nom;
		}
		public function setEmail($nom) {
			$this->email = $nom ; 
		}
		public function setPassword($nom) {
			$this->password = $nom ; 
		}


		//get
		public function getId() {
			return $this->id ; 
		}
		public function getNom() {
			return $this->nom ; 
		}
		public function getEmail() {
			return $this->email ; 
		}
		public function getPassword() {
			return $this->password ; 
		}

		
		// insertion 
		public function insertPersonne() {
			$req = $this->bdd->prepare("INSERT INTO personne(nom,email,password) VALUES (?,?,?)") ; 
			$req->execute(array($this->nom,$this->email,$this->password)) ; 
		}

		public function recherchePersonne($email,$pass) {
			//$email sy $pass ilay ary anaty controller/login.php
		  	$req = $this->bdd->query("SELECT * FROM personne Where email='$email' and password='$pass'") ;
		  	return $req; 
		}

	
		public function selectPersonne() {
			//$email sy $pass ilay ary anaty controller/login.php
		  	$req = $this->bdd->query("SELECT * FROM personne") ;
		  	return $req; 
		}



	}
 ?>