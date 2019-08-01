<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Public/Bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Public/Bootstrap/bootstrap.min.js">

	<link rel="stylesheet" type="text/css" href="Public/CSS/inscription.css">
</head>
<body>


<div class="all" >
	<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">

					<div class="card-header">
						<h3>Inscription</h3>
					</div>

					<div class="card-body">
						<form>

							<div class="input-group form-group">
								<input type="text" class="form-control" placeholder="nom" id="nom" required="">
							</div>

							<div class="input-group form-group">
								<input type="text" class="form-control" placeholder="email" id="email" required="">
							</div>

							<div class="input-group form-group">
								<input type="password" class="form-control" placeholder="mot de passe" id="password" required="">
							</div>

							<div class="form-group">
								<a type="submit" value="S'inscrire" class="btn btn-primary col-md-12" id="login">Inscrire</a>
							</div>
						</form>
					</div>

					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Deja membre ?<a href="index.php?action=login">Se connecter</a>
						</div>
					</div>

				</div>
			</div>
	</div>
</div>


<script src="Public/LIB/jquery.js"></script>
<script src="Public/JS/inscription.js"></script>

		

</body>
</html>