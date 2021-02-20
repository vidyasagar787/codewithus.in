<?php namespace App\Controllers;

class Registration extends BaseController
{
	public function index()
	{
		$this->_view ('registration/registrationForm',$this->data);
	}

	//--------------------------------------------------------------------

}
