<h2>LISTE DES UTILISATEURS</h2>


<table class="table text-center col-xs-10 col-md-12 col-lg-12">
	<thead>
		<tr>
			<td>Nom, Prénom</td>
			<td>Age</td>
			<td>Adresse & Code postal</td>
			<td>Numero de Téléphone</td>
			<td>Service</td>
			<td>ACTION</td>
		</tr>		
	</thead>
	<tbody>
						<?php foreach (App::getInstance()->getTable("Utilisateur")->allAvecService() as $utilisateur): ?>

		<tr>
			<td><?= $utilisateur->identite ?></td>
			<td><?= $utilisateur->Age ?></td>
			<td><?= $utilisateur->adresse.' '.$utilisateur->code_postal ?></td>
			<td><?= $utilisateur->numero_de_telephone ?></td>
			<td><?= $utilisateur->service ?></td>
			<td><form action="admin.php?p=utilisateurs.delete" method="post">
			<input type="hidden" name="id" value="<?= $utilisateur->id; ?>">
			<input type="submit" class="btn btn-danger" name="delete">

			</form>
		</tr>
						<?php endforeach ?>
	</tbody>
</table>

