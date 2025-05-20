<!DOCTYPE html>
<html>
  <head>
  	<title>Test méthode POST</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body> <!-- Corps de la page -->
  	<form action="resultat.php" method="POST">	<!-- Début du formulaire -->
		<!-- Zones de texte -->
		<label for="nom"> Nom : </label><input type="text" name="nom" id="nom" placeholder="Entrez votre nom" /><br/><br/>
		<label for="mail">Mail : </label><input type="text" name="mail" id="mail" placeholder="eleve@btsinfo.fr" /><br/><br/>
		<label for="titre">titre : </label><input type="titre" name="titre" id="titre" placeholder="rien ne va plus" /><br/><br/>
		<!-- Bouton radio -->
		<label for="urgence">Niveau d urgence : </label>
		<input type="radio" name="urgence" id="urgence" value="Basse" checked /> Basse
		<input type="radio" name="urgence" value="Moyenne" /> Moyenne
		<input type="radio" name="urgence" value="Haute" /> Haute
        <br/><br/>
		<label for="os">Systeme d exploitation : </label>
		<input type="radio" name="os" id="os" value="Windows" checked /> windows
		<input type="radio" name="os" value="Mac Os" /> Mac Os
		<input type="radio" name="os" value="Linux" /> Linux
		<br/><br/>
		<label for="version">Version : </label><input type="text" name="version" id="version" placeholder="11" /><br/><br/>
		<br/><br/>
		<label for="textarea"> Quel est votre demande ? (500 caracteres max) </label><br/><br/>
    		<textarea name="textarea" cols="50" rows="10"> </textarea><br />
		<br/><br/>
		<!-- Bouton -->
		<input type="submit" name="btOK" value="Envoyer">

	</form> <!-- Fin du formulaire -->
  </body>



</html>
