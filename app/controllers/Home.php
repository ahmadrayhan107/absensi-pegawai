<?php

class Home extends Controller
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['status'])) {
            header('location: ' . BASE_URL . '/Login');
        }
    }

    public function index()
    {
        $data['absensi'] = $this->model('HomeModel')->dataAbsensi();
        $this->view('dashboard');
        $this->view('home', $data);
    }

    public function cariNama()
    {
        $data['title'] = "Data Absensi";
        $data['absensi'] = $this->model('AbsensiModel')->cariDataNama();
        $data['search'] = $_POST['search'];
        $this->view('dashboard');
        $this->view('home', $data);
    }

    public function cariTanggal()
    {
        $data['title'] = "Data Absensi";
        $data['absensi'] = $this->model('AbsensiModel')->cariDataTanggal();
        $data['search'] = $_POST['search'];
        $this->view('dashboard');
        $this->view('home', $data);
    }
}