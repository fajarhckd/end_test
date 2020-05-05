<?php
    class Prodi_model extends CI_Model
    {
        public function getAllProdi()
        {
            $query = $this->db->get('daftar_prodi');
            return $query->result_array();
        }
        
        public function tambahDataProdi()
        {
            $data = [
                "id" => $this->input->post('id'),
                "nama" => $this->input->post('nama'),
            ];
            $this->db->insert('daftar_prodi',$data);
        }
        
        public function hapusDataProdi($id)
        {
            $this->db->where('id',$id);
            $this->db->delete('daftar_prodi');
            
        }
        public function getProdibyId($id)
        {
            $query = $this->db->get_where('daftar_prodi',['id'=>$id]); 
            return $query->row_array();
        }
        public function editDataProdi()
        {
            $data = [
                "nama" => $this->input->post('nama'),
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('daftar_prodi',$data);
        }
    }  
        ?>   