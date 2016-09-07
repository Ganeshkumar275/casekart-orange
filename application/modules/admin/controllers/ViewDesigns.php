<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class ViewDesigns extends CI_Controller {

	public function index(){
			$this->load->helper('url');
			if(!$this->session->userdata('username')){
			$this->load->view('login_view');
			}
	else{
		 	$this->db->limit(50);
  			$images['img'] = $this->db->get_where('image_gallery')->result();
			$this->load->view('View_designs');
}

	}
	public function update_price(){

			$data = array(
			'img_price'=> $_POST['price'],
			);
		foreach ($_POST['checked_id'] as $key => $value) {
		$this->db->where('img_id',$value);
	    $this->db->update('image_gallery',$data);
	    echo json_encode("Success");
		}
}
}
?>