<?php
    class Makul_model extends CI_Model
    {
        public function getAllMakul()
        {
            $query = $this->db->get('daftar_mk');
            return $query->result_array();
        }
        
        public function tambahDataMakul()
        {
            $data = [
                "no" => $this->input->post('no'),
                "kelas" => $this->input->post('kelas'),
                "daftar_makul"=> $this->input->post('daftar_makul')
            ]; 
            $this->db->insert('daftar_mk',$data);
        }
        
        public function hapusDataMakul($no)
        {
            $this->db->where('no',$no);
            $this->db->delete('daftar_mk');
            
        }

        public function getMakulbyNo($no)
        {
            $query = $this->db->get_where('daftar_mk',['no'=>$no]); 
            return $query->row_array();
        }
        public function editDataMakul()
        {
            $data = [
                "kelas" => $this->input->post('kelas'),
                "daftar_makul" => $this->input->post('daftar_makul'),
            ];
            $this->db->where('no', $this->input->post('no'));
            $this->db->update('daftar_mk',$data);
        }
    } 
            

?>