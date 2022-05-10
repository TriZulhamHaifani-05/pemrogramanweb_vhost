<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 * config/routes.php, it's displayed at http://example.com/
	 */
	public function __construct()
	{
		parent :: __construct();
		$this->load->model('M_datadiri','mself');
	}

	public function index()
	{
		$data=[
			'data'=>$this->mself->getdatadiri(),
			'data2'=>$this->mself->getdataorganisasi()->result(),
			'data3'=>$this->mself->getdatakeahlian()->result()
		];
		//creating debug for view data

		// echo json_encode($data);//fungsi mengambil data dari satu tabel
		// echo $data['data']->nama;//fungsi mengambil salah satu data saja sebagai contoh data nama
		$this->load->view('utama',$data);
	}

	public function home_dua()
	{
		$this->load->view('template/header');
		$this->load->view('template/content');
		$this->load->view('template/footer');
	}
}
