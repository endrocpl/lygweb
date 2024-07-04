<?php

namespace App\Controllers;

use App\Models\Datax;

class Home extends BaseController
{
	protected $dataModel;

	public function __construct()
	{
		$this->dataModel = new Datax();
	}

	public function index()
	{
		$data = [
			'data' => $this->dataModel->getQueryPertama()
		];
		return view('welcome_message', $data);
	}
	public function detail()
	{
		$cekTipe = $this->dataModel->checkTipe($this->request->getVar('scode'));
		$dt =  $this->dataModel->getQueryKedua($this->request->getVar('trndate'), $this->request->getVar('scode'), $cekTipe)->getResult();
		$data = array(
			"tipe" => $cekTipe,
			"dt" =>  $dt
		);
		echo json_encode($data);
	}
	public function test()
	{
		$cekTipe = $this->dataModel->checkTipe('BOSSE FANCY OH HOOD S.9');
		echo $cekTipe;
	}
}
