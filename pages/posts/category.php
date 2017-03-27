<?php
$app = App::getInstance();


$categorie = $app->getTable('services')->find($_GET['id']);
if ($categorie===false){
	$app->notFound();
}
$articles = $app->getTable('post')->lastByCategory($_GET['id']);
$services = $app->getTable('services')->all();
?>

<h1><?= $categorie->titre;  ?></h1>

<div class="row">
	<div class="col-md-8">
	<?php foreach ($articles as $post) : ?>
		  <h2>
		    <a href="<?= $post->Url; ?>">
		      <?= $post->titre;?>  
		    </a>
		  </h2>
		  <p><em><?= $post->services;?></em></p>
		  <p><?= $post->Extrait; ?></p>
		<?php endforeach; ?>
	</div>
	<div class="col-md-4">
		<ul>
			<?php foreach ($services as $services) : ?>

				<li><a href="<?= $categorie->Url; ?>"><?= $services->titre; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
