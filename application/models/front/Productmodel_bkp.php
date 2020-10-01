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
    if(isset($_POST['add_cart']))
     {
				
            extract($_POST);
			
			$ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
		
			
			if ( ! isset($customer_email))     $customer_email = '';
			
			 $quantity="1";
			$data = array(
						  'product_id'       => $product_id,
						  'ip_address'       => $ip_address,
						  'customer_email'   => $customer_email,
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

	
 
function cartCount()
    {
	  $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
      
	  
	  
	  
	  if($this->session->userdata('user_id')=="")
	  {
	   return $this->db->get_where('cart',array("ip_address"=>$ip_address ,'product_active'=> '1'))->num_rows();
	  }
	  else
	  {
	  return $this->db->get_where('cart',array("customer_email"=>$this->session->userdata('vone_login'),'product_active'=> '1'))->num_rows();	 
	  }
	  

	
	}		 
			
		
	
function cartDetails()
    {
	  $ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
	  
	  if($this->session->userdata('user_id')=="")
	  {
	    return $this->db->get_where('cart',array("ip_address"=>$ip_address,'product_active'=> '1'))->result();
	  }
	  else
	  {
	  return $this->db->get_where('cart',array("customer_email"=>$this->session->userdata('vone_login'),'product_active'=> '1'))->result();	 
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
      
	  
	  
	  
	  if($this->session->userdata('user_id')=="")
	  {
	   return $this->db->get_where('wishlist',array("ip_address"=>$ip_address ,'status'=> '1'))->num_rows();
	  }
	  else
	  {
	  return $this->db->get_where('wishlist',array("customer_email"=>$this->session->userdata('vone_login'),'status'=> '1'))->num_rows();	 
	  }
	  

	
	}		 

	
	
	

}
 
