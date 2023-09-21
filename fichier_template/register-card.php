<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Back-card</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: ../propre_fichiers/login.php");
		exit(); 
	}
?>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Back-Card</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Page principale
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Home</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>

					<li class="sidebar-item">
						<a class="sidebar-link" href="register-card.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Nouvel enregistrement</span>
            </a>
					</li>

					<li class="sidebar-header">
						Etats des cartes
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="carte-en-cours.php">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">En cours</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="carte-dispo.php">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Disponibles</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="carte-retire.php">
						<i class="align-middle" data-feather="check-square"></i><span class="align-middle">Rétirées</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li>

					<li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="#"></i> <span class="align-middle">Maps</span>
            </a>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Bienvenue sur Back-Card</strong>
						<div class="mb-3 text-sm">
							une application de suivi des cartes d'identités nationales 
						</div>
						<div class="d-grid">
							<a href="#" class="btn btn-primary">A propos</a>
						</div>
					</div>
				</div>
			</div>
		</nav>


<!-- Fin code du Menu principal -->


		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="d-relative w-50">
				<?php
								// Inclure le fichier de connexion à la base de données
								require_once '../propre_fichiers/config.php';

								// Vérifier si le formulaire a été soumis
								if ($_SERVER['REQUEST_METHOD'] === 'POST') {
									// Vérifier si tous les champs sont renseignés
									if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['id_carte']) && !empty($_POST['tel']) && !empty($_POST['date'])) {
										// Échapper les valeurs pour éviter les injections SQL
										$nom = mysqli_real_escape_string($conn, $_POST['nom']);
										$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
										$id_carte = mysqli_real_escape_string($conn, $_POST['id_carte']);
										$tel = mysqli_real_escape_string($conn, $_POST['tel']);
										$date = mysqli_real_escape_string($conn, $_POST['date']);
										// Vérifier si le champ "tel" contient 9 chiffres
										//if (!(strlen($tel)) == 9 && !(is_numeric($tel))){
										//	echo "Le champ 'tel' doit contenir un nombre de 9 chiffres.";
										//}

										// Créer la requête d'insertion
										$requete = "INSERT INTO infocarte (nom, prenom, numerocarte, numero_telephone, dateEnregistrement) VALUES ('$nom', '$prenom', '$id_carte', '$tel', '$date')";
											
											// Exécuter la requête d'insertion
										if (mysqli_query($conn, $requete)) {
												// Afficher le message de succès
												echo " <div class='container'>
												<div class='row'>
												  <div class='col-md-12 text-center mt-5'>
													<div class='alert alert-danger' role='alert'>
													<script>alert('Enregistrement avec succès'); window.location.href = 'carte-en-cours.php';</script>
													</div>";
											} else {
												// Afficher une erreur si la requête a échoué
												echo "Erreur : " . mysqli_error($conn);
											}
										} else {
											// Afficher un message si tous les champs ne sont pas renseignés
											echo "Veuillez remplir tous les champs du formulaire.";
										}
									}
				?>

					<h1 class="h3 mb-3"><strong>Enregistrement d'une nouvelle personne</strong></h1>

					<div class="card" margin-left ="10%">
						<div class="row vh-80">
						<div class="card-body">
							<div class="m-sm-4">
								<form action="" method="post">
									<div class="mb-3">
										<label class="form-label">Nom</label>
										<input class="form-control form-control-lg" type="text" name="nom" />
									</div>
									<div class="mb-3">
										<label class="form-label">Prénom</label>
										<input class="form-control form-control-lg" type="text" name="prenom" />
									</div>
									<div class="mb-3">
										<label class="form-label">ID carte </label>
										<input class="form-control form-control-lg" type="text" name="id_carte"/>
									</div>
									<div class="mb-3">
										<label class="form-label">Numéro de téléphone</label>
										<input class="form-control form-control-lg" type="tel" name="tel"/>
									</div>
									<div class="mb-3">
										<label class="form-label">Date d'enregistrement</label>
										<input class="form-control form-control-lg" type="date" name="date"/>
									</div>
									<div class="d-grid gap-2 mt-3">
										<input target="_blank" type="submit" class="btn btn-lg btn-primary">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>