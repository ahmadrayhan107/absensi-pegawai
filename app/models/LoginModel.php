<?php

class LoginModel{
    private $db;

    public function __construct()
    {
        $this->db = new KoneksiBasisData;
    }

    public function checkLogin($data)
    {
        $query = "SELECT * FROM admin WHERE username = '$data[username]' AND password = md5('$data[password]')";
        $data = $this->db->executeRow($query);
        return $data;
    }
}