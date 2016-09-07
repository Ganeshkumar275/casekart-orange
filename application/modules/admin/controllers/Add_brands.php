<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_brands extends CI_Controller {
	
	public function index(){
		$this->load->helper('url');
		if(!$this->session->userdata('username')){
			$this->load->view('login_view');
			}
	else{
		$this->load->view('Add_brands');
	}
	}
	public function add_brand()

		{
				$data = array(

				'brand_name'=>$_POST['id'],

				);

			$validator = $this->db->get_where('brands',$data);

			$count = $validator->num_rows();

			// print_r($count);

			if($count == 0){

			$data = array(

				'brand_name'=>$_POST['id'],

				);

			$this->db->insert('brands',$data);

		

			echo json_encode("no");

		}else{

			echo json_encode("yes");
		}
		}
		public function auto_cmpl(){

   			 $this->load->model('Auto_cmpl');

    		if (isset($_GET['term'])){

     		 $q = strtolower($_GET['term']);

     		 $this->Auto_cmpl->get_bird($q);
    }
  }
}