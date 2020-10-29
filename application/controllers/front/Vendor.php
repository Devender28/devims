<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		define('LEVEL2', $this->uri->segment(2));

		// $this->load->model('front/vendormodel');
		$this->load->model(array('front/vendormodel','front/productmodel'));

		 if($this->session->userdata('type') !='vendor')
			  {
			   redirect('',auto);
			  }
	}


    public function logout()
		 {

		  $data = $this->session->all_userdata();
		  foreach($data as $row => $rows_value)
		  {
		   $this->session->unset_userdata($row);
		  }
		  redirect('',auto);

		 }

	public function dashboard()
	{
		$data['msg'] = $this->vendormodel->thankyounote();
		$data['user'] = $this->vendormodel->get_user($this->session->userdata('id'));
		$data['vendors'] = $this->vendormodel->get_fields_data($this->session->userdata('id'));

		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_vendor_menu',$data); 
		$this->load->view(FRONT_PAGES.'dashboard_vendor');
		$this->load->view(FRONT_INCLUDES.'dashboard_footer');
	}

	public function profile()
	{
		$data['user'] = $this->vendormodel->get_user($this->session->userdata('id'));
		
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_vendor_menu',$data); 
		$this->load->view(FRONT_PAGES.'vendor_profile',$data);
		$this->load->view(FRONT_INCLUDES.'dashboard_footer');
	}

	public function profile_update()
	{
		$data['user'] = $this->vendormodel->get_user($this->session->userdata('id'));
		$data['msg'] = $this->vendormodel->profile_update();
		$data['pass_msg'] = $this->vendormodel->password_change();

		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_vendor_menu',$data); 
		$this->load->view(FRONT_PAGES.'vendor_profile_update', $data);
		$this->load->view(FRONT_INCLUDES.'dashboard_footer');
	}

	public function lead_preference()
	{
		$data['user'] = $this->vendormodel->get_user($this->session->userdata('id'));
		$data['msg'] = $this->vendormodel->preference_update();
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu');
        $this->load->view(FRONT_INCLUDES.'dashboard_vendor_menu',$data); 
		$this->load->view(FRONT_PAGES.'lead_preference');
		$this->load->view(FRONT_INCLUDES.'dashboard_footer');
	}

	

	public function orders()
	{
		$data['user'] = $this->vendormodel->get_user($this->session->userdata('id'));
		$data['orders'] = $this->vendormodel->get_data('orders','user_id',$this->session->userdata('id'));
		$this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'orders', $data);
		$this->load->view(FRONT_INCLUDES.'dashboard_footer');
	}


	public function order()
	{
		$data['user'] = $this->vendormodel->get_user($this->session->userdata('id'));
		$data['items'] = $this->vendormodel->get_data('order_details','order_id',$this->uri->segment(3));
		$this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'properties', $data);
		$this->load->view(FRONT_INCLUDES.'dashboard_footer');
	}


	public function my_cart()
	{
		
		$data['Table'] = 'cart';
		$data['user'] = $this->vendormodel->get_user($this->session->userdata('id'));
		$data['cart'] = $this->vendormodel->get_data('cart','user_id',$this->session->userdata('id'));
		$this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'my_cart', $data);
		$this->load->view(FRONT_INCLUDES.'dashboard_footer');
	}

	public function wishlist()
	{
		
		$data['Table'] = 'wishlist';
		$data['user'] = $this->vendormodel->get_user($this->session->userdata('id'));
		$data['wishlist'] = $this->vendormodel->get_data('wishlist','user_id',$this->session->userdata('id'));
		$this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'dashboard_menu', $data); 
		$this->load->view(FRONT_PAGES.'wishlist',$data);
		$this->load->view(FRONT_INCLUDES.'dashboard_footer');
	}
}
