<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="cssfile.css" />
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//requéte SQL + mot de passe crypté
    $query = "INSERT into `utilisateurs` (nom, email, mot_de_passe) VALUES ('$username', '$email', '".hash('sha256', $password)."')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
?>
<section>
<div class = "register-box">
<form class="box" action="login.php" method="post">
    <h2 class="h2-register">S'inscrire</h2>
	<div class = "input-box-register">
		<input type="text" class="input-box-register" name="username" required />
		<label>Nom d'utilisateur</label>
	</div>
	<div class = "input-box-register">
		<input type="text" class="" name="email" required />
		<label>Email</label>	
	</div>
	<div class = "input-box-register">
		<input type="password" class="input-box-register" name="password" required />
		<label>Mot de passe</label>
	</div>
	<div class = "input-box-register">
		<input type="password" class="input-box-register" name="password2" required />
		<label>confirmer le mot de passe</label>
	</div>
    <button type="submit" name="submit">S'inscrire</button>
	<div class = "register-link">
        <p>
            Déja inscrit ? <a href="login.php">Connectez-vous ici</a>
        </p>
    </div> 
</form>
</div>
</section>
<?php } ?>
</body>
</html>