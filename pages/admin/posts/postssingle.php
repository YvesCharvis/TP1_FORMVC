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
				]);;
			if ($res) {
				?>
				<div class="alert alert-success">Bien enregistré</div> 
				<?php
			}
		}
	}
	$post = $app->getTable('Post')->find($_GET['id']);
	if ($post===false) {
		$app->notFound();
	}
	$app->titre = $post->titre;
?>

<form method="post" action="admin.php?p=posts.single&id=<?= $post->id; ?>">
	<input type="hidden" name="id" value="">
	<input class="form-control" type="text" name="firstName" value="" placeholder="Prénom">
	<input class="form-control" type="text" name="lastName" value="" placeholder="Nom">
	<input class="form-control" type="Date" name="date" value="" placeholder="Date de naissance">
	<input class="form-control" type="text" name="adress" value="" placeholder="Adresse">
	<input class="form-control" type="value" name="codePost" value="" placeholder="Code Postale">
	<input class="form-control" type="value" name="numTel" value="" placeholder="Numéro de Téléphone">
</form>



  
<ul class="pager">
    <li><a href="index.php?p=<?=$connect ?>"><?= $connect ?></a></li>
    <li><a href="admin.php">Panel Administration</a></li>
</ul>

