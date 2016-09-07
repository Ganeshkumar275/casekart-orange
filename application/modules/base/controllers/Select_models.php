<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* To select the models
*/
class Select_models extends CI_Controller
{
	public function __construct() {
		parent:: __construct();
		$this->load->helper("url");
		$this->load->model("design_models");
		$this->load->library("pagination");
		$this->load->library('upload');
	}
	public function index($offset=0){
		if ($this->session->userdata('username')) {
			if (isset($_POST['amount'])) {
				$string = $_POST['amount'];
				$array = str_replace(':', '-',$string);
				$values = explode("-",$array);
				$config = array();
				$config["base_url"] = base_url() . "index.php/base/select_models/index";
				$config["total_rows"] = $this->design_models->record_count($values[0],$values[1]);
				$config["per_page"] = 52;
				$config["uri_segment"] = 4;

				$this->pagination->initialize($config);
				if($this->uri->segment(4)){
					$page = ($this->uri->segment(4)) ;
				}
				else{
					$page = 1;
				}
				$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
				$data["results"] = $this->design_models->fetch_design($config["per_page"], $page, $values[0], $values[1]);
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links );
				$data['min'] = $this->design_models->min();
				$data['max'] = $this->design_models->max();
				$data['price_from'] = $values[0];
				$data['price_to'] = $values[1];
				$data['num_cart'] = $this->design_models->cart_count();
			}else{			
				$config = array();
				$config["base_url"] = base_url() . "index.php/base/select_models/index";
				$config["total_rows"] = $this->design_models->count_all();
				$config["per_page"] = 52;
				$config["uri_segment"] = 4;

				$this->pagination->initialize($config);
				if($this->uri->segment(4)){
					$page = ($this->uri->segment(4)) ;
				}
				else{
					$page = 1;
				}
				$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
				$data['min'] = $this->design_models->min();
				$data['max'] = $this->design_models->max();
				$data["results"] = $this->design_models->fetch_design($config["per_page"], $page, $data['min'], $data['max']);
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links );
				$data['num_cart'] = $this->design_models->cart_count();
			}
			$this->load->view("select_models", $data);
		}else if(isset($_POST['username'])){
			$query = $this->db->get_where('customer_login_details',array('user_name'=>$_POST['username'],'password'=>$_POST['password']));
			if ($query->num_rows() > 0) {
				$data = $query->result();
				foreach ($data as $key => $value) {
					$userdata = array(
						'username' => $value->user_name,
						'userid' => $value->customer_id,
						);
					$this->session->set_userdata($userdata);

				}
				$this->load->view('select_models');
			}else{
				$this->load->view('login');
			}			
		}else{
			$this->load->view('login');
		}
		
	}
/*	public function more_design(){
			$config = array();
			$config["base_url"] = base_url() . "select_models/more_design";
			$config["total_rows"] = $this->design_models->record_count();
			$config["per_page"] = 20;
			$config["uri_segment"] = 3;

			$this->pagination->initialize($config);
			if($this->uri->segment(3)){
				$page = ($this->uri->segment(3)) ;
			}
			else{
				$page = 1;
			}
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data["results"] = $this->design_models->fetch_design($config["per_page"], $page);
			$str_links = $this->pagination->create_links();
			$data["links"] = explode('&nbsp;',$str_links );

			$this->load->view("select_models", $data);
		}*/
		// public function login()
		// {
		// 	$query = $this->db->get_where('customer_login_details',array('user_name'=>$_POST['username'],'password'=>$_POST['password']));
		// 	if ($query->num_rows() > 0) {
		// 		$data = $query->result();
		// 		foreach ($data as $key => $value) {
		// 			$userdata = array(
		// 				'username' => $value->user_name,
		// 				'userid' => $value->customer_id,
		// 				);
		// 			$this->session->set_userdata($userdata);

		// 		}
		// 		$this->index();
		// 	}else{
		// 		$this->load->view('login');
		// 	}
		// }
		public function include_page(){
			$this->load->view('models');
		}
		public function select_brands(){
			$this->db->select('b.brand_name, GROUP_CONCAT(m.model_name) as model_name, GROUP_CONCAT(m.price) as price, GROUP_CONCAT(m.model_id) as model_id'); 
			$this->db->from('brands b');
			$this->db->join('models m', 'm.brand_id = b.brand_id', 'JOIN');
			$this->db->group_by('b.brand_name');
			$query = $this->db->get()->result(); 
			echo json_encode($query);
		}

		public function top_viewed()
		{
			$array = explode(',', $_POST['id']);
			foreach ($array as $key => $value) {
				$data = array(
					'image_id' => $value,
					);
				$query = $this->db->get_where('top_viewed',$data);
				if($query->num_rows() > 0){
					$this->db->where('image_id',$value);
					$this->db->set('count','count+5',false);
					$this->db->update('top_viewed');
				}else{
					$this->db->insert('top_viewed',$data);
				}
			}
		}

		public function setSelecteddesign()
		{
			$selected_design = "selected_design";
			if (array_key_exists($selected_design, $this->session->all_userdata())) {
				$check = $this->session->userdata($selected_design);
				if(!in_array($_POST['ids'],$check , true)){
					array_push($check, $_POST['ids']);
					$this->session->set_userdata($selected_design,$check);
				}else{
					$key=array_search($_POST['ids'],$check);
					unset($check[$key]);
					$this->session->set_userdata($selected_design,$check);
				}
				
			}else{
				$this->session->set_userdata($selected_design, array($_POST['ids']));
			}
			echo json_encode($this->session->userdata('selected_design'));
		}
		public function getSessionvalue()
		{
			echo json_encode($this->session->userdata('selected_design'));
		}
	}