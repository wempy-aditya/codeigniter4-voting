<?php namespace App\Models; 
use CodeIgniter\Model;

class Auth_model extends Model
{ 
    public function cek_token($token)
    {
        $query = $this->db->table('token')
                ->where('no_token', $token)
                ->countAll();

        if($query >  0){
            $hasil = $this->db->table('token')
                    ->where('no_token', $token)
                    ->limit(1)
                    ->get()
                    ->getRowArray();
        } else {
            $hasil = array(); 
        }
        return $hasil;
    }

    public function cek_nama($keterangan, $nama1)
    {
        $query1 = $this->db->table('pemilih')->where('status', $keterangan)->like('nama', $nama1)->countAllResults();

        if ($query1 == 0) {
            $hasil1 = TRUE;
        } else {
            $hasil1 = FALSE; 
        }
        return $hasil1;
    }
}