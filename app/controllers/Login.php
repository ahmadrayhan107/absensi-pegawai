<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login');
    }

    public function prosesLogin()
    {
        $row = $this->model("LoginModel")->checkLogin($_POST);
        if ($row > 0) {
            session_start();
            $_SESSION['status'] = "login";
            $_SESSION['username'] = $row['nama_petugas'];
            header("location: " . BASE_URL . "/Home");
        }
    }
}