<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specialoffer extends CI_Controller {

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

        $this->load->model(array('admin/SpecialOffermodel','admin/Fun'));
        $this->load->helper('deven');

	} 
	
	
	

	 
	 
	 
	public function add()
     {
       $data['msg'] = $this->SpecialOffermodel->addSpecialOffer();
		

        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/special_offer/add_special_offer',$data);
        $this->load->view('admin/includes/footer');

     }

     
	 
public function details()
     {
        $data['all_main'] = $this->SpecialOffermodel->allSpecialOffers();
		$data['Table'] = 'special_offers';
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/special_offer/specialoffer_details',$data);
        $this->load->view('admin/includes/footer');

     }
	 
	 
	 
	
	

public function edit()
     {
        $data['msg'] = $this->SpecialOffermodel->updateSpecialOffer();
        $data['specialoffer']   = $this->SpecialOffermodel->getSpecialOffer();
		
		$this->load->view('admin/includes/header');
        $this->load->view('admin/includes/left_menu_bar');
        $this->load->view('admin/includes/top_bar');
        $this->load->view('admin/special_offer/specialoffer_edit',$data);
        $this->load->view('admin/includes/footer');

     }
	 
	 













}


