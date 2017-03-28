<?php
if (!isset($_POST['id'])) {
	header('location: index.php?p=utilisateurs');
	exit();
}
?>
<h2>LISTE DES UTILISATEURS PAR SERVICE</h2>
<div class="row">
	<form action="index.php?p=utilisateurs.service" method="post" class="col-md-3">
		<select name="service" class="form form-control" >
			<?php foreach (App::getInstance()->getTable('Service')->all() as $service): ?>
				<option value="<?= $service->id ?>"> <?= ($_POST['id']==$service->id)? "selected='selected'": "";?>
				<?= $service->nom_du_service ?>		
				</option>
			<?php endforeach ?>
		</select>
			<input class="btn btn-primary" type="submit" value="filter">	
	</form>
</div>

<table class="table text-center col-xs-10 col-md-12 col-lg-12">
	<thead>
		<tr>
			<td>Nom, Prénom</td>
			<td>Age</td>
			<td>Adresse & Code postal</td>
			<td>Numero de Téléphone</td>
			<td>Service</td>
		</tr>		
	</thead>
	<tbody>
						<?php foreach (App::getInstance()->getTable("Utilisateur")->allByService($_POST['id']) as $utilisateur): ?>

		<tr>
			<td><?= $utilisateur->identite ?></td>
			<td><?= $utilisateur->Age ?></td>
			<td><?= $utilisateur->adresse.' '.$utilisateur->code_postal ?></td>
			<td><?= $utilisateur->numero_de_telephone ?></td>
			<td><?= $utilisateur->service ?></td>
		</tr>
						<?php endforeach ?>
	</tbody>
</table>

