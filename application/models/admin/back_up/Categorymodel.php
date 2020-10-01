<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Categorymodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('date_helper');
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
        'upload_path'   => "../uploads/maincategory",
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
	
		
	
	
	
	
	
	
	
	
	



}
 
