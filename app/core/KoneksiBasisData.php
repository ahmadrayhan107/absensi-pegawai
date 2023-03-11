<?php
class KoneksiBasisData
{
	private $host = DB_HOST;
	private $username = DB_USER;
	private $password = DB_PASS;
	private $database = DB_NAME;

	private $dbh;

	public function __construct()
	{
		try {
            $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
			$e->getMessage();
        }
	}

	public function executeAll($query)
	{
		$stmt = $this->dbh->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function executeRow($query)
	{
		$stmt = $this->dbh->prepare($query);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function execute($query){
		$stmt = $this->dbh->prepare($query);
		$stmt->execute();
	}
}