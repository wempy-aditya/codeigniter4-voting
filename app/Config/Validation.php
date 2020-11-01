<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $authlogin = [
		'token'         => 'required|integer|min_length[8]|max_length[8]',
		'nama'      => 'required|alpha_space|min_length[4]|max_length[40]',
		'kelas'      => 'required|alpha_numeric_space|min_length[6]|max_length[8]'
	];
	public $authlogin_errors = [
		'token'=> [
			'required'  => 'Kolom Token wajib diisi.',
			'integer' => 'Kolom Token berupa angka',
			'min_length' => 'Kolom Token minimal memiliki 8 karakter',
			'max_length' => 'Kolom Token maksimal memiliki 8 karakter'
		],
		'nama'=> [
			'required'  => 'Kolom Nama wajib diisi.',
			'alpha_space' => 'Kolom Nama berupa karakter alfabet', 
			'min_length' => 'Kolom Nama minimal memiliki 4 karakter',
			'max_length' => 'Kolom Nama maksimal memiliki 40 karakter'
		],
		'kelas'=> [
			'required'  => 'Kolom Kelas wajib diisi.',
			'alpha_numeric_space' => 'Kolom Kelas berupa karakter alfabet dan numerik', 
			'min_length' => 'Kolom Kelas minimal memiliki 6 karakter',
			'max_length' => 'Kolom Kelas maksimal memiliki 8 karakter'
		]
	];
}
