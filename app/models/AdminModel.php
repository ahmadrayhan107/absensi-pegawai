<?php
class AdminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new KoneksiBasisData;
    }

    public function getAllAdmin()
    {
        return $this->db->executeAll("SELECT * FROM admin");
    }

    public function getAdmin($id)
    {
        return $this->db->executeRow("SELECT * FROM admin WHERE id_admin = $id");
    }

    public function createAdmin($data)
    {
        $query = "  INSERT INTO admin(username, password, nama_petugas, level_akses)
                    VALUES('$data[username]', md5('$data[password]'), '$data[nama_petugas]', '$data[level_akses]')";
        $this->db->execute($query);
    }

    public function updateAdmin($data, $id)
    {
        $query =    "  UPDATE admin
                        SET username = '$data[username]',
                            nama_petugas = '$data[nama_petugas]',
                            level_akses = '$data[level_akses]'
                        WHERE id_admin = $id
                    ";
        $this->db->execute($query);
    }

    public function updatePassword($data, $id)
    {
        $password = md5($data['password']);
        $query =    "   UPDATE admin
                        SET password = '$password'
                        WHERE id_admin = '$id'
                    ";
        $this->db->execute($query);
    }

    public function deleteAdmin($id)
    {
        $query = "DELETE FROM admin WHERE id_admin = $id";
        $this->db->execute($query);
    }
}