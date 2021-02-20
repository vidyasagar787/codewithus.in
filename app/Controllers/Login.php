<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$this->_view ('login/loginForm',$this->data);
	}

	//--------------------------------------------------------------------

}
