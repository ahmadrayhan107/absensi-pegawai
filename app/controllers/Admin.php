<?php

class Admin extends Controller
{

    public function __construct(){
        session_start();
        if(!isset($_SESSION['status'])){
            header('location: ' . BASE_URL . '/Login');
        }
    }

    public function index()
    {
        $data['admin'] = $this->model("AdminModel")->getAllAdmin();
        $this->view('dashboard', $data);
        $this->view('admin', $data);
    }

    public function add()
    {
        $this->view('insert-admin');
    }

    public function edit()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        $data = $this->model("AdminModel")->getAdmin($url[5]);
        $this->view('edit-admin', $data);
    }

    public function editPassword()
    {
        $this->view('edit-password');
    }

    public function insert()
    {
        $this->model("AdminModel")->createAdmin($_POST);
        header("location: " . BASE_URL . "/Admin");
    }

    public function modify()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        $this->model("AdminModel")->updateAdmin($_POST, $url[5]);
        header("location: " . BASE_URL . "/Admin");
    }

    public function modifyPassword()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        $this->model("AdminModel")->updatePassword($_POST, $url[5]);
        header("location: " . BASE_URL . "/Admin");
    }

    public function remove()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        $this->model("AdminModel")->deleteAdmin($url[5]);
        header("location: " . BASE_URL . "/Admin");
    }
}