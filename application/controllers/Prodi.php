<?php

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->library('form_validation');
        $this->load->model('Prodi_model');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Prodi'; 
        $data['prodi'] = $this->Prodi_model->getAllProdi();
        $this->load->view('templates/header', $data);
        $this->load->view('prodi/index', $data);
        $this->load->view('templates/footer');
           
    } 
    public function tambah()
    {   
        $data['judul'] = 'Form tambah data Prodi';
        $this->form_validation->set_rules('nama','Nama','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('prodi/tambah');
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->Prodi_model->tambahDataProdi();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('prodi');
        }
    } 
    
    public function hapus($id)
    {
        $this->Prodi_model->hapusDataProdi($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('prodi');
    }

    public function edit($id)
    {   
        $data['judul'] = 'Form edit data Prodi';
        $data['prodi'] = $this->Prodi_model->getProdibyId($id);
        $this->form_validation->set_rules('nama','Nama','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('prodi/edit', $data);
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->Prodi_model->editDataProdi();
            $this->session->set_flashdata('flash','Edit');
            redirect('prodi');
        }
    } 
} 

?>