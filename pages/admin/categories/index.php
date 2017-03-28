<?php
	$categories = App::getInstance()->getTable('Category')->all();


?>

<h1>Edition des categories</h1>
<div class="row">
<p><a href="admin.php?p=categories.add">Cree un categorie</a></p>
		<table  class="col-md-12 table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Titre</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($categories as  $category) : ?>
				<tr>
						<td><?= $category->id; ?></td>
						<td><?= $category->titre; ?></td>
						<td ><a class="btn btn-primary" href="admin.php?p=categories.single&id=<?= $category->id; ?>">edit</a>
<form method="post" action="admin.php?p=categories.delete" style="display: inline-block;">
	<input type="hidden" name="id" value="<?= $category->id; ?>">
	<input class="btn btn-danger" type="submit" name="OK" value="Delete"> 
</form>
						</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>	
</div>
