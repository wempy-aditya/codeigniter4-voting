<?php namespace App\Models;
use CodeIgniter\Model;

class Vote_model extends Model
{ 
    public function get_data_divisi()
    {
        return $this->db->table('divisi')->get()->getResultArray();
    }
    public function pilih_divisi($data) 
    {
        return $this->db->table('pemilih')->insert($data);
    }
}