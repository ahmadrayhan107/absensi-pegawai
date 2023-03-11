<?php

class HomeModel{
    private $table = 'absensi';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function dataAbsensi(){
        $this->db->query("SELECT * from absensi inner join pegawai on absensi.id_pegawai = pegawai.id_pegawai");
        return $this->db->resultSet();
    }

    
}