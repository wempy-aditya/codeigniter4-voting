<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Finish extends BaseController
{
    public function __construct()
    {
        helper('cookie');
    }

	public function index()
	{
		return view('v_finish');
	}

	//--------------------------------------------------------------------

}
