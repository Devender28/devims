<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class SpecialOffermodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
    }
	
	
   

 function allSpecialOffers()
         {
          return $this->db->get_where('special_offers')->result();
         }	 



function getProduct(){

      return $this->db->get_where('product',array('id'=>$this->uri->segment(3)))->row();
    }
	
	
	
	
	













	

	
	
	

}
 
