<?php
    class Dosen_model extends CI_Model
    {
        public function getAllDosen()
        {
            $query = $this->db->get('daftar_dosen');
            return $query->result_array();
        }
        public function tambahDataDosen()
        {
            $data = [
                "nip" => $this->input->post('nip'),
                "nama" => $this->input->post('nama'),
                "prodi" => $this->input->post('prodi'),
            ];
            $this->db->insert('daftar_dosen',$data);
        }
        public function hapusDataDosen($nip)
        {
            $this->db->where('nip', $nip);
            $this->db->delete('daftar_dosen');
        }
        public function getDosenbyNIP($nip)
        {
            $query = $this->db->get_where('daftar_dosen',['nip'=>$nip]);
            return $query->row_array();
        }
        public function editDataDosen()
        {
            $data = [
                "nip" => $this->input->post('nip'),
                "nama" => $this->input->post('nama'),
                "prodi" => $this->input->post('prodi'),
            ];
            $this->db->where('nip', $nip);
            $this->db->replace('daftar_dosen',$data);
        }
    }
?>