<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actions extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

        //$this->load->model(array('admin/Registrationsmodel','admin/Fun'));
        $this->load->helper('deven');

	}


	
	 

public function delete()

  {  
  	if (isset($_POST['x'])) {

    $id=$_POST['x'];
   
    $table=$_POST['bdr'];

    dev_delete($table,'id',$id);
}
}
 
	 
	 
	 
public function statuschk()

  {  
  	if (isset($_POST['x'])) {

    $id=$_POST['x'];
	$st=$_POST['y'];
	
	if($st=="1")
	{
	$status="0";	
	}
	else
	{
	$status="1";		
	}
   
    $table=$_POST['bdr'];
	
	$data = array( 'status' => $status);

    $this->db->update($table,$data,array('id' =>$id));
}
}
 









	 
	 
	 















}
