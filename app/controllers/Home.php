<?php

// Ini adalah controller penghubung antara view dan model
// Kamu dapar mendefinisikan semuanya disini :)

 class Home extends Controller {
    public function index() {
        $data['judul'] = 'Welcome Easier Code';
        $data['nama'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('home/welcome_easier_code', $data);
        $this->view('templates/footer');
    }
 }

