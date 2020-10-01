<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	

	public function __construct()
	{
		parent::__construct();

        $this->load->model(array('admin/blogmodel','admin/fun'));
        $this->load->helper('deven');

	} 
	
		public function  commentstatus()
	{
		 if (isset($_POST['x'])) {
	
		$id=$_POST['x'];
		$status=$_POST['status'];
		if ($this->db->update('comments',array('status'=>$status),array('id'=>$id))) {
		echo 1;
	}else echo 0;
	}
}
   public function  updateblog()
	{
		$this->load->model('blogmodel');
		$data['msg'] = $this->blogmodel->updateblog();
		
		$data['blog']=$this->blogmodel->get_blog();


        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/blogpages/updateblog',$data);
        $this->load->view('admin/includes/footer');

    	
	}

	public function  addcategory()
	{
		
		$data['msg'] = $this->blogmodel->add_category();
		$data['categories']=$this->blogmodel->getall_categories();
		$data['Table']='blogcategory';
      
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/blogpages/addcategory',$data);
        $this->load->view('admin/includes/footer');

	}

	public function all_categories()
	{
		
		$data['categories']=$this->blogmodel->getall_categories();
		$data['Table']='blogcategory';

		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/blogpages/all_categories',$data);
        $this->load->view('admin/includes/footer');

	}
	
	public function  editcategory()
	{
		$this->load->model('blogmodel');
		$data['msg'] = $this->blogmodel->edit_category();
		
		$data['category']=$this->blogmodel->get_category($this->uri->segment(4));
		$data['Table']='blogcategory';

    	$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/blogpages/editcategory',$data);
        $this->load->view('admin/includes/footer');
	}

	public function  addimgpost()
	{
		$this->load->model('blogmodel');
		$data['msg'] = $this->blogmodel->add_post();
		$data['categories']=$this->blogmodel->getall_categories();
		

    	$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
		$this->load->view('admin/blogpages/addimgpost',$data);
		$this->load->view('admin/includes/footer');
	}


	public function all_imageposts()
	{
		
		$data['categories']=$this->blogmodel->getall_categories();
		$data['posts']=$this->blogmodel->getall_posts('image');
		$data['Table']='blogpost';

		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/blogpages/all_imageposts',$data);
        $this->load->view('admin/includes/footer');

	}


	public function  editimgpost()
	{
		
		$data['msg'] = $this->blogmodel->edit_imgpost();
		$data['categories']=$this->blogmodel->getall_categories();
		//$data['posts']=$this->blogmodel->getall_posts();
		$data['post']=$this->blogmodel->get_post($this->uri->segment(4));
		$data['Table']='blogpost';

		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
		$this->load->view('admin/blogpages/editimgpost',$data);
		$this->load->view('admin/includes/footer');
        
       
	}

	public function  addvideopost()
	{
		$this->load->model('blogmodel');
		$data['msg'] = $this->blogmodel->add_postvideo();
		$data['categories']=$this->blogmodel->getall_categories();
		$data['posts']=$this->blogmodel->getall_posts('video');
		$data['Table']='blogpost';

		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
		$this->load->view('admin/blogpages/addpostvideo',$data);
		$this->load->view('admin/includes/footer');

    	
	}

	public function all_videoposts()
	{
		$this->load->model('blogmodel');
		$data['categories']=$this->blogmodel->getall_categories();
		$data['posts']=$this->blogmodel->getall_posts('video');
		$data['Table']='blogpost';

		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/blogpages/all_videoposts',$data);
        $this->load->view('admin/includes/footer');

	}


	public function  editvideopost()
	{
		$this->load->model('blogmodel');
		$data['msg'] = $this->blogmodel->edit_videopost();
		$data['categories']=$this->blogmodel->getall_categories();
		//$data['posts']=$this->blogmodel->getall_posts();
		$data['post']=$this->blogmodel->get_post($this->uri->segment(4));
		$data['Table']='blogpost';

		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
		$this->load->view('admin/blogpages/editpostvideo',$data);
		$this->load->view('admin/includes/footer');
        
       
	}



	public function  addpostgallery()
	{
		$this->load->model('blogmodel');
		$data['msg'] = $this->blogmodel->add_postg();
		$data['categories']=$this->blogmodel->getall_categories();
		$data['posts']=$this->blogmodel->getall_posts('gallery');
		$data['Table']='blogpost';
    	$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
    
		$this->load->view('admin/blogpages/addpostmultipleimages',$data);
		$this->load->view('admin/includes/footer');
	}


	public function all_galleryposts()
	{
	    
		$this->load->model('blogmodel');
		$data['categories']=$this->blogmodel->getall_categories();
		$data['posts']=$this->blogmodel->getall_posts('gallery');
		$data['Table']='blogpost';

		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/blogpages/all_galleryposts',$data);
        $this->load->view('admin/includes/footer');

	}


	

	public function  editpostgal()
	{
		$this->load->model('blogmodel');
		$data['msg'] = $this->blogmodel->edit_postg();
		$data['categories']=$this->blogmodel->getall_categories();
		//$data['posts']=$this->blogmodel->getall_posts();
		$data['post']=$this->blogmodel->get_post($this->uri->segment(4));
		
		$data['Table']='blogpost';
    	$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
    
		$this->load->view('admin/blogpages/editgalpost',$data);
		$this->load->view('admin/includes/footer');
	}

	

	public function viewcomments()
	{
	    
    	$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $data['Table']='comments';
		$this->load->view('admin/blogpages/viewcomments',$data);
		$this->load->view('admin/includes/footer');
		
	}

	public function deletecomment()
	{  if (isset($_POST['x'])) {
	
		$id=$_POST['x'];
		
		if ($this->db->delete('comments',array('id'=>$id))) {
			$this->db->delete('comments',array('reply'=>$id));
		echo 1;
	}else echo 0;
		//redirect($_SERVER["HTTP_REFERER"]);
		
	}}

	public function delete()
	{  if (isset($_POST['x'])) {
	
		$id=$_POST['x'];
		$table=$_POST['bdr'];
		if ($this->db->delete($this->encrypt->decode($table),array('id'=>$id))) {
		echo 1;
	}else echo 0;
		//redirect($_SERVER["HTTP_REFERER"]);
		
	}}

    public function deletegalimg()
	{  if (isset($_POST['x'])) { 
	
		$id=$_POST['x'];
		$path=APPPATH."../../uploads/blog/post/".$_POST['y'];
		if ($this->db->delete('postgallery',array('id'=>$id))) {
			unlink($path);
		echo "1";
	}else echo "0";
		//redirect($_SERVER["HTTP_REFERER"]);
		
	}}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
