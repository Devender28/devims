<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
        
		$this->load->model(array('front/registermodel','front/loginmodel','front/productmodel','admin/categorymodel','front/specialoffermodel','front/vendorregistermodel','front/vendorloginmodel'));
		
	}


	public function index()
	{
		$data['cat_details']=$this->categorymodel->allMainCategoryDetails();
		$data['free_cat_details']=$this->productmodel->allFreeCategoryDetails();
		$data['res_cat_details']=$this->productmodel->allResCategoryDetails();
		$data['com_cat_details']=$this->productmodel->allComCategoryDetails();
		$data['style_details']=$this->productmodel->stylesCategories();
		$data['products']=$this->productmodel->featuredProducts();
		$data['spl_offers']=$this->specialoffermodel->allSpecialOffers();
		$data['msg'] = $this->productmodel->addCart();
        $data['msg']=$this->registermodel->register();
        $data['msg']=$this->loginmodel->login();
		$this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'menu'); 
		$this->load->view(FRONT_PAGES.'index',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}

	public function forgotpassword()
	{
		$data['msg']=$this->registermodel->forgot_password();
		$this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'menu'); 
		$this->load->view(FRONT_PAGES.'forgotpassword',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}

	public function reset_password()
	{
		$data['msg']=$this->registermodel->reset_password();
		$this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'menu'); 
		$this->load->view(FRONT_PAGES.'resetpassword',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}


	public function products()
	{
		
        $data['msg']=$this->registermodel->register();
        $data['msg']=$this->loginmodel->login();
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'products',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}


public function search()
	{
		
        if(isset($_POST['search_button']))
		{	
	
	    $this->session->set_userdata('search_button',$_POST['search_button']);
	
		$this->session->set_userdata('bedrooms',$_POST['bedrooms']);
		$this->session->set_userdata('bathrooms',$_POST['bathrooms']);
		$this->session->set_userdata('cat_id',$_POST['cat_id']);
		
		$this->session->set_userdata('total_sq_feet',$_POST['total_sq_feet']);
		$this->session->set_userdata('style',$_POST['style']);
		$this->session->set_userdata('facing',$_POST['facing']);
		
		$this->session->set_userdata('design_cat',$_POST['design_cat']);
		
	    }
		
		
		
		
		$data['cat_details']=$this->categorymodel->allMainCategoryDetails();
		$data['style_details']=$this->productmodel->stylesCategories();
		$data['free_cat_details']=$this->productmodel->allFreeCategoryDetails();
		$data['res_cat_details']=$this->productmodel->allResCategoryDetails();
		$data['com_cat_details']=$this->productmodel->allComCategoryDetails();
		
		
		$data['Table'] = 'compare';
		
		$data['all_styles']=$this->productmodel->allStyles();
		$data['cat_details']=$this->categorymodel->allMainCategoryDetails();
		
		$data['msg'] = $this->productmodel->addCart();
		
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		//$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'search',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}
	
	
	
	public function free_plans()
	{
		
        $data['msg'] = $this->productmodel->addCart();
		$data['all_styles']=$this->productmodel->allStyles();
		$data['cat_details']=$this->categorymodel->allMainCategoryDetails();
		$data['products']=$this->productmodel->searchFreeCategories();
		$data['free_cat_details']=$this->productmodel->allFreeCategoryDetails();
		$data['res_cat_details']=$this->productmodel->allResCategoryDetails();
		$data['com_cat_details']=$this->productmodel->allComCategoryDetails();
		
		
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		//$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'categories_search',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}
	
	
	public function free_plans_all()
	{
		
        $data['msg'] = $this->productmodel->addCart();
		$data['all_styles']=$this->productmodel->allStyles();
		$data['cat_details']=$this->categorymodel->allMainCategoryDetails();
		$data['products']=$this->productmodel->freePlansAll();
		$data['free_cat_details']=$this->productmodel->allFreeCategoryDetails();
		$data['res_cat_details']=$this->productmodel->allResCategoryDetails();
		$data['com_cat_details']=$this->productmodel->allComCategoryDetails();
		
		
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		//$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'categories_search',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}

	
	public function style()
	{
		
        $data['msg'] = $this->productmodel->addCart();
		$data['all_styles']=$this->productmodel->allStyles();
		$data['cat_details']=$this->categorymodel->allMainCategoryDetails();
		$data['free_cat_details']=$this->productmodel->allFreeCategoryDetails();
		$data['res_cat_details']=$this->productmodel->allResCategoryDetails();
		$data['com_cat_details']=$this->productmodel->allComCategoryDetails();
		
		$data['products']=$this->productmodel->searchStyles();
		
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		//$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'styles_search',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}
	
	
	
	
	public function categories()
	{
		
        $data['msg'] = $this->productmodel->addCart();
		$data['all_styles']=$this->productmodel->allStyles();
		$data['cat_details']=$this->categorymodel->allMainCategoryDetails();
		$data['free_cat_details']=$this->productmodel->allFreeCategoryDetails();
		$data['res_cat_details']=$this->productmodel->allResCategoryDetails();
		$data['com_cat_details']=$this->productmodel->allComCategoryDetails();
		$data['products']=$this->productmodel->searchCategories();
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		//$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'categories_search',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}
	
	
	
	public function compare()
	{
		$data['compare_details']=$this->productmodel->compareDetails();
		$data['compare_count']=$this->productmodel->compareCount();
        $data['Table'] = 'compare';
		
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		//$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'compare',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}
	
	
	
	
	public function addcompare()
	{
     if(isset($_POST['x']
					 ))
     {   
		  extract($_POST);
		  $product_id=$_POST['x'];
          $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
		 
		  $data = array('product_id'     => $product_id,
		                'ip_address'     => $ip_address,
					    'status'         => 1
                        );

 $chk=$this->db->get_where('compare',array("ip_address"=>$ip_address,"product_id"=>$product_id))->num_rows();
			 
	    	 if($chk!='1')
			 {
			 
			 $this->db->insert('compare',$data);	 
			 }
		 echo $this->productmodel->compareCount();         
	     //echo   $arr[0];
		// echo $final_measurement;
    
	 }
	
	}		

	
	
	
	public function addwishlist()
	{
     if(isset($_POST['x']
					 ))
     {   
		  extract($_POST);
		  $product_id=$_POST['x'];
          $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
		 
		  $data = array('product_id'     => $product_id,
		                'ip_address'     => $ip_address,
					    'status'         => 1
                        );

 $chk=$this->db->get_where('wishlist',array("ip_address"=>$ip_address,"product_id"=>$product_id))->num_rows();
			 
	    	 if($chk!='1')
			 {
			 
			 $this->db->insert('wishlist',$data);	 
			 }
		 echo $this->productmodel->wishlistCount();         
	     //echo   $arr[0];
		// echo $final_measurement;
    
	 }
	
	}		

	
	
	
	
public function delete()
{  
  
  if (isset($_POST['x'])) 
  {

    $id=$_POST['x'];
   
    $table=$_POST['bdr'];
    $this->db->delete($table,array('id'=>$id));
	
	}
}	
	

	
	
	


	public function product_view()
	{
		$data['msg'] = $this->productmodel->addCart();
		$data['Table']="cart";
        $data['product']=$this->productmodel->getProduct();
        $data['msg1'] = $this->productmodel->product_review();
        
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		//$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'product_view',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}
	
	
	
	
	
	
	
	
	public function cart()
	{
        
		$data['msg'] = $this->productmodel->deleteCart();
		$data['msg'] = $this->productmodel->addCart();
		$data['Table']="cart";
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		//$this->load->view(FRONT_INCLUDES.'side-menu');
		$this->load->view(FRONT_PAGES.'cart',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
		
        
    
	}



	public function vendor_register()
			{
				$data['msg']=$this->vendorregistermodel->register();
				$this->load->view(FRONT_INCLUDES.'header');
				$this->load->view(FRONT_INCLUDES.'menu'); 
				$this->load->view(FRONT_PAGES.'ven_register',$data);
				$this->load->view(FRONT_INCLUDES.'footer');
			}

	public function vendor_login()
	{
		$data['msg']=$this->vendorloginmodel->login();
		$this->load->view(FRONT_INCLUDES.'header');
		$this->load->view(FRONT_INCLUDES.'menu'); 
		$this->load->view(FRONT_PAGES.'login',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
	}
	
	
	
	
	
	
	
	
	
	






	
}
