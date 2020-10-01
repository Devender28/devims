<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Blogmodel extends MY_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
	//	$this->load->library('image_lib');
    }
	
	

	function getall_posts()
    {
      return  $this->db->order_by('id','desc')->get_where('blogpost',array('status'=>1))->result();
    }


    function getrecent_posts()
    {
      return  $this->db->order_by('id','desc')->limit('2')->get_where('blogpost',array('status'=>1,'slug!='=>$this->uri->segment(2)))->result();
    }

    
    function get_post()
    {
      return  $this->db->get_where('blogpost',array('slug'=>$this->uri->segment(2)))->row();
	}
	
	function get_nextpost($id)
    {
      return  $this->db->order_by('id','desc')->limit('1')->get_where('blogpost',array('id >'=>$id))->row();
	}
	
	function get_prepost($id)
    {
      return  $this->db->order_by('id','desc')->limit('1')->get_where('blogpost',array('id <'=>$id))->row();
	}
	
	function get_postid($slug)
    {
        return $this->db->get_where('blogpost',array('slug'=>$slug))->row('id');

    }


    function get_galimgs($id)
    {
        return $this->db->get_where('postgallery',array('maxid'=>$id))->result();
    }

    function getall_categories()
    {
        return $this->db->get_where('blogcategory')->result();
    }

    function get_postcount($id)
    {
        return $this->db->get_where('blogpost',array('category'=>$id))->num_rows();
    }

    function get_catid($slug)
    {
        return $this->db->get_where('blogcategory',array('slug'=>$slug))->row('id');

    }

    function get_catpost($id)
    {
        return $this->db->get_where('blogpost',array('category'=>$id))->result();
    }

    function get_comments($id)
    {
        return $this->db->get_where('comments',array('postid'=>$id,'status'=>1))->result();
    }

    function comment_count($id)
    {
        return $this->db->get_where('comments',array('postid'=>$id,'status'=>1))->num_rows();
    }
	
	
	function comment(){
      
		if(isset($_POST['submit_comment'])){
 
		 extract($_POST);
	   
		 $postid = $this->get_postid($this->uri->segment(2));

		 $data = array('name' => @$name,
					  
					  //'email'=> @$email,
					  'postid'=> @$postid,
					 // 'mobile'=> $mobile,
					  'comment'=> @$comment,
					  'status'=>0
					  
		 );
 
	   if($this->db->insert('comments',$data)){
		
		return $msg= '<div class="alert alert-success col-md-12">
							 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
							 <strong>Your Comment Submitted Successfully</strong>
						   </div>';
	 
	   } else{
	   return  $msg ='<script>alert("Error");</script>';
	   }
	  }
	 }


}
 
