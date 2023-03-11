<?php

class Absensi extends Controller
{
    public function index()
    {
        $this->view('index');
    }

    public function isiDataHadir(){
		if(($this->model('AbsensiModel')->cekData($_POST))>0){
			if($this->model('AbsensiModel')->updateJamPulang($_POST)>0){
				header('location:' . BASE_URL . '/Absensi');
				exit;
			}
			if($this->model('AbsensiModel')->tambahAbsensiHadir($_POST)>0){
				header('location:' . BASE_URL . '/Absensi');
				exit;
			}
		}
		else{
			if($this->model('AbsensiModel')->tambahAbsensiHadir($_POST)>0){
				header('location:' . BASE_URL . '/Absensi');
				echo "Absen Berhasil";
				exit;
			}
		}
	}

	public function isiDataIzin(){
		if(($this->model('AbsensiModel')->cekData($_POST))>0){
			if($this->model('AbsensiModel')->updateJamPulang($_POST)>0){
				header('location:' . BASE_URL . '/Absensi');
				exit;
			}
			if($this->model('AbsensiModel')->tambahAbsensiIzin($_POST)>0){
				header('location:' . BASE_URL . '/Absensi');
				echo "Absen Berhasil";
				exit;
			}
		}
		else{
			if($this->model('AbsensiModel')->tambahAbsensiIzin($_POST)>0){
				header('location:' . BASE_URL . '/Absensi');
				echo "Absen Berhasil";
				exit;
			}
		}
	}

	public function hapus(){
		$url = explode('/', $_SERVER['REQUEST_URI']);
        if($this->model('AbsensiModel')->hapusData($url[5])>0){
            header('location:' . BASE_URL . '/Home');
            exit;
        }
        else{
            header('location' . BASE_URL . '/Home');
            echo "penghapusan data gagal";
            exit;
        }
    }

	public function viewUpdate(){
		$data['title'] = "edit absensi";
		$url = explode('/', $_SERVER['REQUEST_URI']);
		$data['absensi'] = $this->model('AbsensiModel')->getAbsensiById($url[5]);
		$this->view('viewUpdateAbsensi',$data);
	 }
 
	 public function update(){
		 if($this->model('AbsensiModel')->updateAbsensi($_POST)>0){
			 echo "berhasil";
			 header('location:' . BASE_URL .'/home');
			 exit;
		 }
	 }
}