<?php


require_once('../config/config.php');

// Préparer la requête d'insertion
$sql = "INSERT INTO product (titre, sous_titre, description) VALUES (:titre, :sous_titre, :description)";
$stmt = $pdo->prepare($sql);

// Définir les paramètres et exécuter
$titre = "Exemple de titre";
$sous_titre = "Exemple de sous-titre";
$description = "Ceci est une description d'exemple pour le produit.";

$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':sous_titre', $sous_titre);
$stmt->bindParam(':description', $description);

// Exécuter la requête
if ($stmt->execute()) {
	echo "Nouveau produit ajouté avec succès";
} else {
	echo "Erreur lors de l'ajout du produit";
}

