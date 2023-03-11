<?php

class Logout
{
    public function index()
    {
        session_destroy();

        header("location: " . BASE_URL . "/Absensi");
    }
}