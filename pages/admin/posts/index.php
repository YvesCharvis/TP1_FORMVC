<?php
	$posts = App::getInstance()->getTable('Post')->all();


?>

<h1>Edition des Posts</h1>
<div class="row">
<p><a href="admin.php?p=posts.add">Cree un posts</a></p>
		<table  class="col-md-12 table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Titre</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($posts as  $post) : ?>
				<tr>
						<td><?= $post->id; ?></td>
						<td><?= $post->titre; ?></td>
						<td ><a class="btn btn-primary" href="admin.php?p=posts.single&id=<?= $post->id; ?>">edit</a>
<form method="post" action="admin.php?p=posts.delete" style="display: inline-block;">
	<input type="hidden" name="id" value="<?= $post->id; ?>">
	<input class="btn btn-danger" type="submit" name="OK" value="Delete"> 
</form>
						</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>	
</div>
