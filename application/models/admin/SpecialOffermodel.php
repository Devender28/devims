<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class SpecialOffermodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
    }
	





 function addSpecialOffer()
       {
        	if(isset($_POST['specialoffer_add']))

        	{
        		extract($_POST);
        		     
	  
	  
		
			$data = array('category'     => $cat,
										'title'        => $title,
										'description'  => $description,
										'amount'       => $amount
                           );

            if($this->db->insert('special_offers',$data))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Special Offer Added Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Special Offer Information</strong>
                  </div>';
          } 
            
        	}
        }




 function updateSpecialOffer()
        {
        	if(isset($_POST['specialoffer_edit']))

        	{
        	extract($_POST);
          
		
					$data = array('category'     => $cat,
					'title'        => $title,
					'description'  => $description,
					'amount'       => $amount
								 );
			

            if($this->db->update('special_offers',$data,array('id'=>$this->uri->segment(4))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Special Offer Updated Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Updated Special Offer Information</strong>
                  </div>';
          } 
            
        	}
        }





  
  function getSpecialOffer(){

      return $this->db->get_where('special_offers',array('id'=>$this->uri->segment(4)))->row();
    }
  
  
  
  
  
  
  function allSpecialOffers()
         {
          return $this->db->get_where('special_offers')->result();
         }
		 

	
		



}
 
