<?php
$posts = App::getInstance()->getTable('post')->all();

?>


<h1>Gestion Utilisateurs</h1>


<table class="table">
	<thead>
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>lastName</td>
			<td>naissance</td>
			<td>Adresse</td>
			<td>Code Postal</td>
			<td>Numéro De Tel</td>
			<td>Services</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($posts as $post) : ?>
		<tr>
			
		<td><?= $post->id; ?></td>
		<td><?= $post->firstName; ?></td>
		<td><?= $post->lastName; ?></td>
		<td><?= $post->date; ?></td>
		<td><?= $post->adress; ?></td>
		<td><?= $post->codePost; ?></td>
		<td><?= $post->numTel; ?></td>
		

		<td>
<form method="post" action="admin.php?p=posts.delete">
	<input type="hidden" name="id" value="<?= $post->id; ?>">
	<input class="btn btn-danger" type="submit" name="OK" value="Delete">
</form>
			</a>
		</td>


		</tr>
	<?php endforeach; ?>
	</tbody>
</table>