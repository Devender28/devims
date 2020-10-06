<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Vendorregistermodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('date_helper');
		}
		

		/* Register code for ajax functionality start */

		function register(){
			$res = array();

      if(isset($_POST['ven_register'])){

        extract($_POST); 

				$this->form_validation->set_rules('name', 'Name', 'required|trim');
				$this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[vendors.email]');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('mobile', 'Mobile', 'required');
				if($this->form_validation->run())
				{
				$verification_key = md5(rand());
				$encrypted_password = $this->encryption->encrypt($this->input->post('password'));
				
		
           $type=implode(', ', $this->input->post($type));
			
				
				$data = array(
					'name'  => $this->input->post('name'),
					'email'  => $this->input->post('email'),
					'password' => $encrypted_password,
					'mobile' => $this->input->post('mobile'),
					'type' => $type,
					'status' => 1,
					//'image' => $this->input->post('name').".jpg",
					'verification_key' => $verification_key
				);
				$id = $this->insert($data);
				if($id > 0)
				{
					$subject = "Please verify email for login";
					$message = "
					<p>Hi ".$this->input->post('name')."</p>
					<p>This is email verification mail from IMS. For complete registration process and login into system. First you want to verify your email by clicking this <a href='".base_url()."email/verify/".$verification_key."'>link</a>.</p>
					<p>Once you click this link your email will be verified and you can login into system.</p>
					<p>Thanks,</p>
					";
				
					// $this->sendMail($this->input->post('email'),$subject,$message);
				
					// $res['msg'] = '<div class="alert alert-success">Check in your email for email verification mail!</div>';
					// $res['status'] = 'success';
					// echo json_encode($res);

					// if($this->sendMail($this->input->post('email'),$subject,$message))
					// {
						return $msg = '<div class="alert alert-success col-md-12 ">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<strong>Check in your email for email verification mail!</strong></div>';
					
					// }
				}
				}
				else
				{

					return $msg = '<div class="alert alert-warning col-md-12 ">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Registration Failed!</strong></div>';	               
					// $res['msg'] ='<div class="alert alert-danger" role="alert">Registration Failed!	</div>';
					// $res['status'] = 'failed';
					// echo json_encode($res);	
				
				} 

      }

    }

		/* Register code for ajax functionality end */
	
	



     function insert($data)
 {
  $this->db->insert('vendors', $data);
  return $this->db->insert_id();
 }


 function sendMail($email,$subject,$message)
{
   $this->load->library('email');
      $this->email->set_newline("\r\n");
      $this->email->from('info@ims.com','IMS'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject($subject);
      $this->email->set_mailtype('html');
      $this->email->message($message);
      $this->email->send();
    

}


function verify_email($key)
 {
  $this->db->where('verification_key', $key);
  $this->db->where('is_email_verified', 'no');
  $query = $this->db->get('vendors');
  if($query->num_rows() > 0)
  {
   $data = array(
    'is_email_verified'  => 'yes'
   );
   $this->db->where('verification_key', $key);
   $this->db->update('vendors', $data);
   return true;
  }
  else
  {
   return false;
  }
 }
	
		
	
	
 function forgot_password()
    {
      if(isset($_POST['forgotpass']))
      {
        extract($_POST);

        $chkemail = $_POST['email'];

        if($this->db->get_where('registrations',array('email'=>$chkemail))->row())
        {
            $hash = base64_encode($chkemail);
            $message = "Password Reset Link: ".base_url('reset_password').'?a='.$hash;
          //  $this->fun->sendMail($chkemail,$message);


             return $msg='<div class="alert alert-success alert-dismissable">Password Reset Link Sent to your Mail</div>';




        } else {

          return $msg='<div class="alert alert-danger alert-dismissable">Entered Wrong Email ID</div>';
        }
      }
		}	
		


		function reset_password()
    {
      if(isset($_POST['reset_pass']))
      {
        extract($_POST);

				$chkemail = base64_decode($_GET['a']);
				
		$new_password = $this->encryption->encrypt($this->input->post('password'));

		$data = array('password' => $new_password);

        if($this->db->get_where('registrations',array('email'=>$chkemail))->row())
        {
            
             $this->db->update('registrations',$data,array('email'=>$chkemail));
			 return $msg='<div class="alert alert-success alert-dismissable">Your password has been changed successfully!</div>';
			
			
        } else {

          return $msg='<div class="alert alert-danger alert-dismissable">Entered Wrong Email ID</div>';
        }
      }
    }
	
	
	
	
	
	



}
 
