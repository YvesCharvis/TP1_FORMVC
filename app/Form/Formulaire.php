<?php
namespace App;

/**
* 
*/
class form
{

$form = [];	

function formulaire()
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

		if (isset($_POST["card"])) {
			$donner['card'] = 1;
		
				if (isset($_POST["numeCard"])) {
				$donner['cardNumber'] = $_POST["numeCard"];
				}else{
				$form[] = 'merci de mettre un numéro carte';
				}
		}else{
			$donner['card'] = 0;
			$donner['cardNumber'] = null;
		}


		if (empty($form)) {

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





$form[] = "<div class='list-group-item list-group-item-success'>le client est bien ADD'</div>";
			
		}
	}



?>





<?php foreach ($form as $value) {
	echo "<li class='list-group-item list-group-item-danger'> $value <li> <br>" ;
}

}
?>