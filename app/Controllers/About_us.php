<?php namespace App\Controllers;

class About_us extends BaseController
{
	public function index()
	{
		$this->_view ('aboutus/index',$this->data);
	}

	//--------------------------------------------------------------------

}
