<?php namespace App\Models;
use CodeIgniter\Model;

class Admin_model extends Model
{ 
    public function cek_admin($username)
    {
        $query = $this->db->table('admin')
                ->where('username', $username)
                ->countAll();

        if($query >  0){
            $hasil = $this->db->table('admin')
                    ->where('username', $username)
                    ->limit(1)
                    ->get()
                    ->getRowArray();
        } else {
            $hasil = array(); 
        }
        return $hasil;
    }

    public function get_semua_data()
    {
        return $this->db->table('pemilih')->join('divisi', 'divisi.id_divisi = pemilih.divisi_pilihan')->get()->getResultArray();
    }
    public function get_data_kelas($kelas)
    {
        return $this->db->table('pemilih')->where('status', $kelas)->join('divisi', 'divisi.id_divisi = pemilih.divisi_pilihan')->get()->getResultArray();
    }
    public function get_data_divisi($divisi)
    {
        return $this->db->table('pemilih')->where('divisi_pilihan', $divisi)->join('divisi', 'divisi.id_divisi = pemilih.divisi_pilihan')->get()->getResultArray();
    }
}