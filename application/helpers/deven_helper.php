<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



if ( ! function_exists('sessionExist'))
 
{ 

   function sessionExist(){

         $CI =& get_instance(); 

         $userId = $CI->session->userdata('userId');

         if(empty($userId)){ 

          redirect(base_url('login'));
 
         }else{ 

           return (bool)$userId;

         }

    }

}


function do_upload($a,$b,$c)
                 {

                 	$CI =& get_instance();
                            $config['upload_path'] = APPPATH.'../uploads/'.$a;
                            $config['allowed_types'] = 'gif|jpg|png|pdf|zip';
                            $config['file_name'] = $b;
                            $config['overwrite'] = TRUE;

                            $CI->load->library('upload',$config);
                            $CI->upload->initialize($config);
                            $CI->upload->do_upload($c);
                            
									}


    function dev_trim($input, $length, $ellipses = true, $strip_html = true) {
    
    if ($strip_html) {
        $input = strip_tags($input);
    }
  
    
    if (strlen($input) <= $length) {
        return $input;
    }
  
    
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
  
    
    if ($ellipses) {
        $trimmed_text .= '...';
    }
  
    return $trimmed_text;
}



function dev_delete($table,$field,$value)

  {  
$CI =& get_instance();

 if($CI->db->delete($CI->encryption->decrypt($table),array($field=>$value)))
 	{

    echo 1;

  } else echo 0;
    
 



  }


  function get_all($table)
  {
  	$CI =& get_instance();
  	return $CI->db->get_where($table, array('status'=>1))->result();
	}
	
	function get_count($table,$field,$id)
	{
		$CI =& get_instance();
		$rows = $CI->db->get_where($table, array($field=>$id))->num_rows();
		if($rows > 0) 
		{
			return $rows;
		} else {
			return '0';
		}
	}




















 ?>


