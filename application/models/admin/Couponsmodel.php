<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Couponsmodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
    }
	





 function addCoupon()
       {
        	if(isset($_POST['coupon_add']))

        	{
        		extract($_POST);
        		     
	  
	  
		
			$data = array('code'      => $code,
										'discount'  => $discount,
										'status'    => 1
                           );

            if($this->db->insert('coupons',$data))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Coupon Added Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Coupon Information</strong>
                  </div>';
          } 
            
        	}
        }




 function updateCoupon()
        {
        	if(isset($_POST['coupon_edit']))

        	{
        	extract($_POST);
          
		
					$data = array('code'     => $code,
					'discount'        => $discount
								 );
			

            if($this->db->update('coupons',$data,array('id'=>$this->uri->segment(4))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Coupon Updated Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Updated Coupon Information</strong>
                  </div>';
          } 
            
        	}
        }





  
  function getCoupon(){

      return $this->db->get_where('coupons',array('id'=>$this->uri->segment(4)))->row();
    }
  
  
  
  
  
  
  function allCoupons()
         {
          return $this->db->get_where('coupons')->result();
         }
		 

	
		



}
 
