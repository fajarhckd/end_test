<?php
    class RuangKelas_model extends CI_Model
    {
        public function getAllRuangKelas()
        {
            $query = $this->db->get('daftar_ruangkls');
            return $query->result_array();
        }

        public function tambahDataRuangKelas()
        {
            $data = [
                "no" => $this->input->post('no'),
                "kelas" => $this->input->post('kelas'),
                "ruang"=> $this->input->post('ruang')
            ]; 
            $this->db->insert('daftar_ruangkls',$data);
        }
        
        public function hapusDataRuangKelas($no)
        {
            $this->db->where('no',$no);
            $this->db->delete('daftar_ruangkls');
        }
        public function getruangkelasbyId($no)
        {
            $query = $this->db->get_where('daftar_ruangkls',['no'=>$no]); 
            return $query->row_array();
        }
        public function editDataruangkelas()
        {
            $data = [
                "kelas" => $this->input->post('kelas'),
                "ruang" => $this->input->post('ruang'),
            ];
            $this->db->where('no', $this->input->post('no'));
            $this->db->update('daftar_ruangkls',$data);
        }
    }
?> 