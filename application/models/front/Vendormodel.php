<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Vendormodel extends MY_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
	//	$this->load->library('image_lib');
    }
	
	

public function get_user($id)
{
  return $this->db->get_where('vendors',array('id'=>$id))->row();
}



function profile_update()
        {

         if(isset($_POST['update_profile']))

        	{
				
				extract($_POST);

				//print_r($_POST); exit;
				
				if($_FILES['profile_image']['name'])
					{
						$filename = rand()."_pic".".".pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION);
						
					} else {
						$filename = $old_profile_image;
					}

					if($_FILES['certificate']['name'])
					{
						$cert = "cert".rand()."_pic".".".pathinfo($_FILES["certificate"]["name"], PATHINFO_EXTENSION);
						
					} else {
						$cert = $old_certificate;
					}
		  
					$data = array(  'name'    => $name,
									'email'   => $email,
									'mobile'  => $mobile,
									'image'   => $filename,
									'company'    => $company,
									'description'   => $description,
									'state'  => $state,
									'city'   => $city,
									'zip'    => $zip,
									'experience'   => $experience,
									'practicing_since'  => $practicing_since,
									'projects_delivered'   => $projects_delivered,
									'team_size'    => $team_size,
									'facebook_link'   => $facebook_link,
									'twitter_link'  => $twitter_link,
									'linkedin_link'   => $linkedin_link,
									'instagram_link'   => $instagram_link,
									'license_no'  => $license_no,
									'certificate'   => $cert
												);

            if($this->db->update('vendors',$data, array('id' => $this->session->userdata('id'))))
            {
            	do_upload('vendor',$filename,'profile_image');
				do_upload('vendor',$cert,'certificate');			
							

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Profile updated Successfully</strong>
                  </div>';

     		  }  else {

		            return $msg = '<div class="alert alert-warning col-md-12">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                    <strong>Failed to update profile</strong>
		                  </div>';
		              } 
            
        	}
        }

	
		
	
	
				function password_change()
				{
		 
				 if(isset($_POST['update_password'])){
		 
					 extract($_POST);

					 $old_pass = $this->input->post('old_pass');
					 $new_pass = $this->input->post('new_pass');
					 $confirm_pass = $this->input->post('confirm_pass');

					 $encpass = $this->encryption->encrypt($old_pass);

					 $chk=$this->db->get_where('registrations',array('id'=> $this->session->userdata('id')))->row();
					 $store_password = $this->encryption->decrypt($chk->password);
					 if($old_pass != $store_password){

						 return $msg = '<div class="alert alert-danger col-md-7">
												 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												 Entered Wrong Password
											 </div>';
					 } else if($new_pass != $confirm_pass){
		 
						 return $msg = '<div class="alert alert-danger col-md-7">
												 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												 Password Not Matched
											 </div>';
					 } else {

						$new_encpass = $this->encryption->encrypt($new_pass);
		 
						 $data = array('password' => $new_encpass);
		 
						 if($this->db->update('registrations',$data,array('id'=>$this->session->userdata('id')))) {
		 
							//$smsmessage="your password has been changed successfully,New password:-".$npd;
							//$this->sendSMS($this->session->userdata('id'),$smsmessage); 
						 return $msg = '<div class="alert alert-success col-md-7">
												 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												 Password Updated Successfully
											 </div>';
						 }
					 }
		 
				 }
				}
	
	
	
	
	
	



}
 
