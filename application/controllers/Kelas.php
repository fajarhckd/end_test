<?php

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kelas_model');
    }
    public function index()
    {
        $this->load->model('Kelas_model');
        $data['judul'] = 'Daftar Kelas';
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        $this->load->view('templates/header', $data);
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/footer');
           
    }
    public function tambah()
    {   
        $data['judul'] = 'Form tambah data kelas';
        $this->form_validation->set_rules('kelas','Kelas','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('kelas/tambah');
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->Kelas_model->tambahDataKelas();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('Kelas');
        }
    } 
    
    public function hapus($no)
    {
        $this->Kelas_model->hapusDataKelas($no);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('Kelas');
    }
    public function edit($no)
    {   
        $data['no'] = 'Form edit data Kelas';
        $data['kelas'] = $this->Kelas_model->getKelasbyNo($no);
        $this->form_validation->set_rules('daftar_kelas','kelas','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('kelas/edit', $data);
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->Kelas_model->editDataKelas();
            $this->session->set_flashdata('flash','Edit');
            redirect('kelas');
        }
    } 
}

?>