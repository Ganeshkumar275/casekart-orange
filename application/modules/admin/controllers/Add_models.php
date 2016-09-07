<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add_models extends CI_Controller {

	public function index(){
				$this->load->helper('url');
		if(!$this->session->userdata('username')){
			$this->load->view('login_view');
			}
	else{
		$this->load->model('Dropdwn_view');
		$data['result']=$this->Dropdwn_view->select_option();
		$this->load->view('Add_models',$data);
	}
	}
	
	
		public function add_model()
		{
			$data = array(
				'brand_id'=>$_POST['brand_id'],
				'model_name'=>$_POST['model_name'],
				);
			$validator = $this->db->get_where('models',$data);
			$count = $validator->num_rows();
			if($count == 0){
				$data = array(
				'brand_id'=>$_POST['brand_id'],
				'model_name'=>$_POST['model_name'],
				);
			$this->db->insert('models',$data);
			echo json_encode("success");
		}
		else{
			echo json_encode("failed");
		}

			
		}
	}