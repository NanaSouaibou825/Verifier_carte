<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
        <meta html-equiv="X-UA-Compatible" content = "UE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href ="cssfile.css">

		<!-- link rel="stylesheet" href ="bootstrap-4/css/bootstrap.min.css" -->
        <title>Login</title>
</head>
<body>
<?php
require('config.php');
session_start();


if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `utilisateurs` WHERE nom='$username' and mot_de_passe='$password'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: ../fichier_template/index.php");
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe <br> est incorrect.";
	}
}
?>

	
        <div class = "nav-bar"><h1>Back-carte</h1></div>
        <section>
            <div class = "login-box">
                    <form method ="POST" action="#">
                        <h2>Login</h2> 
                        <?php if (! empty($message)) { ?>
                            <p class="errorMessage"><?php echo $message; ?></p>
                        <?php } ?>
                        <div class = "input-box">
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user align-middle me-2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4">
                        </circle>
                        </svg>
                        </span>
                        <input type="text" name="username" id ="username" required>
                            <label>Nom d'utilisateur</label>     
                        </div>
                        <div class = "input-box">
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-unlock align-middle me-2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2">
                            </rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                        </svg>
                        </span>
                            <input type="password" name="password" id = "password" required>
                            <label>Mot de passe</label>
                        </div>
                        <div class = "remember-forget">
                            <label><input type="checkbox">Se souvenir de moi</label>
                            <a href="#">Mot de passe oublié</a>
                        </div>  
                        <button type="submit" id ="envoi">Se connecter</button>
                        <div class = "register-link">
                            <p>
                                Vous n'avez pas un compte ? <a href="register.php">Créer un compte</a>
                            </p>
                        </div>
                            
                        </div>  
                    </form>
                </div>
            </section>
</body>
</html>