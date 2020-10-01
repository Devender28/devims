<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Productmodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
    }
	
	
   

 function allProducts()
         {
          return $this->db->get_where('product')->result();
         }	 



function getProduct(){

      return $this->db->get_where('product',array('id'=>$this->uri->segment(3)))->row();
    }
	
	
	
	
function addCart()
   {
    if(isset($_POST['add_cart'])or isset($_POST['buy_now']))
     {
				
            extract($_POST);
			
			$ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
		
			
			if ( $this->session->userdata('id'))
			{
			$user_id=$this->session->userdata('id');
				
			}
			else{
				
			$user_id="";	
				
			}
			
			 $quantity="1";
			$data = array(
						  'product_id'       => $product_id,
						  'ip_address'       => $ip_address,
						  'user_id'          => $user_id,
						  'quantity'         => $quantity,
						  'product_active'   => '1',
						   'status'          => 1
                           );

            $quantity_data = array('quantity'    => $quantity,'product_active'=> '1');
			
			 
			 $chk=$this->db->get_where('cart',array("ip_address"=>$ip_address,"product_id"=>$product_id))->num_rows();
			 
	    	 if($chk=='1')
			 {
			 $this->db->update('cart',$quantity_data,array('ip_address'=>$ip_address,'product_id'=>$product_id));	 
			 }
			 else
			 {
			 $this->db->insert('cart',$data);	 
			 }
			 
   
   if(isset($_POST['buy_now']))
   {
	
    redirect('cart');	
	   
   }
   
   
   
   
   }
}

	
 
function cartCount()
    {
	  $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
      
	  
	  
	  
	  if($this->session->userdata('id')=="")
	  {
	   return $this->db->get_where('cart',array("ip_address"=>$ip_address ,'product_active'=> '1'))->num_rows();
	  }
	  else
	  {
	  return $this->db->get_where('cart',array("user_id"=>$this->session->userdata('id'),'product_active'=> '1'))->num_rows();	 
	  }
	  

	
	}		 
			
		
	
function cartDetails()
    {
	  $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
	  
	  if($this->session->userdata('id')=="")
	  {
	    return $this->db->get_where('cart',array("ip_address"=>$ip_address,'product_active'=> '1'))->result();
	  }
	  else
	  {
	  return $this->db->get_where('cart',array("user_id"=>$this->session->userdata('id'),'product_active'=> '1'))->result();	 
	  }
   
    }	
	
	
	
	
function compareDetails()
    {
	  $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
	  
	  
	    return $this->db->get_where('compare',array("ip_address"=>$ip_address))->result();
	  
	  
   
    }		
	
	
	



function allStyles()
         {
          return $this->db->get_where('styles')->result();
         }	 



function deleteCart()
   {
    if(isset($_POST['delete_cart']))
     {
		 
		$id=$_POST['product_id'];
        $table="cart";
        $this->db->delete($table,array('id'=>$id));	
	 
		 
	 }
	 
   }







function searchStyles(){
	
      $style=$this->fun->getnewfieldvalue('styles','id','slug',$this->uri->segment(2));
      return $this->db->get_where('product',array('style'=>$style))->result();
    }
	
	

function searchCategories(){
	
      $cat_id=$this->fun->getnewfieldvalue('main_category','id','slug',$this->uri->segment(2));
      return $this->db->get_where('product',array('cat_id'=>$cat_id))->result();
    }

	
	
function compareCount()
    {
	  $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
      return $this->db->get_where('compare',array("ip_address"=>$ip_address))->num_rows();
    }


function wishlistCount()
    {
	  $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
      
	  
	  
	  
	  if($this->session->userdata('id')=="")
	  {
	   return $this->db->get_where('wishlist',array("ip_address"=>$ip_address ,'status'=> '1'))->num_rows();
	  }
	  else
	  {
	  return $this->db->get_where('wishlist',array("user_id"=>$this->session->userdata('id'),'status'=> '1'))->num_rows();	 
	  }
	  

	
	}		





function buyNow()
   {
    if(isset($_POST['add_cart'])  or isset($_POST['buy_now']))
     {
				
            extract($_POST);
			
			$ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
		
			
			if ( $this->session->userdata('id'))
			{
			$user_id=$this->session->userdata('id');
				
			}
			else{
				
			$user_id="";	
				
			}
			
			 $quantity="1";
			$data = array(
						  'product_id'       => $product_id,
						  'ip_address'       => $ip_address,
						  'user_id'   => $user_id,
						  'quantity'         => $quantity,
						  'product_active'   => '1',
						   'status'          => 1
                           );

            $quantity_data = array('quantity'    => $quantity,'product_active'=> '1');
			
			 
			 $chk=$this->db->get_where('cart',array("ip_address"=>$ip_address,"product_id"=>$product_id))->num_rows();
			 
	    	 if($chk=='1')
			 {
			 $this->db->update('cart',$quantity_data,array('ip_address'=>$ip_address,'product_id'=>$product_id));	 
			 }
			 else
			 {
			 $this->db->insert('cart',$data);	 
			 }
			 
   }
}






function searchFreeCategories(){
	
	  $free_paid="Free";
      $cat_id=$this->fun->getnewfieldvalue('main_category','id','slug',$this->uri->segment(2));
      return $this->db->get_where('product',array('cat_id'=>$cat_id,'free_paid'=>$free_paid))->result();
    }


function freePlansAll(){
	
	  $free_paid="Free";
      
      return $this->db->get_where('product',array('free_paid'=>$free_paid))->result();
    }

function stylesCategories(){
	
	  
      return $this->db->get_where('styles',array('status'=>'1'))->result();
    }


	
function  featuredProducts(){
	
	  $status="1";
      return $this->db->get_where('featured',array('status'=>$status))->result();
    }
	
	
	
 function allFreeCategoryDetails()
         {
          return $this->db->limit(6)->get_where('main_category')->result();
         }	
	
	
function allResCategoryDetails()
         {
		  $design_cat="residential";
          return $this->db->get_where('main_category',array('design_cat'=>$design_cat))->result();
         }
		 	 
		 
		 
	function allComCategoryDetails()
         {
		  $design_cat="commercial";
          return $this->db->get_where('main_category',array('design_cat'=>$design_cat))->result();
         }	 
         
         
    function product_review()
        {
        	if(isset($_POST['review'])){
         
        		extract($_POST);
        	  
        		$product_id = $this->uri->segment(3);
        
        		$data = array('name' => @$title,
        					 
        					 'description'=> @$desc,
        					 'product_id'=> @$product_id,					
        					 'rating'=> @$rating,
        					 'status'=>0
        					 
        		);
        
        	  if($this->db->insert('product_review',$data)){
        	   
        	   return $msg= '<div class="alert alert-success col-md-12">
        							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        							<strong>Your Review Submitted Successfully</strong>
        						  </div>';
        	
        	  } else{
        	  return  $msg ='<div class="alert alert-danger col-md-12">
        	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        	  <strong>Your Review not Submitted Successfully</strong>
        	</div>';
        	  }
        	 }
        }	 


    function review_count($id){	
    	  
    	return $this->db->get_where('product_review',array('product_id'=>$id, 'status'=>'1'))->num_rows();
      }
    
      function rating_count($id){	
    	  
    	$this->db->select_sum('rating');
    $result = $this->db->get_where('product_review',array('product_id'=>$id, 'status'=>'1'))->row();  
    return $result->rating;
      }
    
      function reviews($id){	
    	  
    	return $this->db->get_where('product_review',array('product_id'=>$id, 'status'=>'1'))->result();
      }     
	
	

}
 
