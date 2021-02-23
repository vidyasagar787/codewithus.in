<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];
	protected $data;
	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		$this->session = \Config\Services::session();
		$this->validation =  \Config\Services::validation();

		$this->session = \Config\Services::session();
		$uri = new \CodeIgniter\HTTP\URI();

		//$this->modal = new Common();

		$segments = $request->uri->getSegments();

		if(!empty($segments[0])) {
			$this->data['c'] = $segments[0];	
		}else {
			$this->data['c'] = '';
		} 
		if(!empty($segments[1])) {
			$this->data['m'] = $segments[1];	
		}else {
			$this->data['m'] = '';
		} 
		if(!empty($segments[2])) {
			$this->data['p1'] = $segments[2];	
		}else {
			$this->data['p1'] = '';
		} 
		if(!empty($segments[3])) {
			$this->data['p2'] = $segments[3];	
		}else {
			$this->data['p2'] = '';
		} 

		$this->data['_base'] = base_url().'/';

	}

	/**
	 * Header and Footer Config function 
	 */
	public function _view($page, $data = array(), $hf = 1) {

		if ($hf == 1) {
			$data['page'] = $page;
			echo view('common/header', $data);
			echo view($page, $data);
			echo view('common/footer', $data);
		} else {
			echo view($page, $data);
		}
	}// end


	//e-mail function
	public function _sendEmail($data,$page = 'index',$config = ['charset'=>'utf-8','wordwrap'=> TRUE,'mailtype' => 'html'])
    {
        $res['status'] = FALSE;
        
        $this->email = \Config\Services::email();

        $message = view('emails/'.$page,$data);
        $this->email->initialize($config);

        $this->email->setFrom($data['from'], $data['fromTitle']);
        $this->email->setTo($data['to']);
        $this->email->setSubject($data['subject']);
        $this->email->setMessage($message);

        //optionals
        if(!empty($data['cc'])) $this->email->setCC($data['cc']);
        if(!empty($data['bcc'])) $this->email->setBCC($data['bcc']);
        if(!empty($data['attach'])) $this->email->attach($data['attach']);

        $send = $this->email->send();

        print_r($send);

        if($send) {
            $res['status'] = TRUE;
        }

        return $res;

        // How to use
        //  //required fields 
        // $this->data['to'] = $this->data['user'][0]['email'];
        // $this->data['from'] = 'admin@psychnet.sg';
        // $this->data['fromTitle'] = 'ADMIN – PsychNet.Sg';

        // if($this->data['user'][0]['surprisepack'] == 1) {
        //     $this->data['subject'] = 'SURPRISE PACK';
        // }else {
        //     $this->data['subject'] = 'FREE Complimentary Safety Kit';   
        // }

        // //optional fields
        // $this->data['cc'] = '';
        // $this->data['bcc'] = '';
        // $this->data['attach'] = $this->invoice(base64_encode($_orderId),1);

        // $sendEmail = $this->_sendEmail($this->data, 'orderConfirmed');
    }

    public function _exception($message) {
        $e = new \Exception($message);
        $e->status = FALSE;
        throw $e;
    }
}




