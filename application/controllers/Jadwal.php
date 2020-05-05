<?php

class Jadwal extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Kelas';
        //$data['kelas'] = $this->Jadwal_model->getAllKelas();
        $this->load->view('templates/header', $data);
        $this->load->view('jadwal/index', $data);
        $this->load->view('templates/footer');
    }
}
?> 