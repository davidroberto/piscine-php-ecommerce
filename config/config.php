<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_set_cookie_params(3600);

$dsn = 'mysql:host=localhost:8889;dbname=piscine_php';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $username, $password);

	// Configurer PDO pour afficher les erreurs
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}