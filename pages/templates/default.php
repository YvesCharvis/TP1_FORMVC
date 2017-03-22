<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    	<!-- Bootstrap core CSS -->
    	<link href="frameworks/Bootstrap.min.css" rel="stylesheet">
   		<link href="frameworks/materialize.min.css" rel="stylesheet">

    	<link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
<body>

<div class="row">
    <form class="col s6">
    <div class="row">
    	<div class="input-field col s6">
			<label class=""><input type="text" class="validate" name="nom" placeholder="Nom"></label> 
		</div>
		<div class="input-field col s6">		
			<label class=""><input type="text" class="validate" name="prenom" placeholder="Prenom"></label>
		</div>
	</div>
	<div class="row">
    	<div class="input-field col s6">
			<label class=""><input type="date" class="form-control" name="naissance"></label>
		</div>
	</div>
	<div class="row">
        <div class="input-field col s6">	
			<label class=""><input type="text" class="form-control" name="adresse" placeholder="Adresse"></label>
		</div>
        <div class="input-field col s6">	 	
			<label class="">  <input type="number" class="form-control" name="postal" placeholder="Code Postale"></label>
		</div>
	</div>	 
	<div class="row">
        <div class="input-field col s4">		
			<label class=""><input type="number" class="form-control" name="tel" placeholder="Numéro de téléphone"></label>
		</div>
	</div>
</form>

</body>
</html>
