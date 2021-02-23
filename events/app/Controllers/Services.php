<?php namespace App\Controllers;

class Services extends BaseController
{
	public function index()
	{
		$file = view('services/servicesJsonData.json');
		$file = json_decode($file,true);
		
		$this->_view ('services/index',$this->data);
	}

	//--------------------------------------------------------------------

}
