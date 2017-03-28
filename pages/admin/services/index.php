<h2>LISTE DES UTILISATEURS</h2>


<table class="table text-center col-xs-10 col-md-12 col-lg-12">
	<thead>
		<tr>
			<td>Nom</td>
			<td>Description</td>
			
			<td>ACTION</td>
		</tr>		
	</thead>
	<tbody>
						<?php foreach (App::getInstance()->getTable("Service")->all() as $service): ?>

		<tr>
			<td><?= $service->nom_du_service ?></td>
			<td><?= $service->description ?></td>
			
			<td><form action="admin.php?p=services.delete" method="post">
			<input type="hidden" name="id" value="<?= $service->id; ?>">
			<input type="submit" class="btn btn-danger" value="Delete">

			</form>
		</tr>
						<?php endforeach ?>
	</tbody>
</table>

