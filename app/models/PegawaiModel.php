<?php

class PegawaiModel{
    private $table = 'pegawai';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }


    public function dataPegawai(){
        $this->db->query("SELECT * from pegawai");
        return $this->db->resultSet();
    }

    public function getPegawaiById($id)
	{
		$this->db->query('SELECT * FROM pegawai WHERE id_pegawai=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

    public function hapusData($id){
        $this->db->query("DELETE FROM pegawai where id_pegawai =:id");
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function nambahPegawai($data){
        $query = "INSERT INTO pegawai(nama_pegawai, email, telepon, department, kode_akses) VALUES(:nama_pegawai, :email, :telepon, :department, :kode_akses)";
        $this->db->query($query);
        $this->db->bind('nama_pegawai', $data['nama_pegawai']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('department', $data['department']);
        $this->db->bind('kode_akses', $data['kode_akses']);
        $this->db->execute();

		return $this->db->rowCount();
    }

    public function cariPegawai(){
        $key = $_POST['search'];
        $this->db->query("SELECT * FROM pegawai WHERE nama_pegawai LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }

    public function updatePegawai($data, $id){
        $query = "UPDATE pegawai set nama_pegawai = :nama_pegawai,
                                     email = :email,
                                     telepon = :telepon,
                                     department = :department,
                                     kode_akses = :kode_akses
                    WHERE id_pegawai = :id_pegawai";
        $this->db->query($query);
        $this->db->bind('id_pegawai',$id);
        $this->db->bind('nama_pegawai', $data['nama_pegawai']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('department', $data['department']);
        $this->db->bind('kode_akses', $data['kode_akses']);
        $this->db->execute();

		return $this->db->rowCount();
    }
}