<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Admin_model;

class Admin extends BaseController
{
    protected $Admin_model;

	public function __construct()
    {
        helper('form');
        $this->cek_admin();
        $this->Admin_model = new Admin_model();
    }

    public function index()
    {
        if($this->cek_admin() == TRUE){ return redirect()->to(base_url('Admin/dashboard')); }
		return view('Admin/v_login');
    }

    public function login() 
    {
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        
        $cek_admin = $this->Admin_model->cek_admin($username);
        if($cek_admin == TRUE){
            $username1=$cek_admin['username'];
            $password1=$cek_admin['password'];
            $status=$cek_admin['status'];
            if ($password==$password1) {
                if ($status=="aktif") {
                    session()->set('username', $username1);
                    session()->set('statusadmin', $status);
                    return redirect()->to('/Admin/dashboard');
                } else {
                    session()->setFlashdata('errors', ['' => 'Anda tidak aktif']);
                    return redirect()->to('/Admin/index');
                }
            } else {
                session()->setFlashdata('errors', ['' => 'Password Anda salah gan']);
                return redirect()->to('/Admin/index');
            }
        } else {
            session()->setFlashdata('errors', ['' => 'Anda tidak terdaftar']);
            return redirect()->to('/Admin/index');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Admin/index');
    }

    public function dashboard() 
    {
        if($this->cek_admin() == FALSE){
			session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
			return redirect()->to('/Admin/index');
        }
        $data=[
            'judul' => 'Dashboard',
			'isi' => 'Admin/v_dashboard',
		];
		echo view('admin_layout/v_wrapper', $data);
    }

    public function semua_data() 
    {
        if($this->cek_admin() == FALSE){
			session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
			return redirect()->to('/Admin/index');
        }
        $data=[
            'judul' => 'Semua Data',
            'hasil' => $this->Admin_model->get_semua_data(),
			'isi' => 'Admin/v_hasil',
		];
		echo view('admin_layout/v_wrapper', $data);
    }

    public function data_kelas($kelas) 
    {
        if($this->cek_admin() == FALSE){
			session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
			return redirect()->to('/Admin/index');
        }
        $data=[
            'judul' => 'Hanya data kelas '.$kelas,
            'hasil' => $this->Admin_model->get_data_kelas($kelas),
			'isi' => 'Admin/v_hasil',
		];
		echo view('admin_layout/v_wrapper', $data);
    }

    public function data_divisi($divisi) 
    {
        if($this->cek_admin() == FALSE){
			session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
			return redirect()->to('/Admin/index');
        }
        if ($divisi == 1) {
            $divisi1="pemrograman";
        } elseif ($divisi == 2) {
            $divisi1="aeromodelling";
        } else {
            $divisi1="civil";
        }
        $data=[
            'judul' => 'Hanya data divisi '.$divisi1,
            'hasil' => $this->Admin_model->get_data_divisi($divisi),
			'isi' => 'Admin/v_hasil',
		];
		echo view('admin_layout/v_wrapper', $data);
    }
}