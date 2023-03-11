<?php

class AbsensiModel{
    private $table = 'absensi';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAbsensiById($id)
	{
		$this->db->query('SELECT * FROM absensi WHERE id_absensi=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

    public function tambahAbsensiHadir($data){
        $query = "INSERT INTO absensi(jam_datang, jam_pulang, status, id_pegawai, tanggal) values(time(now()), ' ', 'Hadir', '$data[nomor]', date(now()))";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahAbsensiIzin($data){
        $query = "INSERT INTO absensi(jam_datang, jam_pulang, status, id_pegawai, tanggal) values(time(now()), ' ', 'Izin', '$data[nomor]', date(now()))";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateJamPulang($data){
        $query = "UPDATE absensi set jam_pulang = time(now()) where tanggal = date(now()) and id_pegawai = '$data[nomor]'";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekData($data){
        $this->db->query("select count(*) from absensi where tanggal = date(now()) and id_pegawai= '$data[nomor]'");
        return $this->db->single();
    }

    public function hapusData($id){
        $this->db->query("DELETE FROM absensi where id_absensi =:id");
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function cariDataNama(){
        $key = $_POST['search'];
        $this->db->query("SELECT * from absensi inner join pegawai on absensi.id_pegawai = pegawai.id_pegawai WHERE nama_pegawai LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }

    public function cariDataTanggal(){
        $key = $_POST['search'];
        $this->db->query("SELECT * from absensi inner join pegawai on absensi.id_pegawai = pegawai.id_pegawai WHERE tanggal LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }

    public function updateAbsensi($data){
        $query = "UPDATE absensi set status = :status,
                                     jam_datang = :jam_datang,
                                     jam_pulang = :jam_pulang,
                                     tanggal = :tanggal_absensi
                    WHERE id_absensi = :id_absensi";
        $this->db->query($query);
        $this->db->bind('status',$data['status']);
        $this->db->bind('jam_datang',$data['jam_datang']);
        $this->db->bind('jam_pulang',$data['jam_pulang']);
        $this->db->bind('tanggal_absensi',$data['tanggal_absensi']);
        $this->db->bind('id_absensi',$data['id_absensi']);
        
        $this->db->execute();

		return $this->db->rowCount();
    }
}