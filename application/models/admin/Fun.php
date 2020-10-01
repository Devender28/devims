<?php

 
class Fun extends CI_Model {
    
   
   function __construct()

    {

        parent::__construct();

    }


  function getfieldvalue($table,$field,$id)
    {
      $row = $this->db->get_where($table,array('id'=>$id))->row();
      echo $row->$field;
    }       
		
		
function getNewFieldValue($table,$field,$id,$id1)

    {

      $row = $this->db->get_where($table,array($id=>$id1))->row();

      return $row->$field;

    }
		
		
		
		
		function getType($id)

    {

      $row = $this->db->get_where('property_type',array('id'=>$id))->row();

      return $row->name;

    }

    function getSubType($id)

    {

      $row = $this->db->get_where('property_sub_type',array('id'=>$id))->row();

      return $row->name;

    }

    function getClient($id)

    {

      $row = $this->db->get_where('client',array('id'=>$id))->row();

      return $row->name;

    }












 
}
 
