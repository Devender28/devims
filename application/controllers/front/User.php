<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		define('LEVEL2', $this->uri->segment(2));

		$this->load->model('front/usermodel');

		 if(!$this->session->userdata('id'))
			  {
			   redirect('',auto);
			  }
			  
$this->load->model(array('front/registermodel','front/loginmodel','front/productmodel','admin/categorymodel','front/specialoffermodel'));			  
			  
			  
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
		$data['user'] = $this->usermodel->get_user($this->session->userdata('id'));
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'dashboard');
		$this->load->view(FRONT_INCLUDES.'footer');
	}

	public function profile()
	{
		$data['user'] = $this->usermodel->get_user($this->session->userdata('id'));
		
			$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'profile',$data);
			$this->load->view(FRONT_INCLUDES.'footer');
	}

	public function profile_update()
	{
		$data['user'] = $this->usermodel->get_user($this->session->userdata('id'));
		$data['msg'] = $this->usermodel->profile_update();
		$data['pass_msg'] = $this->usermodel->password_change();

		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'profile-update', $data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}

	public function message()
	{
		
		$data['msg'] = $this->usermodel->addQuery();
		$data['user'] = $this->usermodel->get_user($this->session->userdata('id'));
		$data['orders'] = $this->usermodel->get_data('order_details','user_id',$this->session->userdata('id'));
		$data['user_queries'] = $this->usermodel->userMessages();
			$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'message');
			$this->load->view(FRONT_INCLUDES.'footer');
	}

	

	public function orders()
	{
		$data['user'] = $this->usermodel->get_user($this->session->userdata('id'));
		$data['orders'] = $this->usermodel->get_data('orders','user_id',$this->session->userdata('id'));
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'orders', $data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}


	public function order()
	{
		$data['user'] = $this->usermodel->get_user($this->session->userdata('id'));
		$data['items'] = $this->usermodel->get_data('order_details','order_id',$this->uri->segment(3));
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'properties', $data);
			$this->load->view(FRONT_INCLUDES.'footer');
	}


	public function my_cart()
	{
		
		$data['Table'] = 'cart';
		$data['user'] = $this->usermodel->get_user($this->session->userdata('id'));
		$data['cart'] = $this->usermodel->get_data('cart','user_id',$this->session->userdata('id'));
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_menu',$data); 
		$this->load->view(FRONT_PAGES.'my_cart', $data);
			$this->load->view(FRONT_INCLUDES.'footer');
	}

	public function wishlist()
	{
		
		$data['Table'] = 'wishlist';
		$data['user'] = $this->usermodel->get_user($this->session->userdata('id'));
		$data['wishlist'] = $this->usermodel->get_data('wishlist','user_id',$this->session->userdata('id'));
			$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
        $this->load->view(FRONT_INCLUDES.'dashboard_menu', $data); 
		$this->load->view(FRONT_PAGES.'wishlist',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}
}
