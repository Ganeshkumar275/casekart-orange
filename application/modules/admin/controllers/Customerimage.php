<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Customerimage extends CI_Controller {

	public function index(){
				$this->load->helper('url');
		if(!$this->session->userdata('username')){
			$this->load->view('login_view');
			}
	else{
	$this->load->view('customimage');
	}
	}
}