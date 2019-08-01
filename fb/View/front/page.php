<?php include("View/back/page.php") ; ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>page</h1>

	<a href="index.php?action=deconnexion">Deconnecter</a>

    <p>Nom user : <?php echo $nom ; ?></p>

	<p>Email user : <?php echo $_SESSION['email']; ?></p>

	
</body>
</html> 