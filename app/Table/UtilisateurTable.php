<?php
namespace App\Table;
use Core\Table\Table;
/**
* Class pour la table Utilisateurs
*/
class UtilisateurTable extends Table
{
	public function allAvecService()
	{
		return $this->query("SELECT utilisateurs.id,
								utilisateurs.nom,
								utilisateurs.prenom,
								utilisateurs.adresse,
								utilisateurs.date_de_naissance,
								utilisateurs.code_postal,
								utilisateurs.numero_de_telephone,
								services.nom_du_service as service
								FROM utilisateurs 
								LEFT JOIN services 
									   ON services_id = services.id
		");
	}				
	
}

?>