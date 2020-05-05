<?php

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dosen_model');
    }
    public function index() 
    {
        $data['judul'] = 'Daftar Dosen';
        $data['dosen'] = $this->Dosen_model->getAllDosen();
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
            
    }
    public function tambah()
    {   
        $data['judul'] = 'Form tambah data Dosen';
        $this->form_validation->set_rules('nip','NIP','required');
        $this->form_validation->set_rules('nama','Nama','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('dosen/tambah');
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->Dosen_model->tambahDataDosen();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('Dosen');
        }
    }
    public function hapus($nip)
    {
        $this->Dosen_model->hapusDataDosen($nip);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('Dosen'); 
    }
    
    public function edit($nip)
    {   
    $data['judul'] = 'Form edit data Dosen';
    $data['dosen'] = $this->Dosen_model->getDosenbyNIP($nip);
    $data['prodi'] = ['IK','LT','EK','TK','JK'];
    $this->form_validation->set_rules('nip','NIP','required');
    $this->form_validation->set_rules('nama','Nama','required');
    if ($this->form_validation->run()==FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/edit', $data);
        $this->load->view('templates/footer');
    }
    else 
    {
        $this->Dosen_model->editDataDosen();
        $this->session->set_flashdata('flash','Diedit');
        redirect('Dosen');
    }
    }
}
?>