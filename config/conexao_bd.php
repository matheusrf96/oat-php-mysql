<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class DB{
    private $dbh;
    private $stmt;

    public function __construct($host, $database, $user, $password){
        try{
            $this->dbh = new PDO("mysql:host=".$host.";dbname=".$database, $user, $password);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}
	public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch(true){
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
					default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	public function execute(){
		return $this->stmt->execute();
	}
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function singleResult(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
}

$db = new DB();

?>