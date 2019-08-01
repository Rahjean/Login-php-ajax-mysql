<?php 


	const Model = "Model/" ;
	const Controller = "Controller/" ;
	const Back = "View/back/" ;
	const Front = "View/front/" ;

	if (isset($_GET['action'])) {

		if ($_GET['action']== "login") {
			include(Front . "login.php") ;
		}
		
		if ($_GET['action']== "inscription") {
			include(Front . "inscription.php") ;
		}

		if ($_GET['action']== "page") {
			include(Front . "page.php") ;
		}

		if ($_GET['action']== "deconnexion") {
			include(Controller . "deconnexion.php") ;
		}


	}
	else {
		include(Front . "login.php") ;
	}








 ?>