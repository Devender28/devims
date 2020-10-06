<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Loginmodel extends MY_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('date_helper');
    }
	
	
		
		
		function login(){

      if(isset($_POST['login'])){

        extract($_POST); 

			  $this->form_validation->set_rules('email', 'Email', 'required|trim');
			  $this->form_validation->set_rules('password', 'Password', 'required');
			  if($this->form_validation->run())
			  {
			   $result = $this->can_login($this->input->post('email'), $this->input->post('password'));
			  
			   if($result == '')
			   {
					//redirect('user/dashboard');
					echo '';
			   } 
			   else
			   {
			   
							echo	'<div class="alert alert-info" role="alert"> '.$result.'	</div>';											
			   
			   }
			  }
			  else
			  {
			  
																		
							echo '<div class="alert alert-danger" role="alert">Invalid Login Details!	</div>';							
			  }
       

      }

		}
		



		function can_login($email, $password)
				{
					$this->db->where('email', $email);
					$this->db->or_where('mobile', $email);
					$query = $this->db->get('registrations');
					if($query->num_rows() > 0)
						{
						foreach($query->result() as $row)
							{
								if($row->is_email_verified == 'yes')
									{
										$otp_data=$this->get_row('login_otp','user_id',$row->id);
										
										
									$store_password = $this->encryption->decrypt($row->password);
									if($password == $store_password || @$otp_data->otp == $password && @$otp_data->is_expired == '0')
										{
											$this->session->set_userdata('id', $row->id);
											$this->session->set_userdata('type', 'user');
											$this->update('login_otp',array('is_expired'=>'1'),'user_id',$row->id);
											$this->add_wishlist();
											$this->add_cart();
										}
										else
										{
											return  'Wrong Password';
										}
									}
								else
								{
								return  'First verify your email address';
								}
							}
						}
						else
						{
						return  'Wrong Email Address';
						}
				}

    


  // Return all rows
	public function get_row($table,$primaryfield,$id)
	{
			$this->db->where($primaryfield,$id);
			$this->db->where('is_expired',0);
			$q = $this->db->get($table);
			if($q->num_rows() > 0)
			{
					return $q->row();
			}
			return false;
	}


	function otp_log($id)
	{
		$this->db->where('user_id', $id);
        $q = $this->db->update('login_otp', array('is_expired'=>1));
        return $q;
	}


 



 function send_otp()
    {
        if(isset($_POST["email"])) 
        {
           
                
                $email = $_POST['email'];

              $this->db->where('email', $email);
							$this->db->or_where('mobile', $email);

							$query = $this->db->get('registrations');

							if($query->num_rows() > 0)
								{

									$row = $query->row();

									$this->otp_log($row->id);

									$mobile = $row->mobile;
											
												$otp = rand(100000, 999999);

												$data = array('user_id' => $row->id,
																			'otp' => $otp,
																			'is_expired' => 0,
																			'crdate' => date('Y-m-d H:i:s')											 
											                 );

											$this->add('login_otp',$data);

											echo '<div class="alert alert-success" role="alert"> Your One Time Password is ' . $otp .	'</div>';
										//   echo "Your One Time Password is " . $otp;
												
											} else {
												echo '<div class="alert alert-danger" role="alert"> No details found	</div>';
														}
								}
    }
	
		
	
	
	
	
	
	
	
	
	
	public function add_wishlist()
	{
			$ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
            $data=array( 'user_id'=> $this->session->userdata('id'),'status'=> '1');
            //$this->db->update('cart',$data,array('ip_address'=>$ip_address));
            $this->db->update('wishlist',$data,array('ip_address'=>$ip_address));
	}

	
	public function add_cart()
	{
			$ip_address=md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
            $data=array( 'user_id'=> $this->session->userdata('id'),'status'=> '1');
            $this->db->update('cart',$data,array('ip_address'=>$ip_address));
            
	}
	
	
	
	
	
	
	
		
	
	
	
	
	



}
 
