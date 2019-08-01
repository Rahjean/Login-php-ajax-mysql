<!DOCTYPE html>
<html>
<head>
	<title>acceuil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Public/Bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Public/Bootstrap/bootstrap.min.js">

	<link rel="stylesheet" type="text/css" href="Public/CSS/acceuil.css">
</head>
<body>

<div class="all" >
	<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">

					<div class="card-header">
						<h3>Se connecter</h3>
					</div>

					<div class="card-body">
						<form id="loginForm">
							<div class="input-group form-group">
								<input type="text" class="form-control" placeholder="email" id="email" name="email">
							</div>

							<div class="input-group form-group">
								<input type="password" class="form-control" placeholder="mot de passe" id="password" name="password">
							</div>
							
							<div class="form-group">
								<a type="submit" class="btn btn-primary col-md-12" id="login">Se connecter</a>
							</div>
						</form>
					</div>

					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Pas encore Inscrit ?<a href="index.php?action=inscription">Inscrire</a>
						</div>
						<div class="d-flex justify-content-center">
							<a href="#">Forgot your password?</a>
						</div>
					</div>

				</div>
			</div>
	</div>
</div>
		

<script src="Public/LIB/jquery.js"></script>
<script src="Public/JS/login.js"></script>



</body>
</html>