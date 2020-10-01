<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

        $this->load->model('admin/Loginmodel');

	}

	public function index()
	{
	
	    
        if($this->session->userdata('ims_admin')){
           redirect('admin/login/dashboard', 'auto');
        }   

		$data['msg']=$this->Loginmodel->login();
		$this->load->view('admin/includes/login_header');
		$this->load->view('admin/login',$data);
		$this->load->view('admin/includes/login_footer');
	}

	public function dashboard()
	{
		if(!$this->session->userdata('ims_admin')){
           redirect('admin', 'auto');
        }  

		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/includes/footer');
	}






   public function logout(){
         $this->session->unset_userdata('ims_admin');
         redirect('admin', 'auto');
         }

















}
