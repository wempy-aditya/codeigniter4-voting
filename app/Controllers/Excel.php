<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Admin_model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel extends BaseController
{
	protected $Admin_model;

	public function __construct()
    {
		$this->Admin_model = new Admin_model();
    }
    public function index()
	{
		$data = $this->Admin_model->get_semua_data();
		dd($data);
    }

    public function export_all_data() 
	{
		$pemilih = $this->Admin_model->get_semua_data();
		$spreadsheet = new Spreadsheet();
		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'No')
					->setCellValue('B1', 'Nama')
					->setCellValue('C1', 'Kelas')
					->setCellValue('D1', 'Divisi Pilihan');
		$kolom = 2;
		$nomor = 1;
		foreach($pemilih as $data) {
			$spreadsheet->setActiveSheetIndex(0)
						->setCellValue('A' . $kolom, $nomor)
						->setCellValue('B' . $kolom, $data['nama'])
						->setCellValue('C' . $kolom, $data['kelas'])
						->setCellValue('D' . $kolom, $data['nama_divisi']);
			$kolom++;
			$nomor++;
		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Hasil Pemilihan Divisi Sintech.xlsx"');
		header('Cache-Control: max-age=0');
	
		$writer->save('php://output');
    }
}