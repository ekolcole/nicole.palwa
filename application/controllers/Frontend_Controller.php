<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Admin_users_model');
		}
     
public function index()
{
    $data['web_info'] = $this->Admin_users_model->fetch_info();

    $this->load->view('frontend/include/header');
    $this->load->view('frontend/page/homepage', $data);
    $this->load->view('frontend/include/footer');
}

		
	
	// public function about()
	// {
	// 	$this->load->view('frontend/include/header');
	// 	$this->load->view('frontend/page/homepage');
	// 	$this->load->view('frontend/include/footer');
	// }
}
