<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    	<!-- Bootstrap core CSS -->
    	<link href="frameworks/Bootstrap.min.css" rel="stylesheet">
   		<link href="frameworks/materialize.min.css" rel="stylesheet">

    	<link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
<body>

<?php

$form = [];	

		if (isset($_POST) && !empty($_POST)) {
			$donner=[];

		if (isset($_POST["nom"]) && $_POST['nom']!='') {
			$donner['lastname'] = $_POST["nom"];
		}else{
			$form[] = 'merci de mettre un nom';
		}

		if (isset($_POST["prenom"]) && $_POST['prenom']!='') {
			$donner['firstName'] = $_POST["prenom"];
		}else{
			$form[] = 'merci de mettre un prenom';
		}

		if (isset($_POST["naissance"]) && $_POST['naissance']!='') {
			$donner['birthDate'] = $_POST["naissance"];
		}else{
			$form[] = 'merci de mettre une date naissance';
		}

			if (isset($_POST["adresse"]) && $_POST['adresse']!='') {
			$donner['adress'] = $_POST["adress"];
		}else{
			$form[] = 'mettre une adresse';
		}

	
		
				if (isset($_POST["phone"])) {
				$donner['phone'] = $_POST["phone"];
				}else{
				$form[] = 'Indiquez numéro de télèphone';
				}


		if (empty($form)) {

			/*INSERT TO INTO nomdelatable SET*/
			$statement = $pdo->prepare("
				INSERT INTO user
				SET lastname = :lastname,
				firstName = :firstName,
				birthDate = :birthDate,
				phone = :phone,
				");

			$statement->execute($donner);





$form[] = "<div class='list-group-item list-group-item-success'>le client est bien ADD'</div>";
			
		}
	}



?>





<?php foreach ($form as $value) {
	echo "<li class='list-group-item list-group-item-danger'> $value <li> <br>" ;
}


?>


<H1>OMG! FORMULAIRE</H1>


<div class="Formulaire">
<div class="row">
		<form class="col s6">
		    <div class="row">
		    	<div class="input-field col s6">
					<label class=""><input type="text" class="validate" name="nom" placeholder="Nom"></label> 
				</div>
				<div class="input-field col s6">		
					<label class=""><input type="text" class="validate" name="prenom" placeholder="Prenom"></label>
				</div>
			</div>
			<div class="row">
		 		   	<div class="input-field col s6">
					<label class=""><input type="date" class="form-control" name="naissance"></label>
				</div>
			</div>
			<div class="row">
		        <div class="input-field col s6">	
					<label class=""><input type="text" class="form-control" name="adresse" placeholder="Adresse"></label>
				</div>
		        <div class="input-field col s6">	 	
					<label class="">  <input type="number" class="form-control" name="postal" placeholder="Code Postale"></label>
				</div>
			</div>	 
			<div class="row">
		        <div class="input-field col s4">		
					<label class=""><input type="number" class="form-control" name="phone" placeholder="Numéro de téléphone"></label>
				</div>
			</div>
				<div class="flex dark">
 		 			<a type="submit" class="bttn-dark"> Continue</a>
				</div>
		</form>
	<div class="col s6">
		<img class="col s12" src="img/pacman.png">
	</div>
</div>
</div>

</body>
</html>
