<?php
 //CONNEXION AVEC MySQLI 
//Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbcard');
 
// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
   
/*try {
    // on se connecte à la base des données avec la méthode PDO
    $dbConnect = new PDO('mysql:host=localhost;dbname=dbcard;charset-utf8','root','');
} catch (Exception $e) {
    // en cas d'erreur on affiche le message et on arrête tout
    die('Connexion impossible : '.$e->getMessage());
}
*/

?>
