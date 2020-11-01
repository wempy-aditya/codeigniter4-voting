<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Auth_model;

class Auth extends BaseController
{
    protected $Auth_model;

    public function __construct()
    {
        helper('form');
        helper('cookie');
        $this->cek_login();
        $this->Auth_model = new Auth_model();
    }

	public function index()
	{
        if($this->cek_login() == TRUE){ return redirect()->to(base_url('Vote/divisi')); }
		return view('v_login');
    }
    
	public function login()
	{
        if($this->cek_login() == TRUE){ return redirect()->to(base_url('Vote/divisi')); }
		return view('v_login');
    }
    
    public function proses_login() 
    {
        $validation =  \Config\Services::validation();

        $token=$this->request->getPost('token');
        $nama=$this->request->getPost('nama');
        $nama1=strtoupper($nama);
        $kelas=$this->request->getPost('kelas');
        $data=[
            'token'=>$token,
            'nama'=>$nama1,
            'kelas'=>$kelas
        ];

        if($validation->run($data, 'authlogin') == FALSE){
            // cek keamanan pertama | validasi 
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to('/Auth/index');
        } else {
            // cek keamanan kedua | token 
            $cek_token = $this->Auth_model->cek_token($token);
            if($cek_token == TRUE){
                $no_token=$cek_token['no_token'];
                $keterangan=$cek_token['keterangan'];
                $status=$cek_token['status'];
                if ($status=="aktif") {
                    // cek keamanan ketiga | nama 
                    $cek_nama = $this->Auth_model->cek_nama($keterangan, $nama1);
                    if ($cek_nama == TRUE) {
                            session()->set('nama', $nama1);
                            session()->set('kelas', $kelas);
                            session()->set('no_token', $no_token);
                            session()->set('keterangan', $keterangan);
                            session()->set('status', $status);
                            return redirect()->to('/Vote/divisi');
                    } else{
                        session()->setFlashdata('errors', ['' => 'Anda sudah pernah memilih']);
                        return redirect()->to('/Auth/index');
                    }
                } else {
                    session()->setFlashdata('errors', ['' => 'Token yang Anda masukan tidak aktif']);
                    return redirect()->to('/Auth/index');
                }
            } else {
                session()->setFlashdata('errors', ['' => 'Token yang Anda masukan salah']);
                return redirect()->to('/Auth/index');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Finish/index');
    }

    public function atur() 
    {
        // $cookie = [
        //     'name'   => 'statusclient',
        //     'value'  => 'sudahmemilih',
        //     'expire' => '3600',
        //     'domain' => '.localhost:8080',
        //     'path'   => '/',
        //     'prefix' => 'status',
        //     'secure' => FALSE,
        //     'httponly' => FALSE
        // ];
        // $cookie = [
        //     'name'   => 'statusclient',
        //     'value'  => 'sudahmemilih',
        //     'expire' => '3600',
        // ];
        // $atur = $this->response->setCookie($cookie);
    }

    public function cek() 
    {
        // $cookie = $this->request->getCookie('statusclient');
        // echo($cookie);
        // $this->response->deleteCookie('statusclient');
    }

}