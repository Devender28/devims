<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupons extends CI_Controller {

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

        $this->load->model(array('admin/Couponsmodel','admin/Fun'));
        $this->load->helper('deven');

	} 
	
	
	

	 
	 
	 
	public function add()
     {
       $data['msg'] = $this->Couponsmodel->addCoupon();
		

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/coupons/add_coupon',$data);
        $this->load->view('admin/includes/footer');

     }

     
	 
public function details()
     {
        $data['all_coupons'] = $this->Couponsmodel->allCoupons();
		$data['Table'] = 'coupons';
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/coupons/coupon_details',$data);
        $this->load->view('admin/includes/footer');

     }
	 
	 
	 
	
	

public function edit()
     {
        $data['msg'] = $this->Couponsmodel->updateCoupon();
        $data['coupon']   = $this->Couponsmodel->getCoupon();
		
		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/coupons/coupon_edit',$data);
        $this->load->view('admin/includes/footer');

     }
	 
	 













}


