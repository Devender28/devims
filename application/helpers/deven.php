<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


function do_upload($a,$b,$c)
                 {
                            $config['upload_path'] = APPPATH.'../../uploads/'.$a;
                            $config['allowed_types'] = 'gif|jpg|png|pdf|zip';
                            $config['file_name'] = $b;
                            $config['overwrite'] = TRUE;

                            $this->load->library('upload',$config);
                            $this->upload->initialize($config);
                            $this->upload->do_upload($c);
                            
                  }


























 ?>


