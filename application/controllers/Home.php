<?php

class Home extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        // $data['nama'] = $nama;
        $data['nama'] = 'Kiyoe';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
