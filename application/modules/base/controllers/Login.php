<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* To select the models
*/
class Login extends CI_Controller
{
	public function index()
		{
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
				redirect('base/select_models');
			}else{
				$this->load->view('login');
			}
		}
	}