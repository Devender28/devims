<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Loginmodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('date_helper');
    }
	
	
function login(){

      if(isset($_POST['login'])){

        extract($_POST);
        $user = $this->db->get_where('admin', array('username'=>$username, 'password'=>$password))->row();
        if($user){ 
         $this->session->set_userdata('ims_admin',$user->username);
         redirect('admin/login/dashboard', 'auto');

        }
		else
		{
		
		return $msg='<div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="fa fa-check"></i> Invalid Login Details!</p>
                                    </div>';
									
		
		return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Invalid Login Details!</strong>
                  </div>';
		
		
		}

      }

    }
	
		
	
	
	
	
	
	
	
	
	



}
 
