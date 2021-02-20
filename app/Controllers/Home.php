<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$this->_view ('home/index',$this->data);
	}

	//--------------------------------------------------------------------

} 
