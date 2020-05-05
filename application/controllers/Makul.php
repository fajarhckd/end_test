<?php

class Makul extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->library('form_validation');
        $this->load->model('Makul_model');
    }
    public function index()
    {
        $this->load->model('Makul_model');
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['makul'] = $this->Makul_model->getAllMakul();
        $this->load->view('templates/header', $data);
        $this->load->view('makul/index', $data);
        $this->load->view('templates/footer');
           
    }

    public function tambah()
    {   
        $data['judul'] = 'Form tambah data Makul';
        $this->form_validation->set_rules('daftar_makul','Daftar_MK','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('makul/tambah');
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->Makul_model->tambahDataMakul();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('Makul');
        }
    } 
    
    public function hapus($no)
    {
        $this->Makul_model->hapusDataMakul($no);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('Makul');
    }

    public function edit($no)
    {   
        $data['judul'] = 'Form edit data Mata Kuliah';
        $data['makul'] = $this->Makul_model->getMakulbyNo($no);
        $this->form_validation->set_rules('daftar_makul','Makul','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('makul/edit', $data);
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->Makul_model->editDataMakul();
            $this->session->set_flashdata('flash','Edit');
            redirect('Makul');
        }
    } 
} 

?>