<?php
namespace App;








$erreur = [];
if (isset($_POST) && !empty($_POST)) {
	$donner=[];

		if (isset($_POST["nom"]) && $_POST['nom']!='') {
			$donner['lastname'] = $_POST["nom"];
		}else{
			$erreur[] = 'merci de mettre un nom';
		}

		if (isset($_POST["prenom"]) && $_POST['prenom']!='') {
			$donner['firstName'] = $_POST["prenom"];
		}else{
			$erreur[] = 'merci de mettre un prenom';
		}

		if (isset($_POST["naissance"]) && $_POST['naissance']!='') {
			$donner['birthDate'] = $_POST["naissance"];
		}else{
			$erreur[] = 'merci de mettre une date naissance';
		}

		if (isset($_POST["card"])) {
			$donner['card'] = 1;
		
				if (isset($_POST["numeCard"])) {
				$donner['cardNumber'] = $_POST["numeCard"];
				}else{
				$erreur[] = 'merci de mettre un numéro carte';
				}
		}else{
			$donner['card'] = 0;
			$donner['cardNumber'] = null;
		}


		if (empty($erreur)) {

			/*INSERT TO INTO nomdelatable SET*/
			$statement = $pdo->prepare("
				INSERT INTO clients
				SET lastname = :lastname,
				firstName = :firstName,
				birthDate = :birthDate,
				card = :card,
				cardNumber = :cardNumber");
/
			$statement->execute($donner);





$erreur[] = "<div class='list-group-item list-group-item-success'>le client est bien ADD'</div>";
			
		}
	}



?>





<?php foreach ($erreur as $value) {
	echo "<li class='list-group-item list-group-item-danger'> $value <li> <br>" ;
}

?>