
<?php
$posts = App::getInstance()->getTable('post')->all();

?>
	
<table class="table">

	

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
	
<?php foreach ($posts as $post) : ?>
	
		<tr>
			
		<td><?= $post->id; ?></td>
		<td><?= $post->firstName; ?></td>
		<td><?= $post->lastName; ?></td>
		<td><?= $post->date; ?></td>
		<td><?= $post->adress; ?></td>
		<td><?= $post->codePost; ?></td>
		<td><?= $post->numTel; ?></td>
		
		</tr>


<?php endforeach; ?>

	</table>

