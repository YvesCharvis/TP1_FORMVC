<?php
namespace App\Entity;
use Core\Entity\Entity;
/**
* Class pour stocker enregistrement de la table Utilisateurs
*/
class UtilisateurEntity extends Entity
{
	public function getAge()
	{

		return (int)((time()-strtotime($this->date_de_naissance))/(60*60*24*365));
	}



	public function getIdentite()
	{
		return strtoupper($this->nom).','.ucfirst($this->prenom);
	}

}
?>