<?php
class Model{

	public $database = 'default';

	public function __construct(){
		$conf = Conf::$databases[$this->database];
		try{
			$pdo = new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';'.$conf['login'].$conf['password']);
		}catch(PDOException $e){
			if(Conf::$debug >= 1){
				die($e->getMessage());
			}else{
				die("Impossible de se connecter à la base de données");
			}
		}
	}

	public function find(){

	}
}
?>
