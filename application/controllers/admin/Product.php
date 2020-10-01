<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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

        $this->load->model(array('admin/Categorymodel','admin/Productmodel','admin/Fun'));
        $this->load->helper('deven');

	}

	public function  add_project()
     {
       
	    $data['all_main'] = $this->Productmodel->allMainCategoryDetails();
		$data['all_styles'] = $this->Productmodel->allStyles();
	   // $data['all_cat'] = $this->Productmodel->allCategoryDetails();
	   // $data['all_sub_cat'] = $this->Productmodel->allSubCategoryDetails();
		$data['msg'] = $this->Productmodel->addProduct();
		
		
		$data['Table'] = 'product';
   
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/product/add_product',$data);
        $this->load->view('admin/includes/footer');

     }
     
     
    public function display_category()
		{
		$design_cat=$_POST['get_val'];
			
			$data['categories']=$this->db->get_where('main_category', array('design_cat' =>$design_cat))->result();
			$this->load->view('admin/product/display_category',$data);
		}
	 
	 
	 
	 
	 
	 public function project_edit()
     {
        
		$data['msg'] = $this->Productmodel->updateProduct();
		
		$data['all_main'] = $this->Productmodel->allMainCategoryDetails();
		$data['all_styles'] = $this->Productmodel->allStyles();
		$data['product']   = $this->Productmodel->getProduct();
		
	    $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/product/product_edit',$data);
        $this->load->view('admin/includes/footer');

     }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	public function  project_list()
     {
   
        
		$data['products'] = $this->Productmodel->allProducts();
		
		
		$data['Table'] = 'product';
   
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/product/product_list',$data);
        $this->load->view('admin/includes/footer');

	 } 
	 

	 public function  add_featured_project()
     {   
		
		$data['msg'] = $this->Productmodel->addFeatured();
		$data['products'] = $this->Productmodel->allProducts();
			
		$data['Table'] = 'product';
   
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/product/add_featured',$data);
        $this->load->view('admin/includes/footer');

	 } 
	 

	 public function  featured_project_list()
     {   
		
		$data['featured'] = $this->Productmodel->allFeatured();
			
		$data['Table'] = 'featured';
   
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/product/featured_list',$data);
        $this->load->view('admin/includes/footer');

     } 	 
     
     
      public function project_reviews()
	{
		
		$data['reviews'] = $this->Productmodel->allProductsReviews();

    	$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $data['Table']='product_review';
		$this->load->view('admin/product/viewreviews',$data);
		$this->load->view('admin/includes/footer');
		
	}
	 





}
