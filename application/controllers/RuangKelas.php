<?php

class RuangKelas extends CI_Controller
{
    public function __construct()
    { 
        parent ::__construct();
        $this->load->library('form_validation');
        $this->load->model('RuangKelas_model');
    }
    public function index()
    {
        $this->load->model('RuangKelas_model');
        $data['judul'] = 'Daftar Ruang Kelas Kuliah';
        $data['ruangkelas'] = $this->RuangKelas_model->getAllRuangKelas();
        $this->load->view('templates/header', $data);
        $this->load->view('ruangkelas/index', $data);
        $this->load->view('templates/footer');
           
    }
    
    public function tambah()
    {   
        $data['judul'] = 'Form tambah data RuangKelas';
        $this->form_validation->set_rules('ruang','ruang','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ruangkelas/tambah');
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->RuangKelas_model->tambahDataRuangKelas();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('RuangKelas');
        }
    } 
    
    public function hapus($no)
    {
        $this->RuangKelas_model->hapusDataRuangKelas($no);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('RuangKelas');
    }

    public function edit($no)
    {   
        $data['judul'] = 'Form edit data ruangkelas';
        $data['ruangkelas'] = $this->RuangKelas_model->getruangkelasbyId($no);
        $this->form_validation->set_rules('ruang','Ruang','required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ruangkelas/edit', $data);
            $this->load->view('templates/footer');
        }
        else 
        {
            $this->RuangKelas_model->editDataruangkelas();
            $this->session->set_flashdata('flash','Edit');
            redirect('ruangkelas');
        }
    } 
}
 
?>