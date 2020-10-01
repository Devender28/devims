<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Productmodel extends CI_Model {
	
	
	
	function __construct()
    {
        parent::__construct();
		$this->load->helper('deven');
    }
	
	
   function addProduct()
        {

         if(isset($_POST['add_product']))

        	{
				
        extract($_POST);
		
		$max_id='pt'.time();
        $maxid='alb'.rand();
	 	$slug = url_title($name, 'dash', true);
				

		
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {   
    echo $i;  
         $filename = $max_id.'_'.rand().'.jpg'; 
        // $filename = $max_id.'_'.time().".".pathinfo($files['userfile']['name'][$i], PATHINFO_EXTENSION);     
        $_FILES['userfile']['name']= $filename;
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];     

    



      $data1 = array(   
                     'image'=> $filename,
                     'max_id'  => $max_id

        );
      do_upload('projects/images',$filename,'userfile');

      $this->db->insert('product_images',$data1);
     
      
      
    }	
			
	  
	  $iname = $_FILES['attachment1']['name'];
	  if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {
      
	    
		
		$filename = "attachment1".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	

		do_upload('projects/attachments',$filename,'attachment1');
		
		}
		
		
		
	   $iname1= $_FILES['attachment2']['name'];
	  if($iname1=="")
	   {
		   
		$filename1="";   
	   }
	   
	   else
	   {
      
	    
		
		$filename1 = "attachment2".time().".".pathinfo($iname1, PATHINFO_EXTENSION);
	

		do_upload('projects/attachments',$filename1,'attachment2');
		
		}
		
		
		
		
	 $iname3= $_FILES['image']['name'];
	  if($iname3=="")
	   {
		   
		$filename3="";   
	   }
	   
	   else
	   {
      
	    
		
		$filename3 = "featured_image".time().".".pathinfo($iname3, PATHINFO_EXTENSION);
	   
	

		do_upload('projects/featured_image',$filename3,'image');
		
		}
		
		
	 $iname4= $_FILES['foor_plan1']['name'];
	  if($iname4=="")
	   {
		   
		$filename4="";   
	   }
	   
	   else
	   {
      
	    
		
		$filename4 = "foor_plans".time().".".pathinfo($iname4, PATHINFO_EXTENSION);
	

		do_upload('projects/foor_plans',$filename4,'foor_plan1');
		
		}
		
		
	 $iname5= $_FILES['foor_plan2']['name'];
	  if($iname5=="")
	   {
		   
		$filename5="";   
	   }
	   
	   else
	   {
      
	    
		
		$filename5 = "foor_plans".time().".".pathinfo($iname5, PATHINFO_EXTENSION);
	

		do_upload('projects/foor_plans',$filename5,'foor_plan2');
		
		}
		

			
			
			$data = array('max_id'                     => $max_id,
			               'free_paid'                 => $free_paid,
			               
			              'design_cat'                 => $design_cat,
						  'cat_id'                     => $cat_id,
						  'name'                       => $name,
					      'slug'                       => $slug,
						  'description'                => $description,
						  'style'                      => $style,
						  'offer_premium'              => $offer_premium,
						  'location'                   => $location,
						  'bedrooms'                   => $bedrooms,
						  'bathrooms'                  => $bathrooms,
						  'price'                      => $price,
						  'offer_price'                 => $offer_price,
						  'facing'                     => $facing,
						  'open_space'                  => $open_space,
						  'parking'                     => $parking,
						  'compound_wall'               => $compound_wall,
						  'build_up_area'               => $build_up_area,
						  'kitchen'                     => $kitchen,
						  'living_area	'                => $living_area	,
						  'pool_size'                    => $pool_size,
						  'amenities'                    => $amenities,
						  'additional_rooms'             => $additional_rooms,
						  'equipment'                    => $equipment,
						  'first_size'                   => $first_size,
						  'second_size'                  => $second_size,
						  
						  'attachment1'                  => $filename,
						  'attachment2'                  => $filename1,
						  'foor_plan1'                  => $filename4,
						  'first_floor_description'     => $first_floor_description,
						  'foor_plan2'                  => $filename5,
						  'second_floor_description'    => $second_floor_description,
						  'property_video'              => $property_video,
						  'virtual_tour'                => $virtual_tour,
						  'featured_image'              => $filename3,
					  
						  'status'                     => 1
                           );
						   
						   
						   
            if($this->db->insert('product',$data))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Project Added Successfully</strong>
                  </div>';

     		  }  else {

		            return $msg = '<div class="alert alert-warning col-md-12">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                    <strong>Failed to Add Project Information</strong>
		                  </div>';
		              } 
            
        	}
        }



		function updateProduct()
        {

         if(isset($_POST['update_product']))

        	{
				
		extract($_POST);
		
		// print_r($_FILES['attachment1']).'<pre>';
		// print_r($_FILES['userfile']['error'][0]); exit;
		
		$slug = url_title($name, 'dash', true);
	if($_FILES['userfile']['error'][0] != 4)
	{
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {   
    echo $i;  
         $filename = $max_id.'_'.rand().'.jpg'; 
        // $filename = $max_id.'_'.time().".".pathinfo($files['userfile']['name'][$i], PATHINFO_EXTENSION);     
        $_FILES['userfile']['name']= $filename;
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];     

    



      $data1 = array(   
                     'image'=> $filename,
                     'max_id'  => $max_id

		);
		
      do_upload('projects/images',$filename,'userfile');

      $this->db->insert('product_images',$data1);
	
      
      
	}	
}
			
	  
	  $iname = $_FILES['attachment1']['name'];
	  if($iname=="")
	   {
		   
		$filename=$old_attachment1;   
	   }
	   
	   else
	   {
      
	    
		
		$filename = "attachment1".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	

		do_upload('projects/attachments',$filename,'attachment1');
		
		}
		
		
		
	   $iname1= $_FILES['attachment2']['name'];
	  if($iname1=="")
	   {
		   
		$filename1=$old_attachment2;;   
	   }
	   
	   else
	   {
      
	    
		
		$filename1 = "attachment2".time().".".pathinfo($iname1, PATHINFO_EXTENSION);
	

		do_upload('projects/attachments',$filename1,'attachment2');
		
		}
		
		
		
		
	 $iname3= $_FILES['image']['name'];
	  if($iname3=="")
	   {
		   
		$filename3=$old_fimage;   
	   }
	   
	   else
	   {
      
	    
		
		$filename3 = "featured_image".time().".".pathinfo($iname3, PATHINFO_EXTENSION);
	   
	

		do_upload('projects/featured_image',$filename3,'image');
		
		}
		
		
	 $iname4= $_FILES['foor_plan1']['name'];
	  if(!$iname4)
	   {
		   
		$filename4=$old_foor_plan1;   
	   }
	   
	   else
	   {
      
	    
		
		$filename4 = "foor_plans".time().".".pathinfo($iname4, PATHINFO_EXTENSION);
	

		do_upload('projects/foor_plans',$filename4,'foor_plan1');
		
		}
		
		
	 $iname5= $_FILES['foor_plan2']['name'];
	  if(!$iname5)
	   {
		   
		$filename5=$old_foor_plan2;   
	   }
	   
	   else
	   {
      
	    
		
		$filename5 = "foor_plans".time().".".pathinfo($iname5, PATHINFO_EXTENSION);
	

		do_upload('projects/foor_plans',$filename5,'foor_plan2');
		
		}
		

			
			
			$data = array('design_cat'                 => $design_cat,
			              'free_paid'                 => $free_paid,
						  'cat_id'                     => $cat_id,
						  'name'                       => $name,
					      'slug'                       => $slug,
						  'description'                => $description,
						  'style'                      => $style,
						  'offer_premium'              => $offer_premium,
						  'location'                   => $location,
						  'bedrooms'                   => $bedrooms,
						  'bathrooms'                  => $bathrooms,
						  'price'                      => $price,
						  'offer_price'                 => $offer_price,
						  'facing'                     => $facing,
						  'open_space'                  => $open_space,
						  'parking'                     => $parking,
						  'compound_wall'               => $compound_wall,
						  'build_up_area'               => $build_up_area,
						  'kitchen'                     => $kitchen,
						  'living_area	'                => $living_area	,
						  'pool_size'                    => $pool_size,
						  'amenities'                    => $amenities,
						  'additional_rooms'             => $additional_rooms,
						  'equipment'                    => $equipment,
						  'first_size'                   => $first_size,
						  'second_size'                  => $second_size,
						  
						  'attachment1'                  => $filename,
						  'attachment2'                  => $filename1,
						  'foor_plan1'                  => $filename4,
						  'first_floor_description'     => $first_floor_description,
						  'foor_plan2'                  => $filename5,
						  'second_floor_description'    => $second_floor_description,
						  'property_video'              => $property_video,
						  'virtual_tour'                => $virtual_tour,
						  'featured_image'              => $filename3
                           );
						   
						   
						   
            if($this->db->update('product',$data,array('id' => $this->uri->segment(4))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Project Updated Successfully</strong>
                  </div>';

     		  }  else {

		            return $msg = '<div class="alert alert-warning col-md-12">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                    <strong>Failed to Update Project Information</strong>
		                  </div>';
		              } 
            
        	}
        }




function allMainCategoryDetails()
         {
          return $this->db->get_where('main_category')->result();
         }

function allCategoryDetails()
         {
          return $this->db->get_where('category')->result();
         }	 

 function allSubCategoryDetails()
         {
          return $this->db->get_where('sub_category')->result();
         }	                   


function allStyles()
         {
          return $this->db->get_where('styles')->result();
         }



 function allProducts()
         {
          return $this->db->get_where('product')->result();
         }	 



function getProduct(){

      return $this->db->get_where('product',array('id'=>$this->uri->segment(4)))->row();
    }
 
	
function getProduct_name($id){

		$this->db->select('name');
		$query= $this->db->get_where('product',array('id'=>$id))->row();
		return $query->name;
	  }		
	
	
	
	function addFeatured()
	{
		if(isset($_POST['featured_add']))
		{
			extract($_POST);
			
			$pid = $this->input->post('p_id');
			$data = array('product_id' => $pid);

				 if($this->db->get_where('featured',array('product_id' => $pid))->num_rows() > 0)
				 {
					return $msg = '<div class="alert alert-warning col-md-12">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Already added to featured Project</strong>
				</div>';
				 } else {
			                 
			if($this->db->insert('featured',$data))
			{
            	

				return $msg = '<div class="alert alert-success col-md-12">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
							<strong>Featured Project added Successfully</strong>
						</div>';

		 }  else {

					return $msg = '<div class="alert alert-warning col-md-12">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<strong>Failed to add featured Project</strong>
								</div>';
						}
					}
		}
	}


	function allFeatured()
	{
	 return $this->db->get_where('featured')->result();
	}
	
	
	
	
	function allProductsReviews()
         {
          return $this->db->get_where('product_review')->result();
         }	



}
 
