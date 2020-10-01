<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Registrationsmodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
    }
	



 function allRegistrations()
         {
          return $this->db->get_where('registrations')->result();
         }	 




	
		



}
 
