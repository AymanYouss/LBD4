<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
	<style>
		label {
			display: inline-block;
			width: 150px;
			text-align: right;
			margin-right: 10px;
		}
		input, select {
			margin-bottom: 10px;
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}
		.error {
			color: red;
		}
	</style>
</head>
<body>
<form method="post" action="ex6.php">
		<label for="civilite">Civilité :</label>
		<select name="civilite" id="civilite">
			<option value="Mlle">Mlle</option>
			<option value="Mme">Mme</option>
			<option value="M">M</option>
		</select>
		<br>

		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom">
		<br>

		<label for="prenom">Prénom :</label>
		<input type="text" name="prenom" id="prenom">
		<br>

		<label for="date_naissance">Date de naissance :</label>
		<input type="date" name="date_naissance" id="date_naissance">
		<br>

		<label>Formations :</label><br>
		<input type="checkbox" name="formations[]" id="formation1" value="Formation 1"><label for="formation1">Formation 1</label><br>
		<input type="checkbox" name="formations[]" id="formation2" value="Formation 2"><label for="formation2">Formation 2</label><br>
		<input type="checkbox" name="formations[]" id="formation3" value="Formation 3"><label for="formation3">Formation 3</label><br>
		<input type="checkbox" name="formations[]" id="formation4" value="Formation 4"><label for="formation4">Formation 4</label><br>
		<input type="checkbox" name="formations[]" id="formation5" value="Formation 5"><label for="formation5">Formation 5</label><br>
		<input type="checkbox" name="formations[]" id="formation6" value="Formation 6"><label for="formation6">Formation 6</label><br>
		<input type="checkbox" name="formations[]" id="formation7" value="Formation 7"><label for="formation7">Formation 7</label><br>
		<input type="checkbox" name="formations[]" id="formation8" value="Formation 8"><label for="formation8">Formation 8</label><br>
		<input type="checkbox" name="formations[]" id="formation9" value="Formation 9"><label for="formation9">Formation 9</label><br>
		<input type="checkbox" name="formations[]" id="formation10" value="Formation 10"><label for="formation10">Formation 10</label><br>
		<br>

		<label for="mot_de_passe">Mot de passe :</label>
		<input type="password" name="mot_de_passe" id="mot_de_passe">
		<br>

		<label for="confirmation_mot_de_passe">Réécrire mot de passe :</label>
		<input type="password" name="confirmation_mot_de_passe" id="confirmation_mot_de_passe">
		<br>

		<input type="submit" value="S'inscrire">
	</form>
	<?php
		// initialisation des variables
		$civilite = "";
		$nom = "";
		$prenom = "";
		$date_naissance = "";
		$checkboxes = array();
		$mot_de_passe = "";
		$re_mot_de_passe = "";
		$civilite_erreur = $nom_erreur = $prenom_erreur = $date_naissance_erreur = $checkboxes_erreur = $mot_de_passe_erreur = "";
		
		// gestion de la soumission du formulaire
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// récupération des données
			$civilite = $_POST["civilite"];
			$nom = $_POST["nom"];
			$prenom = $_POST["prenom"];
			$date_naissance = $_POST["date_naissance"];
			if (isset($_POST["formations"])) {
				$checkboxes = $_POST["formations"];
			}
			$mot_de_passe = $_POST["mot_de_passe"];
			$re_mot_de_passe = $_POST["confirmation_mot_de_passe"];
			
			// validation des données
			$erreur = false;
			if (empty($civilite)) {
				$civilite_erreur = "Civilité est obligatoire";
				$erreur = true;
			}
			if (empty($nom)) {
				$nom_erreur = "Nom est obligatoire";
				$erreur = true;
			}
			if (empty($prenom)) {
				$prenom_erreur = "Prénom est obligatoire";
				$erreur = true;
			}
			if (empty($date_naissance)) {
				$date_naissance_erreur = "Date de naissance est obligatoire";
				$erreur = true;
			}
			if (empty($checkboxes)) {
				$checkboxes_erreur = "Au moins une formation doit être sélectionnée";
				$erreur = true;
			}
			if (empty($mot_de_passe)) {
				$mot_de_passe_erreur = "Mot de passe est obligatoire";
				$erreur = true;
			}
			if ($mot_de_passe != $re_mot_de_passe) {
				$re_mot_de_passe_erreur = "Les mots de passe ne correspondent pas";
				$erreur = true;
			}
			
			// affichage des données
			if (!$erreur) {
				echo "<h1>Informations saisies:</h1>";
				echo "<table>";
				echo "<tr><td>Civilité:</td><td>".$civilite."</td></tr>";
				echo "<tr><td>Nom:</td><td>".$nom."</td></tr>";
				echo "<tr><td>Prénom:</td><td>".$prenom."</td></tr>";
				echo "<tr><td>Date de naissance:</td><td>".$date_naissance."</td></tr>";
				echo "<tr><td>Formations:</td><td>".implode(", ", $checkboxes)."</td></tr>";
            }
			else{
				echo $civilite_erreur;
				echo "<br>";
				echo $nom_erreur;
				echo "<br>";
				echo $prenom_erreur;
				echo "<br>";
				echo $date_naissance_erreur;
				echo "<br>";
				echo $checkboxes_erreur;
				echo "<br>";
				echo $mot_de_passe_erreur;
				echo "<br>";
				echo $re_mot_de_passe_erreur;

			}
			
        }
?>