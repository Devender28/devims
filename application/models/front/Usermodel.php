<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Usermodel extends MY_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
	//	$this->load->library('image_lib');
    }
	
	

public function get_user($id)
{
  return $this->db->get_where('registrations',array('id'=>$id))->row();
}



function profile_update()
        {

         if(isset($_POST['update_profile']))

        	{
				
				extract($_POST);
				
				if($_FILES['profile_image']['name'])
					{
						$filename = $name."_pic".".".pathinfo($_FILES["profile_image"]["name"], PATHINFO_EXTENSION);
						
					} else {
						$filename = $old_profile_image;
					}
		  
					$data = array('name'    => $name,
												'email'   => $email,
												'mobile'  => $mobile,
												'image'   => $filename,
												'address' => $address
															);

            if($this->db->update('registrations',$data, array('id' => $this->session->userdata('id'))))
            {
            	do_upload('user',$filename,'profile_image');
							
							

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
				
				
				
				
				
				
function addQuery()
        {
        if(isset($_POST['request_form']))
  	    {
        extract($_POST);
        		     
	 		$ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
			 
			 
			$product_array=explode(",",$product_id);
				 
			
			
			$data = array(//'order_id'      => $order_id,
			              'user_id'       => $this->session->userdata('id'),
						  'product_id'    => $product_array[1],
						  'order_id'      =>$product_array[0],
						  'msg'           =>$msg,
						  'issue'         =>$issue,
						  'status'        => 0
                          );

            if($this->db->insert('user_queries',$data))
            {
            	
          	  
		        
				
				return  $msg='<div align="center" class="alert alert-primary">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>        
                                        Congratulations! Your Request has been sent Successfully.
                                        
                                    </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Failed to Sub Category</strong>
                  </div>';
          } 
            
        }
}	
	
				
				
				
				
	
	



function userMessages(){
	
	  return $this->db->order_by('status','asec')->get_where('user_queries',array('user_id'=>$this->session->userdata('id')))->result();
    }







	
	
	
	



}
 
