<?php

class Pegawai extends Controller{

    public function __construct(){
        session_start();
        if(!isset($_SESSION['status'])){
            header('location: ' . BASE_URL . '/Login');
        }
    }
    
    public function index(){
        $data['pegawai'] = $this->model('PegawaiModel')->dataPegawai();
        $this->view('dashboard');
        $this->view('pegawai',$data);
    }

    public function hapus(){
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if($this->model('PegawaiModel')->hapusData($url[5])>0){
            header('location:' . BASE_URL . '/Pegawai');
            exit;
        }
        else{
            header('location' . BASE_URL . '/Pegawai');
            echo "penghapusan data gagal";
            exit;
        }
    }

    public function cari(){
        $data['title'] = "Data Pegawai";
        $data['pegawai'] = $this->model('PegawaiModel')->cariPegawai();
        $data['search'] = $_POST['search'];
        $this->view('dashboard');
        $this->view('pegawai',$data);
    }

    public function viewTambah(){
        $data['title'] = 'tambah pegawai';
        $this->view('viewInsertPegawai',$data);
    }

    public function tambah(){
        if(isset($_POST['submit'])){
            if( $this->model('PegawaiModel')->nambahPegawai($_POST) > 0 ) {
                header('location: '. BASE_URL . '/pegawai');
                exit;	
             }
        }
    }

    public function viewUpdate(){
       $data['title'] = "edit pegawai";
       $url = explode('/', $_SERVER['REQUEST_URI']);
       $data['pegawai'] = $this->model('PegawaiModel')->getPegawaiById($url[5]);
       $this->view('ViewUpdatePegawai',$data);
    }

    public function update(){
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if($this->model('PegawaiModel')->updatePegawai($_POST, $url[5])>0){
            echo "berhasil";
            header('location:' . BASE_URL .'/Pegawai');
            exit;
        }
    }

}