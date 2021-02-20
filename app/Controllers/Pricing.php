<?php namespace App\Controllers;

class Pricing extends BaseController
{
	public function index()
	{
		$this->_view ('pricing/index',$this->data);
	}

	//--------------------------------------------------------------------

}
