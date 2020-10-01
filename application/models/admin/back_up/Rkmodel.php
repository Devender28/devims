<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Rkmodel extends CI_Model {
	
	
	
	
	
	
function login(){

      if(isset($_POST['login'])){

        extract($_POST);
        $user = $this->db->get_where('admin', array('username'=>$username, 'password'=>$password))->row();
        if($user){ 
         $this->session->set_userdata('vone_admin',$user->username);
         redirect('admin/dashboard', 'refresh');

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




 function updateMainCategory()
        {
        	if(isset($_POST['maincategory_edit']))

        	{
        	extract($_POST);
            $fp=$_FILES['image']['name'];
		
	      
		if($fp!="")
		  {
		$config = array(
        'upload_path'   => "../uploads/maincategory",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $image_old
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image'); 
		  
		}
		  
		$slug = url_title($name, 'dash', true);
		
		$data = array('name'          => $name,
					  'slug'          => $slug,
					  'description'   => $description,
					  'status'        => 1
                      );
			

            if($this->db->update('main_category',$data,array('id'=>$this->uri->segment(3))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Main Category Updated Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Updated Main Category Information</strong>
                  </div>';
          } 
            
        	}
        }





  
  function getMainCategory(){

      return $this->db->get_where('main_category',array('id'=>$this->uri->segment(3)))->row();
    }
  
  
  
  
  
  
  function allMainCategoryDetails()
         {
          return $this->db->get_where('main_category')->result();
         }
		 
		 
		 
		 
	function addCategory()
        {
        	if(isset($_POST['category_add']))

        	{
        		extract($_POST);
        		     
	  
	  
	  
	  $iname = $_FILES['image']['name'];
	  if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {
   	
		$filename = "C".time().".".pathinfo($iname, PATHINFO_EXTENSION);
        $config = array(
        'upload_path'   => "../uploads/category",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $filename
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
		
		
		
		
		}
		
			
			$slug = url_title($name, 'dash', true);
			
			$data = array('main_cat_id'         => $main_cat_id,
						  'slug'          => $slug,
						  'name'           => $name,
						  'description'    => $description,
						  'image'          => $filename,
                          'status'         => 1
                           );

            if($this->db->insert('category',$data))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Category Added Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Category Information</strong>
                  </div>';
          } 
            
        	}
        }







 function updateCategory()
        {
        	if(isset($_POST['category_edit']))

        	{
        		extract($_POST);
        		     
	  
	         $fp=$_FILES['image']['name'];
			 $ft=$_FILES['image']['type'];
			 $fs=$_FILES['image']['size'];
			 $temp=$_FILES['image']['tmp_name'];
	  
	      
	 if($fp!="")
		{
		  
	    $config = array(
        'upload_path'   => "../uploads/category",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $image_old
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image'); 
		  
		  
		  }
		  
		
		$slug = url_title($name, 'dash', true);
		$data = array('main_cat_id'         => $main_cat_id,
					   
					   'slug'          => $slug,
					  'name'          => $name,
					  'description'   => $description,
					   'status'        => 1
                       );
			

            if($this->db->update('category',$data,array('id'=>$this->uri->segment(3))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Category Updated Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Updated Category Information</strong>
                  </div>';
          } 
            
        	}
        }










  
  
  
  
  
  function getCategory(){

      return $this->db->get_where('category',array('id'=>$this->uri->segment(3)))->row();
    }
  
  
  
  
  
  function allCategoryDetails()
         {
          return $this->db->get_where('category')->result();
         }	 
















function addSubCategory()
        {
        	if(isset($_POST['sub_category_add']))

        	{
        		extract($_POST);
        		     
	  
	  
	  
	 $iname = $_FILES['image']['name'];
	 
	 if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {
   	 
	   $filename = "s".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	   
	    $config = array(
        'upload_path'   => "../uploads/sub_category",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $filename
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
	   
        }
		
			
			
			
			
		$iname1 = $_FILES['banner']['name'];
	 
	 if($iname1=="")
	   {
		   
		$filename1="";   
	   }
	   
	   else
	   {
   	 
	   $filename1 = "b".time().".".pathinfo($iname1, PATHINFO_EXTENSION);
	   
	    $config1 = array(
        'upload_path'   => "../uploads/sub_banners",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $filename1
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
		$this->upload->do_upload('banner');
	   
        }
		
		
			
			
			
			
			
			
			$slug = url_title($name, 'dash', true);
			
			$data = array('main_cat_id'    => $main_cat_id,
						  'cat_id'         => $cat_id,
						  'name'           => $name,
						  'slug'          => $slug,
						  'description'    => $description,
						  'image'          => $filename,
						  'banner'          => $filename1,
                          'status'         => 1
                           );

            if($this->db->insert('sub_category',$data))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Sub Category Added Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Sub Category Information</strong>
                  </div>';
          } 
            
        	}
        }







 function updateSubCategory()
        {
        	if(isset($_POST['sub_category_edit']))

        	{
        		extract($_POST);
        		     
	  
	         $fp=$_FILES['image']['name'];
			 $ft=$_FILES['image']['type'];
			 $fs=$_FILES['image']['size'];
			 $temp=$_FILES['image']['tmp_name'];
	  
	      
	if($fp!="")
		 {
	     $config = array(
        'upload_path'   => "../uploads/sub_category",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $image_old
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
		  
		  
		  }
		  
		  
		  
		  
		  
		  $fp1=$_FILES['banner']['name'];
			 $ft1=$_FILES['banner']['type'];
			 $fs1=$_FILES['banner']['size'];
			 $temp1=$_FILES['banner']['tmp_name']; 
		  
		 if($fp1!="")
		 {
	     $config1 = array(
        'upload_path'   => "../uploads/sub_banners",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $banner_old
        );
        
        $this->load->library('upload', $config1);
		$this->upload->initialize($config1);
		$this->upload->do_upload('banner');
		  
		  } 
		 
		  
		  
		  if($banner_old!="")
		 {
			
			$banner=$banner_old;
			 
		 }
		 else
		 {
			 
			@$banner=$_FILES['banner']['name'];
		 }
		  
		  
		  
		    
		  
		  
		  
		  
		  
		
		$slug = url_title($name, 'dash', true);
		$data = array('main_cat_id'    => $main_cat_id,
					  'cat_id'         => $cat_id,
					  'name'          => $name,
					  'slug'          => $slug,
					  'description'   => $description,
					   'banner'          => @$banner,
					   'status'        => 1
                       );
			

            if($this->db->update('sub_category',$data,array('id'=>$this->uri->segment(3))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Sub Category Updated Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Updated Sub Category Information</strong>
                  </div>';
          } 
            
        	}
        }










  
  
  
  
  
  function getSubCategory(){

      return $this->db->get_where('sub_category',array('id'=>$this->uri->segment(3)))->row();
    }
  
  
  
  
  
  function allSubCategoryDetails()
         {
          return $this->db->get_where('sub_category')->result();
         }	 






function addProducts()
        {
        	if(isset($_POST['add_product']))

        	{
				
        extract($_POST);
		
		$max_id='p_gal'.time()."".rand();
       
	    $uploadedfile=0;
        $files = $_FILES;
        $cpt = count($_FILES['multiple_images']['name']);
		
		
		
		
		for($i=0; $i<$cpt; $i++)
  
         {   
           
         
		$filename = "C".time()."".rand().".jpg";
       
	    $_FILES['multiple_images']['name']= $filename;
        $_FILES['multiple_images']['type']= $files['multiple_images']['type'][$i];
        $_FILES['multiple_images']['tmp_name']= $files['multiple_images']['tmp_name'][$i];
        $_FILES['multiple_images']['error']= $files['multiple_images']['error'][$i];
        $_FILES['multiple_images']['size']= $files['multiple_images']['size'][$i];     

     
      $filepath =  APPPATH."../uploads/products".$filename;
	  
         $this->config='';
         
		 $this->config =  array(
				  'upload_path'   => "../uploads/products",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'overwrite'       => false
                  
                );


      $this->load->library('upload', $this->config);
      $this->upload->initialize($this->config);
    
	 $data = array(   
                     'image'=> $filename,
                     'max_id'  => $max_id
      );
      if( $this->upload->do_upload('multiple_images'))
	  {
      $this->db->insert('product_images',$data);
      $uploadedfile++;
      }
    
	
 }
      
		     
	  
	  
	  
	
	 $iname = $_FILES['featured_image']['name'];
	 
	 if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {
   	 
	   $filename = "F".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	   
	    $config = array(
        'upload_path'   => "../uploads/featured_image",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $filename
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('featured_image');
	   
        }
	
	
	
	
	   if ( ! isset($trending))       $trending = '';
	   if ( ! isset($featured))       $featured= '';
	   if ( ! isset($recommended))    $recommended = '';
	   if ( ! isset($bestseller))     $bestseller = '';
	
			
			$slug = url_title($name, 'dash', true);
			
			$data = array('max_id'            =>$max_id,
						  'main_cat_id'       => $main_cat_id,
						  'cat_id'            => $cat_id,
						  'sub_cat_id'        => $sub_cat_id,
						  'brand_id'          => $brand_id,
					      'name'              => $name,
						  'slug'          => $slug,
						  'price'             => $price,
						  'offer'             => $offer,
						  'discount'          => $discount,
						  'featured_image'    => $filename,
						  'product_details'   => $product_details,
						  'features'          => $features,
						  
						  'trending'          => $trending,
						  'featured'          => $featured,
						  'recommended'       => $recommended,
						  'bestseller'         => $bestseller,
						  
                          'status'            => 1
                           );

            if($this->db->insert('product',$data))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Product Added Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Product Information</strong>
                  </div>';
          } 
            
        	}
        }




















function updateProducts()
        {
        	if(isset($_POST['update_product']))

        	{
        extract($_POST);
		
		
        $uploadedfile=0;
        $files = $_FILES;
        $cpt = count($_FILES['multiple_images']['name']);
		
		
if($cpt)
{
   
   for($i=0; $i<$cpt; $i++)
  
         {   
         $i;  
      	
		$filename = "C".time()."".rand().".jpg";
       
	    $_FILES['multiple_images']['name']= $filename;
        $_FILES['multiple_images']['type']= $files['multiple_images']['type'][$i];
        $_FILES['multiple_images']['tmp_name']= $files['multiple_images']['tmp_name'][$i];
        $_FILES['multiple_images']['error']= $files['multiple_images']['error'][$i];
        $_FILES['multiple_images']['size']= $files['multiple_images']['size'][$i];     

     
      $filepath =  APPPATH."../uploads/products".$filename;
	  
         $this->config='';
         
		 $this->config =  array(
				  'upload_path'   => "../uploads/products",
                  'allowed_types'   => "gif|jpg|png|jpeg",
                  'overwrite'       => false
                  
                );


      $this->load->library('upload', $this->config);
      $this->upload->initialize($this->config);
    
	 $data = array(   
                     'image'=> $filename,
                     'max_id'  => $max_id
      );
      if( $this->upload->do_upload('multiple_images'))
	  {
      $this->db->insert('product_images',$data);
      $uploadedfile++;
      }
    
  }
      
}
	  
	  
	   if ( ! isset($trending))       $trending = '';
	   if ( ! isset($featured))       $featured= '';
	   if ( ! isset($recommended))    $recommended = '';
	   if ( ! isset($bestseller))     $bestseller = '';
	
	  $slug = url_title($name, 'dash', true);
			
			$data = array('max_id'            =>$max_id,
						  'main_cat_id'       => $main_cat_id,
						  'cat_id'            => $cat_id,
						  'sub_cat_id'        => $sub_cat_id,
						  'brand_id'          => $brand_id,
						  'name'              => $name,
						  'slug'          => $slug,
						  'price'             => $price,
						  'discount'          => $discount,
						  'offer'             => $offer,
						  'product_details'   => $product_details,
						  'features'          => $features,
						  'trending'          => $trending,
						  'featured'          => $featured,
						  'recommended'       => $recommended,
						  'bestseller'         => $bestseller,
						 
                          'status'            => 1
                           );

            if($this->db->update('product',$data,array('id'=>$this->uri->segment(3))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Product Added Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Product Information</strong>
                  </div>';
          } 
            
        	}
        }










 function allProducts()
         {
          return $this->db->get_where('product')->result();
         }	 



function getProduct(){

      return $this->db->get_where('product',array('id'=>$this->uri->segment(3)))->row();
    }
 




function addStockEntry()
    {
     if(isset($_POST['add_stockentry'])){

       extract($_POST);
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
                     'quantity'   =>   $quantity,
                     'status'=> 1

        );

      if($this->db->insert('stock_entry',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Stock Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Stock Information</strong>
                  </div>';
      }
     }
    } 









 function addBrand()
        {
        	if(isset($_POST['brand_add']))

        	{
        		extract($_POST);
        		     
	  
	  
	  
	  $iname = $_FILES['image']['name'];
	  if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {
      
	    
		
		$filename = "B".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	   
	    $config = array(
        'upload_path'   => "../uploads/brands",
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
						  'image'          => $filename,
                          'status'        => 1
                           );

            if($this->db->insert('brands',$data))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Brand Added Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Brand Information</strong>
                  </div>';
          } 
            
        	}
        }







 function updateBrand()
        {
        	if(isset($_POST['brand_edit']))

        	{
        	extract($_POST);
            $fp=$_FILES['image']['name'];
		
	      
		if($fp!="")
		  {
		$config = array(
        'upload_path'   => "../uploads/brands",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $image_old
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image'); 
		  
		}
		  
		$slug = url_title($name, 'dash', true);
		
		$data = array('name'          => $name,
					  'slug'          => $slug,
					  
					  'status'        => 1
                      );
			

            if($this->db->update('brands',$data,array('id'=>$this->uri->segment(3))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Brand Updated Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Updated Brand Information</strong>
                  </div>';
          } 
            
        	}
        }

  
  
  function getBrand(){

      return $this->db->get_where('brands',array('id'=>$this->uri->segment(3)))->row();
    }
  
  
  
  
  
  function allBrands()
         {
          return $this->db->get_where('brands')->result();
         }
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	function addDealoftheday()
    {
     if(isset($_POST['add_dealoftheday'])){

       extract($_POST);
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
                     'end_date'   => $end_date,
                     'status'=> 1

        );

      if($this->db->insert('deal_of_the_day',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Deal Of The Day Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Deal Of The Day</strong>
                  </div>';
      }
     }
    } 
	
	
	
	
	
	
	
	
	
	
	
	function updateDealoftheday()
        {
        	if(isset($_POST['update_deal_of_the_day']))

        	{
        extract($_POST);
		
		
       
	
	 
			
			$data = array(
						  'main_cat_id'       => $main_cat_id,
						  'cat_id'            => $cat_id,
						  'sub_cat_id'        => $sub_cat_id,
						  'product_id'          => $product_id,
						  'end_date'              => $end_date,
						 
						  
                          'status'            => 1
                           );

            if($this->db->update('deal_of_the_day',$data,array('id'=>$this->uri->segment(3))))
            {
            	

            	return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Deal Of The Day Update Successfully</strong>
                  </div>';

     		  }  else {

            return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Deal Of The Day Information</strong>
                  </div>';
          } 
            
        	}
        }


	 
		 
		 
		 
		 
		 
		 
		 
	function dealofthedayList()
         {
          return $this->db->get_where('deal_of_the_day')->result();
         }
	 
		 
		 
	function getDealoftheday(){

      return $this->db->get_where('deal_of_the_day',array('id'=>$this->uri->segment(3)))->row();
    }	
	
	
	
	
	
	
	
	
	function addFeatured()
    {
     if(isset($_POST['add_featured'])){

       extract($_POST);
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
                     
                     'status'=> 1

        );

      if($this->db->insert('featured',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Featured Product Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Featured Product</strong>
                  </div>';
      }
     }
    } 
	
	
	
	
	
	function featuredList()
         {
          return $this->db->get_where('featured')->result();
         }
		 
		 
		 
		 
		 
		 
		 
		 
	function addFeatured2()
    {
     if(isset($_POST['add_featured2'])){

       extract($_POST);
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
                     
                     'status'=> 1

        );

      if($this->db->insert('featured2',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Featured2 Product Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Featured2 Product</strong>
                  </div>';
      }
     }
    } 
	
	
	
	
	
	function featured2List()
         {
          return $this->db->get_where('featured2')->result();
         }	 
		 
		 
		 
		 
	function addBestseller()
    {
     if(isset($_POST['add_bestseller'])){

       extract($_POST);
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
                     
                     'status'=> 1

        );

      if($this->db->insert('best_seller',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Best Seller Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Best Seller</strong>
                  </div>';
      }
     }
    } 
	
	
	
	
	
	function  bestsellerList()
         {
          return $this->db->get_where('best_seller')->result();
         }	
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		function addTrending()
    {
     if(isset($_POST['add_trending'])){

       extract($_POST);
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
                     
                     'status'=> 1

        );

      if($this->db->insert('trending',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Trending Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Trending</strong>
                  </div>';
      }
     }
    } 
	
	
	
	
	
	function  trendingList()
         {
          return $this->db->get_where('trending')->result();
         }	
		  
		 
		 
		 
		 
		 
	function addRecommended()
    {
     if(isset($_POST['add_recommended'])){

       extract($_POST);
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
                     
                     'status'=> 1

        );

      if($this->db->insert('recommended',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Recommended Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Recommended</strong>
                  </div>';
      }
     }
    } 
	
	
	
	
	
	function  recommendedList()
         {
          return $this->db->get_where('recommended')->result();
         }	
		  	 
		 
		 
		 
		function addOffers()
    {
     if(isset($_POST['add_offers'])){

       extract($_POST);
	   
	   
	    $iname = $_FILES['image']['name'];
		
	  if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {
      
	    
		
		$filename = "OFFER".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	   
	    $config = array(
        'upload_path'   => "../uploads/offers",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $filename
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
		
		
		
		
		
		}
		
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
					 'image' => $filename,
					 'place' => $place,
                     
                     'status'=> 1

        );

      if($this->db->insert('offers',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Offers Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Offers</strong>
                  </div>';
      }
     }
    } 
	
	
	
	
	
	function  offerList()
         {
          return $this->db->get_where('offers')->result();
         }	 
		 
		 
		 
		 	
			
			
			
			
			
			
			
			
		function addBanner()
    {
     if(isset($_POST['add_banners'])){

       extract($_POST);
	   
	   
	    $iname = $_FILES['image']['name'];
		
	  if($iname=="")
	   {
		   
		$filename="";   
	   }
	   
	   else
	   {
      
	    
		
		$filename = "OFFER".time().".".pathinfo($iname, PATHINFO_EXTENSION);
	   
	    $config = array(
        'upload_path'   => "../uploads/banners",
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite'     => TRUE,
        'file_name'     => $filename
        );
        
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
		
		
		
		
		
		}
		
     
     
      $data = array( 'main_cat_id'=> $main_cat_id,
					 'cat_id'=> $cat_id,
					 'sub_cat_id'=> $sub_cat_id,
                     'product_id' => $product_id,
					 'image' => $filename,
					 //'place' => $place,
                     
                     'status'=> 1

        );

      if($this->db->insert('banners',$data)){
        
      return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    <strong>Banners Added Successfully</strong>
                  </div>';
      } else{
      return $msg = '<div class="alert alert-warning col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Failed to Add Banners</strong>
                  </div>';
      }
     }
    } 
	
	
	
	
	
	function  bannerList()
         {
          return $this->db->get_where('banners')->result();
         }	 
		 
		 	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			



function allRegistrations()
         {
          return $this->db->get_where('registrations')->result();
         }





function allOrders()
         {
          return $this->db->get_where('orders')->result();
         }



function orderInfo()
         {
          return $this->db->get_where('order_details',array('transaction_id'=>$this->uri->segment(3)))->result();
         }


function orderDetails()
         {
          return $this->db->get_where('orders',array('transaction_id'=>$this->uri->segment(3)))->row();
         }


function allStock()
         {
          return $this->db->get_where('stock_entry')->result();
         }





function mainCategoryCount()
    {
      return $this->db->get_where('main_category')->num_rows();
    }
	
	
function categoryCount()
    {
      return $this->db->get_where('category')->num_rows();
    }	
	
	
	
function subCategoryCount()
    {
      return $this->db->get_where('sub_category')->num_rows();
    }
	
	
	
function productCount()
    {
      return $this->db->get_where('product')->num_rows();
    }
	
	
function stockEntryCount()
    {
      return $this->db->get_where('package')->num_rows();
    }





}
 
