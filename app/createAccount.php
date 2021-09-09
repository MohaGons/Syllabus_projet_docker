	<?php include "header.html" ?>
	
	<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Créer un compte</title>
	</head>
	<body>

	<form action="inscriptionController.php" method="post">
  <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control" name="pseudo" placeholder="Entrez un pseudo">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="password" placeholder="Entrez un mot de passe">
  </div>
  <div class="form-group">
    <label for="password2">Mot de passe</label>
    <input type="password" class="form-control" name="password2" placeholder="Entrez à nouveau votre mot de passe">
	<small id="emailHelp" class="form-text text-muted">On ne va jamais partager votre mot de passe avec quelqu'un</small>
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<?php include 'footer.php' ?>
<style type="text/css">
	.footer2{
		position: fixed!important;
      	bottom: 0!important;
	}
</style>
	</html>