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

	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

	<title>Back-card</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
     <link rel="stylesheet" href="../propre_fichiers/cssfile.css">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Back-card</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
					Disponibles
					</li>

					<li class="sidebar-item">
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
						<a class="sidebar-link" href="#">
						<i class="align-middle" data-feather="check-square"></i><span class="align-middle">Rétirées</span>
            </a>
					</li>
				
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Bienvenue sur Back-Card</strong>
						<div class="mb-3 text-sm">
						une application de suivi des cartes d'identités
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">A propos</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

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
									4 New Notifications
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
									<a href="#" class="text-muted"></a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><a href="../propre_fichiers/logout.php">Déconnexion</a></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> </a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i></a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"></a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h1 mb-3">En cours</h1>

					<div class="row">
						<div class="col-12 col-md-11 col-lg-10 col-xl-11 col-xxl-6 mx-auto">
							<div class="card">
									<h1 class="text-center mb-3 mt-3"><strong>Liste des cartes en cours de traitement</strong></h1>
										<form method="POST" enctype="multipart/form-data">
											<label for="excelFile">Sélectionner un fichier Excel :</label>
											<input class="mb-3" type="file" name="excelFile" id="excelFile" accept=".xls, .xlsx">
											<button type="submit" class="btn btn-primary" name="submit">Rechercher</button>
										</form>
								<div class="card-body">
									<div class="table-responsive table-upgrade">
										<table class="table">
										<tbody>
												
											<tr>
													<th>Noms</th>
													<th>Prénoms</th>
													<th>Numéros de cartes</th>
													<th>Numéros de téléphones</th>
													<th>Dates d'enregistrement</th>
													<th>Etats</th>
												</tr>
				<?php
					require('../propre_fichiers/config.php');
									
					if(isset($_POST['submit'])) {
						if(isset($_FILES['excelFile'])) {
							$file = $_FILES['excelFile']['tmp_name'];
									
							// Vérifier si le fichier est un fichier Excel
							$allowedExtensions = array('xls', 'xlsx');
							$fileExtension = strtolower(pathinfo($_FILES['excelFile']['name'], PATHINFO_EXTENSION));
							if(in_array($fileExtension, $allowedExtensions)) {
								// Lire le contenu du fichier Excel
								require '../../back-card/PHPExcel/Classes/PHPExcel.php';
									
								$excel = PHPExcel_IOFactory::load($file);
								$sheet = $excel->getActiveSheet();
									
								// Créer un tableau pour stocker les noms existants dans le fichier Excel
								$excelNoms = array();
								$excelPrenoms = array();
								$excelNumerosCarte = array();
								$excelNumerosTelephone = array();
									
								// Parcourir les lignes du fichier Excel et stocker les informations dans les tableaux
								foreach($sheet->getRowIterator() as $row) {
									$nomCell = $sheet->getCell('A' . $row->getRowIndex()) ?? $sheet->getCell('A1');
									$nom = $nomCell->getValue();
									$excelNoms[] = $nom;
									$prenomCell = $sheet->getCell('B' . $row->getRowIndex()) ?? $sheet->getCell('B1');
									$prenom = $prenomCell->getValue();
									$excelPrenoms[] = $prenom;
									$numeroCarteCell = $sheet->getCell('C' . $row->getRowIndex()) ?? $sheet->getCell('C1');
									$numeroCarte = $numeroCarteCell->getValue();
									$excelNumerosCarte[] = $numeroCarte;
									$numerotelCell = $sheet->getCell('D' . $row->getRowIndex()) ?? $sheet->getCell('D1');
									$numerotel = $numerotelCell->getValue();
									$excelNumerosTelephone[] = $numerotel;
								}
									
								// Sélectionner les informations dans la base de données
								$sql = "SELECT * FROM infocarte";
								$result = $conn->query($sql);
									
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$nomBDD = $row["nom"];
										$prenomBDD = $row["prenom"];
										$numeroCarteBDD = $row["numerocarte"];
										$numeroTelephoneBDD = $row["numero_telephone"];
											
										// Vérifier si les informations existent à la fois dans le fichier Excel et dans la base de données
										if(in_array($nomBDD, $excelNoms) && in_array($prenomBDD, $excelPrenoms) && in_array($numeroCarteBDD, $excelNumerosCarte) && in_array($numeroTelephoneBDD, $excelNumerosTelephone)) {
											// Afficher les informations des personnes
											echo "<div class='affiche'>
											<table class='table table-bordered dataTable' id='dataTable' width='80%' cellspacing='0' role='grid' aria-describedby='dataTable_info' style='width: 100%'>
												<tbody>
													<tr class='odd'>
														<td><strong>".$row["nom"]."</strong></td>
														<td><strong>".$row["prenom"]."</strong></td>
														<td><strong>".$row["numerocarte"]."</strong></td>
														<td><strong>".$row["numero_telephone"]."</strong></td>
														<td><strong>".$row["dateEnregistrement"]."</strong></td>
													</tr>
												</tbody>
											</table>
											</div>";
										}
									}
								} else {
									echo "Aucune carte en cours de traitement pour le moment";
								}
																				
								// Fermeture de la connexion
								$conn->close();
							} else {
								echo "Veuillez sélectionner un fichier Excel valide.";
							}
						} else {
							echo "Veuillez sélectionner un fichier.";
						}
					}
				?>

												</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

















			<!--<main class="content">
				<div class="col-12 col-md-11 col-lg-10 col-xl-8 col-xxl-6 mx-auto">
					<div class="mb-3">
						<h1 class="h1 d-inline align-middle">Liste des cartes disponibles</h1>
					</div>
					<div class="container py-5 bg-light text-center">  
						  <div class="mb-3"> 
				  
				  
				  
				  <form method="POST" enctype="multipart/form-data">
					  <label for="excelFile">Sélectionner un fichier Excel :</label>
					  <input class="mb-3" type="file" name="excelFile" id="excelFile" accept=".xls, .xlsx">
					  <button type="submit" class="btn btn-primary" name="submit">Rechercher</button>
				  </form>
				  
				  
				  <?php
require('../propre_fichiers/config.php');
                  
if(isset($_POST['submit'])) {
    if(isset($_FILES['excelFile'])) {
        $file = $_FILES['excelFile']['tmp_name'];
                  
        // Vérifier si le fichier est un fichier Excel
        $allowedExtensions = array('xls', 'xlsx');
        $fileExtension = strtolower(pathinfo($_FILES['excelFile']['name'], PATHINFO_EXTENSION));
        if(in_array($fileExtension, $allowedExtensions)) {
            // Lire le contenu du fichier Excel
            require '../../back-card/PHPExcel/Classes/PHPExcel.php';
                  
            $excel = PHPExcel_IOFactory::load($file);
            $sheet = $excel->getActiveSheet();
                  
            // Créer un tableau pour stocker les noms existants dans le fichier Excel
            $excelNoms = array();
            $excelPrenoms = array();
            $excelNumerosCarte = array();
            $excelNumerosTelephone = array();
                  
            // Parcourir les lignes du fichier Excel et stocker les informations dans les tableaux
            foreach($sheet->getRowIterator() as $row) {
                $nomCell = $sheet->getCell('A' . $row->getRowIndex()) ?? $sheet->getCell('A1');
                $nom = $nomCell->getValue();
                $excelNoms[] = $nom;
                $prenomCell = $sheet->getCell('B' . $row->getRowIndex()) ?? $sheet->getCell('B1');
                $prenom = $prenomCell->getValue();
                $excelPrenoms[] = $prenom;
                $numeroCarteCell = $sheet->getCell('C' . $row->getRowIndex()) ?? $sheet->getCell('C1');
                $numeroCarte = $numeroCarteCell->getValue();
                $excelNumerosCarte[] = $numeroCarte;
                $numerotelCell = $sheet->getCell('D' . $row->getRowIndex()) ?? $sheet->getCell('D1');
                $numerotel = $numerotelCell->getValue();
                $excelNumerosTelephone[] = $numerotel;
            }
                  
            // Sélectionner les informations dans la base de données
            $sql = "SELECT * FROM infocarte";
            $result = $conn->query($sql);
                  
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $nomBDD = $row["nom"];
                    $prenomBDD = $row["prenom"];
                    $numeroCarteBDD = $row["numerocarte"];
                    $numeroTelephoneBDD = $row["numero_telephone"];
                          
                    // Vérifier si les informations existent à la fois dans le fichier Excel et dans la base de données
                    if(in_array($nomBDD, $excelNoms) && in_array($prenomBDD, $excelPrenoms) && in_array($numeroCarteBDD, $excelNumerosCarte) && in_array($numeroTelephoneBDD, $excelNumerosTelephone)) {
                        // Afficher les informations des personnes
                        echo "<div class='affiche'>
                        <table class='table table-bordered dataTable' id='dataTable' width='80%' cellspacing='0' role='grid' aria-describedby='dataTable_info' style='width: 100%'>
                            <tbody>
                                <tr class='odd'>
                                    <td><strong>".$row["nom"]."</strong></td>
                                    <td><strong>".$row["prenom"]."</strong></td>
                                    <td><strong>".$row["numerocarte"]."</strong></td>
                                    <td><strong>".$row["numero_telephone"]."</strong></td>
                                    <td><strong>".$row["dateEnregistrement"]."</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>";
                    }
                }
            } else {
                echo "Aucune carte en cours de traitement pour le moment";
            }
                                                            
            // Fermeture de la connexion
            $conn->close();
        } else {
            echo "Veuillez sélectionner un fichier Excel valide.";
        }
    } else {
        echo "Veuillez sélectionner un fichier.";
    }
}
?>

					 </div>
						</div>
				</div>
			</main> -->

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<span class="text-muted" target="_blank"><strong>Back-Card - Web Application</strong></span>       &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								
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