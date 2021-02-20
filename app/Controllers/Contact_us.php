<?php namespace App\Controllers;

class Contact_us extends BaseController
{
	public function index()
	{
		$this->_view ('contact_us/index',$this->data);
	}

	//--------------------------------------------------------------------

		public function sendMail()
	{

		$this->data['name'] = $this->request->getPost('name');
		$this->data['phone'] = $this->request->getPost('phone');
		$this->data['email'] = $this->request->getPost('email');
		$this->data['city'] = $this->request->getPost('city');
		$this->data['message'] = $this->request->getPost('message');

		$header = "From: ".$this->data['email']."\r\n";
		$header.= "MIME-Version: 1.0\r\n";
		$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$header.= "X-Priority: 1\r\n";

		$to = 'codewithus.in@gmail.com';
		//$to = 'vsagar787@gmail.com';
		$subject = 'Contact - '.$this->data['name'];
		$message = 	$this->data['name'].'<br/>'.
					$this->data['phone'].'<br/>'.
					$this->data['email'].'<br/>'.
					$this->data['city'].'<br/>'.
					$this->data['message'];

		$status = mail($to, $subject, $message, $header);

		if($status)
		{
		    echo '<p>Your mail has been sent!</p>';
		} else {
		    echo '<p>Something went wrong. Please try again!</p>';
		}

		// helper(['form', 'url']);

		// $validation = $this->validate([
		// 	'name' 		=> 'trim|required',
		// 	'phone' 	=> 'trim|required',
		// 	'email' 	=> 'trim|required|valid_email',
		// 	'city' 		=> 'trim|required',
		// 	'message' 	=> 'trim|required'
		// ]);

		try {

			// if(!$validation) $this->_exception('Errors');

			// $this->data['name'] = $this->request->getPost('name');
			// $this->data['phone'] = $this->request->getPost('phone');
			// $this->data['email'] = $this->request->getPost('email');
			// $this->data['city'] = $this->request->getPost('city');
			// $this->data['message'] = $this->request->getPost('message');

	  //       //required fields 
	  //       $this->data['to'] = 'info@codewithus.in';
	  //       $this->data['from'] = $this->data['email'];
	  //       $this->data['fromTitle'] = 'Contact – codewithus.in';
	  //       $this->data['subject'] = 'Contact – '.$this->data['name'];

	  //       $sendEmail = $this->_sendEmail($this->data, 'contactForm');

	  //       print_r($sendEmail);
			
		} catch (Exception $e) {
			
		}

		return redirect()->to(site_url('/pricing'));
		
	}


}
