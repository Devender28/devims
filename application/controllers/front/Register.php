<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
        
		$this->load->model(array('front/registermodel','front/loginmodel','front/vendorloginmodel','front/vendorregistermodel'));
	}


		function verify_email()
		{
		if($this->uri->segment(3))
		{
		$verification_key = $this->uri->segment(3);
		if($this->registermodel->verify_email($verification_key))
		{
		
		$data['msg'] = '<h1 align="center">Your Email has been successfully verified</h1>';
		}
		else
		{
			$data['msg'] = '<h1 align="center">Invalid Link</h1>';
			}
				$this->load->view(FRONT_INCLUDES.'header');
				$this->load->view(FRONT_INCLUDES.'menu'); 
					$this->load->view(FRONT_PAGES.'email_verification', $data);
					$this->load->view(FRONT_INCLUDES.'footer');
				
		}
		}


		public function sendotp()
		
		{
			$this->loginmodel->send_otp();
		}

		public function login()
		
		{
			$this->loginmodel->login();
		}


		public function register_user()
		{
			$this->registermodel->register();
		}

		public function vensendotp()
		
		{
			$this->vendorloginmodel->send_otp();
		}



		function verify_emailven()
		{
		if($this->uri->segment(3))
		{
		$verification_key = $this->uri->segment(3);
		if($this->vendorregistermodel->verify_email($verification_key))
		{
		
		$data['msg'] = '<h1 align="center">Your Email has been successfully verified</h1>';
		}
		else
		{
			$data['msg'] = '<h1 align="center">Invalid Link</h1>';
			}
			$this->load->model('front/productmodel');
				$this->load->view(FRONT_INCLUDES.'header');
				$this->load->view(FRONT_INCLUDES.'menu'); 
					$this->load->view(FRONT_PAGES.'email_verification', $data);
					$this->load->view(FRONT_INCLUDES.'footer');
				
		}
		}
		

	
}
