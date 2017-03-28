<?php
	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['titre'])) {
			$res = $app->getTable('category')->create(
				['titre'=>$_POST['titre']]);
			if ($res) {
				////message flash
				header('location: admin.php?p=categories.edit');
			}
		}
		
	}

?>

<h2>Cree un nouvel article</h2>
<form method="post">
	<input class="form-control" type="text" name="titre" value="" placeholder="Merci de mettre un titre">
	<input class="btn btn-primary" type="submit" name="">
	
</form>