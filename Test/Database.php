<?php

class Database
{
    private $servername = "localhost";

    private $username = "root";

    private $password = "";

    private $db = "db_absensi-pegawai";

    private $pdo;

    public function __construct()
    {
        try {

            $this->pdo = new PDO("mysql:host=$this->servername;dbname=$this->db", $this->username, $this->password);

            // set the PDO error mode to exception

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";

        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();

        }
    }

    public function execute($query)
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}