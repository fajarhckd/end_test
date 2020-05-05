<?php
    class Kelas_model extends CI_Model
    {
        public function getAllKelas()
        {
            $query = $this->db->get('daftar_kelas');
            return $query->result_array();
        }
        public function tambahDataKelas()
        {
            $data = [
                "no" => $this->input->post('no'), 
                "kelas" => $this->input->post('kelas'),
                "prodi"=> $this->input->post('prodi')
            ]; 
            $this->db->insert('daftar_kelas',$data);
        }
        
        public function hapusDataKelas($no)
        {
            $this->db->where('no',$no);
            $this->db->delete('daftar_kelas');
        }
        public function getKelasbyNo($no)
        {
            $query = $this->db->get_where('daftar_kelas',['no'=>$no]); 
            return $query->row_array();
        }
        public function editDataKelas()
        {
            $data = [
                "kelas" => $this->input->post('kelas'),
                "prodi" => $this->input->post('prodi'),
            ];
            $this->db->where('no', $this->input->post('no'));
            $this->db->update('daftar_kelas',$data);
        }
    }
?>