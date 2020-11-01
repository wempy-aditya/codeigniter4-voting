<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Vote_model;

class Vote extends BaseController
{
    protected $Vote_model;

	public function __construct()
    {
        $this->cek_login();
        $this->Vote_model = new Vote_model();
    }

    public function index()
	{
		if($this->cek_login() == FALSE){
			session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
			return redirect()->to('/Auth/index');
		}
		echo(session()->get('nama'));
		echo"<br>";
		echo(session()->get('kelas'));
		echo"<br>";
		echo(session()->get('no_token'));
		echo"<br>";
		echo(session()->get('keterangan'));
		echo"<br>";
		echo(session()->get('status'));
		echo"<br>";
		echo'<a href="/Auth/logout">logout</a>';
    }

    public function divisi()
	{
		if($this->cek_login() == FALSE){
			session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
			return redirect()->to('/Auth/index');
		}
		$data=[
			'judul' => "Pemilihan Divisi | Sintech",
			'lokasi' => "divisi",
			'isi' => "v_divisi",
			'divisi'=> $this->Vote_model->get_data_divisi()
		];
		echo view('front_layout/v_wrapper', $data);
	}

	public function pilih_divisi($id) 
	{
		if($this->cek_login() == FALSE){
			session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
			return redirect()->to('/Auth/index');
		} 

		$nama=session()->get('nama');
		$kelas=session()->get('kelas');
		$status=session()->get('keterangan');
		$mpk=0;
		$tgl=date('Y-m-d');
		$data=[
            'nama' => $nama,
            'kelas' => $kelas,
            'status' =>$status,
            'divisi_pilihan' =>$id
        ];
        $this->Vote_model->pilih_divisi($data) ; 
        session()->setFlashdata('success', 'data berhasil ditambahkan');
        return redirect()->to(base_url('Auth/logout'));
	}
}