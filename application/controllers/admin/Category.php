<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

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

        $this->load->model(array('admin/Categorymodel','admin/Fun'));
        $this->load->helper('deven');

	} 
	
	
	

	 
	 
	 
	public function add()
     {
       $data['msg'] = $this->Categorymodel->addMainCategory();
		

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/category/main_category',$data);
        $this->load->view('admin/includes/footer');

     }

     
	 
public function details()
     {
        $data['all_main'] = $this->Categorymodel->allMainCategoryDetails();
		$data['Table'] = 'main_category';
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/category/main_category_details',$data);
        $this->load->view('admin/includes/footer');

     }
	 
	 
	 
	
	

public function edit()
     {
        $data['msg'] = $this->Categorymodel->updateMainCategory();
        $data['maincategory']   = $this->Categorymodel->getMainCategory();
		 $data['maincategory']   = $this->Categorymodel->getMainCategory();
		
		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/category/main_category_edit',$data);
        $this->load->view('admin/includes/footer');

     }
	 
	 













}


