
<?php
$posts = App::getInstance()->getTable('Post')->all();

?>
	<?php foreach ($posts as $post) : ?>
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
	
		<tr>
			
		<td><?= $post->id; ?></td>
		<td><?= $post->firstName; ?></td>
		<td><?= $post->lastName; ?></td>
		<td><?= $post->date; ?></td>
		<td><?= $post->adress; ?></td>
		<td><?= $post->codePost; ?></td>
		<td><?= $post->numTel; ?></td>
		<td><?= $post->service_id; ?></td>
		</tr>
	</tbody>

	</table>


<?php endforeach; ?>
