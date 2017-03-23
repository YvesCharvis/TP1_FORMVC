<?php
namespace App;

use \App\Database\MysqlDatabase;

class App
{
		public function getDb(){
		$config = Config::getInstance();
		if (is_null($this->db_instance)){
				$this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
		}
		return $this->db_instance;
	}
}