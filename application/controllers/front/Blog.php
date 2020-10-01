<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		
		$this->load->model(array('front/blogmodel','front/productmodel'));

			  
	}


    public function index()
	{

      


        $this->load->library('pagination');
		$config = array();
		$config['base_url'] = base_url().'blog';
		$config['total_rows'] = $this->db->get_where('blogpost')->num_rows();
		$config['per_page'] = 6; 
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 2;
		$config["full_tag_open"] = '<ul class="page_navigation">';
		$config["full_tag_close"] = '</ul>';	
	
		$config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';


		$config['uri_segment'] = '2';


		$this->pagination->initialize($config); 

		if($this->uri->segment(2)){
		$page = ($this->uri->segment(2)) ;
		}
		else{
		$page = 1;
		}
		$data['posts']=$this->db->order_by('id','desc')->limit($config['per_page'],($page-1)*$config['per_page'])->get_where('blogpost',array('status'=>1))->result();
		$data['links']= $this->pagination->create_links();
		$data['recentposts'] = $this->blogmodel->getrecent_posts();

        $this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'menu'); 
		$this->load->view(FRONT_PAGES.'blog',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
		
		
	}



    public function blogdetails(){
    
     $data['msg']  = $this->blogmodel->comment();
     
     $data['post']=  $this->blogmodel->get_post();
     $data['recentposts'] = $this->blogmodel->getrecent_posts();
     $data['categories'] = $this->blogmodel->getall_categories();
   
	 $this->load->view(FRONT_INCLUDES.'header');
	 $this->load->view(FRONT_INCLUDES.'menu'); 
	 $this->load->view(FRONT_PAGES.'blog-view',$data);
	 $this->load->view(FRONT_INCLUDES.'footer');
    
    
  }

  public function blogcategory(){

	$cat= $this->blogmodel->get_catid($this->uri->segment(3));

	$this->load->library('pagination');
	$config = array();
	$config['base_url'] = base_url().'blog/category/'.$this->uri->segment(3);
	$config['total_rows'] = $this->db->get_where('blogpost',array('category'=>$cat))->num_rows();
	$config['per_page'] = 6; 
	$config['use_page_numbers'] = TRUE;
	$config['num_links'] = 2;
	$config["full_tag_open"] = '<ul class="page_navigation">';
	$config["full_tag_close"] = '</ul>';	

	$config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link">';
	$config['cur_tag_close'] = '</a></li>';
	$config['num_tag_open'] = '<li class="page-item">';
	$config['num_tag_close'] = '</li>';


	$config['uri_segment'] = '4';


	$this->pagination->initialize($config); 

	if($this->uri->segment(4)){
	$page = ($this->uri->segment(4)) ;
	}
	else{
	$page = 1;
	}
	
	$data['posts']=$this->db->order_by('id','desc')->limit($config['per_page'],($page-1)*$config['per_page'])->get_where('blogpost',array('status'=>1,'category'=>$cat))->result();
	$data['links']= $this->pagination->create_links();
	$data['recentposts'] = $this->blogmodel->getrecent_posts();

       $this->load->view(FRONT_INCLUDES.'header');
        $this->load->view(FRONT_INCLUDES.'menu'); 
		$this->load->view(FRONT_PAGES.'blog_category',$data);
		$this->load->view(FRONT_INCLUDES.'footer');
    
    
  }

	
}
