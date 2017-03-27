<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['firstName'] && $_POST['lastName'] && $_POST['date'] && $_POST['adress'] && $_POST['codePost'] && $_POST['numTel'])) {
			$res = $app->getTable('post')->create(
				["firstName"=>$_POST['firstName'], 
				"lastName"=>$_POST['lastName'],
				"date"=>$_POST['date'],
				"adress"=>$_POST['adress'],
				"codePost"=>$_POST['codePost'],
				"numTel"=>$_POST['numTel'],
				]);
			if ($res) {
				////message Flash
				header('location: admin.php?p=posts.edit');
				?>
				<div class="alert alert-success">Bien enregistré</div> 
				<?php
			}
		}
	}

?>

<h2>Ajout d'utilisateur</h2>
<form method="post" >
	<input type="hidden" name="id" value="">
	<input class="form-control" type="text" name="firstName" value="" placeholder="Prénom">
	<input class="form-control" type="text" name="lastName" value="" placeholder="Nom">
	<input class="form-control" type="Date" name="date" value="" placeholder="Date de naissance">
	<input class="form-control" type="text" name="adress" value="" placeholder="Adresse">
	<input class="form-control" type="value" name="codePost" value="" placeholder="Code Postale">
	<input class="form-control" type="value" name="numTel" value="" placeholder="Numéro de Téléphone">

	<input class="btn btn-primary" type="submit" name="">
</form>

