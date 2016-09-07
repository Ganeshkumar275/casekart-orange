<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Session setting for models selection
*/
class Session_setting extends CI_Controller
{
	
	public function set_session(){
		$id = $_POST['id'];
		$model = $_POST['data'];
		$selected[$id] = $model;
		if ( array_key_exists($_POST['id'], $this->session->all_userdata()) ) {
			$this->session->unset_userdata($_POST['id']);
			$this->session->set_userdata($selected);
		}else{
			$old_session = $this->session->all_userdata();
			array_push($old_session, $selected);
			$this->session->set_userdata($selected);
		}
	}
	public function get_session(){
		echo json_encode($this->session->all_userdata());
	}
	public function cancel_order(){
		$this->session->sess_destroy();
		echo json_encode('removed');
	}
	// public function image_data(){
	// 	$image_id = $_POST['design'];
	// 	$this->session->set_userdata("design",$image_id);
	// }
	public function set_cart_session(){
		$id = $_POST['id'];
		$model = $_POST['data'];
		$selected[$id] = $model;
		if ( array_key_exists($_POST['id'], $this->session->all_userdata()) ) {
			$this->session->unset_userdata($_POST['id']);
			$this->session->set_userdata($selected);
		echo json_encode('cart_update');
		}else{
			if ($this->session->userdata('user_data')) {
			$old_session = $this->session->all_userdata();
			array_push($old_session, $selected);
			$this->session->set_userdata($selected);
			}else{
			$this->session->set_userdata($selected);
		}
		echo json_encode(array('data'=>'cart_new'));
		}
	}

	public function get_image_models()	{
		$ids = explode(',', $_POST['ids']);
		$output = array();
		foreach ($ids as $key => $value) {
			$where = array(
				'model_id' => $value,
				);
			$query = $this->db->get_where('models',$where);
			$output[] = $query->result_array();
			
		}
		print_r(json_encode($output));
	}
}