<?php 

class Blogmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
 
    function get_blog()
    {
      return  $this->db->get_where('blog',array('id'=>'1'))->row();
    }

    function getall_categories()
    {
      return  $this->db->get_where('blogcategory')->result();
    }
    function get_category($id)
    {
      return  $this->db->get_where('blogcategory',array('id'=>$id))->row();
    }

    function getall_posts($type)
    {
      return  $this->db->get_where('blogpost',array('type'=>$type))->result();
    }
    function get_post($id)
    {
      return  $this->db->get_where('blogpost',array('id'=>$id))->row();
    }

    

      

    function add_category()
    {
     if(isset($_POST['addcategory'])){

      $data = array('name' => $_POST['name'], 'slug'=>url_title($_POST['name'],'_',true), 'status'=>'1');

      if($this->db->insert('blogcategory',$data)){

       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Well done!</strong> Category Added Successfully.
                  </div>';
      } else{

      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sorry!</strong> Failed to Add Category
                  </div>';
      }
     }
    }

    function edit_category()
    {
     if(isset($_POST['updatecategory'])){

      $data = array('name' => $_POST['name'],'slug'=>url_title($_POST['name'],'_',true));
      if($this->db->update('blogcategory',$data, array('id'=>$this->uri->segment(3,0)))){
       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Well done!</strong> Blog Category Updated Successfully.
                  </div>';
      } else{
      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sorry!</strong> Failed to Update Blog Category
                  </div>';
      }
     }
    }

   function add_post()
    {
     if(isset($_POST['addimgpost']))

     {

       extract($_POST);

      $filename = "devim_".rand().'.'.pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
     
    

         

			$data = array( 'title'=> $title,
			               'slug' => url_title($title,'_',true),
                     'category'=> $cat,
                     'image'=> $filename,
                     //'home_image' => $home_image,
		                 'type'=> 'image',
                     'description'=> $desc,
										 'maxid' => 'dev'.rand(),
										 'meta_title' => $m_title,
                     'meta_description' => $m_desc,
                     'meta_keywords' =>$m_key,
                     'tags'  => $tags,
                     'status'=> 1

        );

      if($this->db->insert('blogpost',$data)){

				// $this->do_upload($home_image,'fimg');
				do_upload('blog/post',$filename,'image');

        // if(!$this->do_upload($filename,'image'))

        //   print_r($this->upload->display_errors());
        
       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Well done!</strong> Blog Post Added Successfully.
                  </div>';
      } else{
      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sorry!</strong> Failed to Add Blog Post 
                  </div>';
      }
     }
    }


		
		

		function edit_imgpost()
    {
     if(isset($_POST['updatepost'])){

       extract($_POST);

				 $data = array( 'title'            => $title,
												'slug'             => url_title($title,'_',true),
												'category'         => $cat,
												'description'      => $desc,
												'meta_title'       => $m_title,
												'meta_description' => $m_desc,
												'meta_keywords'    => $m_key,
												'tags'             => $tags

							         	);

      if($this->db->update('blogpost',$data,array('id' => $this->uri->segment(4)))){
        if(@$_FILES['image']['name']){

					do_upload('blog/post',$imageold,'image');

       // $this->upload->do_upload('image');
      }

    
      

       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Well done!</strong> Post Updated Successfully.
                  </div>';
      } else{
      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sorry!</strong> Failed to Update Post
                  </div>';
      }
     }
    }





 function add_postg()
    {
     if(isset($_POST['addblogpostgallery'])){
       extract($_POST);
	   
	   
 $maxid='devgal'.rand();

$files = $_FILES;
  echo  $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
   
    {   
    
				// $filename = $maxid.'_'.rand().'.jpg'; 
				 $filename = $maxid.'_'.rand().".".pathinfo($files['userfile']['name'][$i], PATHINFO_EXTENSION);     
        $_FILES['userfile']['name']= $filename;
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];     

     
   

      $data1 = array(   
                     'image'=> $filename,
                     'maxid'  => $maxid

        );
      $this->db->insert('postgallery',$data1);
       
			do_upload('blog/post',$filename,'userfile');
      
      
      
    }

    // $featured = $_FILES['fimg']['name']=$maxid."_".str_replace(' ','_',$_FILES['fimg']['name']);

    // $home_image = $_FILES['himg']['name']="devim_".rand().'.'.pathinfo($_FILES["himg"]["name"], PATHINFO_EXTENSION);

			$data = array( 'title'=> $title,
			               'slug'        => url_title($title,'_',true),
                     'category'=> $cat,
		                  'type'=> 'gallery',
                     'description'=> $desc,
										 'maxid' => $maxid,
										 'meta_title'       => $m_title,
										'meta_description' => $m_desc,
										'meta_keywords'    => $m_key,
										'tags'             => $tags,
                     'status'=> 1

        );

      if($this->db->insert('blogpost',$data)){

      
       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Well done!</strong> Post Added Successfully.
                  </div>';
      } else{
      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sorry!</strong> Failed to Add Post 
                  </div>';
      }
     }
		}
		

		function edit_postg()
    {
     if(isset($_POST['updatepostgal'])){
       extract($_POST);


			 if($_FILES['userfile']['error'][0] != 4)
			 {
@$files = $_FILES;
   @ $cpt = count($_FILES['userfile']['name']);
	
	
    foreach(@$_FILES['userfile']['name'] as $i=>$m)
    {   
   
			$filename = $maxid.'_'.rand().".".pathinfo($files['userfile']['name'][$i], PATHINFO_EXTENSION);   
        $_FILES['userfile']['name']= $filename;
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];     

      
    
      $data1 = array( 'image'=> $filename,
                     'maxid'  => $maxid

				);
				
				do_upload('blog/post',$filename,'userfile');
      
      $this->db->insert('postgallery',$data1);
      
      }
    }

		$data = array( 'title'=> $title,
		               'slug'        => url_title($title,'_',true),
                     'category'=> $cat,
                     'description'=> $desc,
                     'meta_title'       => $m_title,
										'meta_description' => $m_desc,
										'meta_keywords'    => $m_key,
										'tags'             => $tags

        );

   

      
    $ab = $this->db->update('blogpost', $data, array('maxid'=>$maxid));
      

      if($ab) {      

      

    return $msg = '<div class="alert alert-success col-md-12">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Well done! Gallary Updated</strong> Successfully.
                  </div>';  }
                  else{
return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sorry!</strong> No images were selected
                  </div>';

                  }  
     

}
}
	
function add_postvideo()
    {
     if(isset($_POST['addblogpostvideo'])){
       extract($_POST);
     

   // $home_image = $_FILES['fimg']['name']="devim_".rand().'.'.pathinfo($_FILES["fimg"]["name"], PATHINFO_EXTENSION);

			$data = array( 'title'      => $title,
			               'slug'       => url_title($title,'_',true),
                     'category'   => $cat,
                     'video'      => $video,
                    // 'home_image' => $home_image,
		                 'type'       => 'video',
                     'description'=> $desc,
										 'maxid'      => 'dev'.rand(),
										 'meta_title' => $m_title,
                     'meta_description' => $m_desc,
                     'meta_keywords' =>$m_key,
                     'tags'  => $tags,
                     'status'     => 1

        );

      if($this->db->insert('blogpost',$data)){

       // $this->do_upload($home_image,'fimg');
        
       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Well done!</strong> Post Added Successfully.
                  </div>';
      } else{
      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sorry!</strong> Failed to Add Post 
                  </div>';
      }
     }
    }

      


  


    function edit_videopost()
    {
     if(isset($_POST['updatevideopost'])){
       extract($_POST);
    

        
			$data = array( 'title'          => $title,
			              'slug'            => url_title($title,'_',true),
                     'category'=> $cat,
                     'Description'=> $desc,
                     'video'   => $video,
                     'meta_title' => $m_title,
                     'meta_description' => $m_desc,
                     'meta_keywords' =>$m_key,
                     'tags'  => $tags

        );

      if($this->db->update('blogpost',$data,array('id' => $this->uri->segment(4)))){

       
       
       return $msg = '<div class="alert alert-success col-md-7">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Well done!</strong> Post Updated Successfully.
                  </div>';
      } else{
      return  $msg ='<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Sorry!</strong> Failed to Update Post
                  </div>';
      }
     }
    }



    








}
?>
