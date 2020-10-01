<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Supportmodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
    }
	





 function addMainCategory()
       {
        	if(isset($_POST['maincategory_add']))

        	{
        		extract($_POST);
        		     
	  
	  $iname = $_FILES['image']['name'];
	  if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {
     	$filename = "MCA".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	   
	    $config = array(
        'upload_path'   => "uploads/maincategory",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $filename
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
		
		}
			$slug = url_title($name, 'dash', true);
			$data = array('name'          => $name,
						  'slug'          => $slug,
						  'description'          => $description,
						  'design_cat'    => $design_cat,
						  'image'          => $filename,
                          'status'        => 1
                           );

            if($this->db->insert('main_category',$data))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Main Category Added Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Main Category Information</strong>
                  </div>';
          } 
            
        	}
        }




 function updateMessage()
        {
        	if(isset($_POST['reply_message']))

        	{
        	extract($_POST);
			
			date_default_timezone_set('Asia/Kolkata');      
            $date=date("Y/m/d h:i:sa");
           
		
		$data = array('reply_msg'          => $reply_msg,
		              'res_crdate'          => $date,
					  'status'        => 1
                      );
			

            if($this->db->update('user_queries',$data,array('id'=>$this->uri->segment(4))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Sucessfully Sent Reply Information</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed Information</strong>
                  </div>';
          } 
            
        	}
        }





  
  function getQueries(){

      return $this->db->get_where('user_queries',array('id'=>$this->uri->segment(4)))->row();
    }
  
  
  
  
  
  
  function allUserQueries()
         {
          return $this->db->get_where('user_queries',array("status"=>'0'))->result();
         }
		 
function allClosedQueries()
         {
          return $this->db->get_where('user_queries',array("status"=>'1'))->result();
         }
	
		



}
 
