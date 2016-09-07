<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* shopping cart
*/
class Cart extends CI_Controller
{
	public function index(){
		if (!$this->session->userdata('username')) {
			$this->load->view('login');
		}else{
			$data = array_filter($this->session->all_userdata());
			$count = count($data);
			$insert_array = array_slice($data,4,$count,true);
			foreach ($insert_array as $key => $value) {
				$model = explode(",",rtrim($value,','));
				$max = count($model);
				for ($i=0; $i < $max; $i++) { 
					$query = $this->db->get_where('cart', array('image_id' => str_replace('design_', "", $key),'model_id' => $model[$i],'user_id' => $this->session->userdata('userid')));
					$count = $query->num_rows();
					if ($count === 0) {
						$key = str_replace('design_', "", $key);
						if ($key) {
							$data = array(
								'user_id' => $this->session->userdata('userid'),
								'image_id'=> $key,
								'model_id'=> $model[$i],
								);
							$this->db->insert('cart',$data);
						}
					}
				}
			}
			$full_cart['image_path'] = $this->get_cart();
			$this->load->view('cart',$full_cart);
		}
	}
	public function get_cart(){
		$this->db->select('s.*, b.img_path, b.img_price, c.model_name, c.price, c.model_id');
		$this->db->from('cart s');
		$this->db->join('image_gallery b','s.image_id = b.img_id','join');
		$this->db->join('models c','s.model_id = c.model_id','join');
		$cartdata = $this->db->get()->result();
		return $cartdata;
	}
	public function remove_item()
	{
		$this->session->unset_userdata($_POST['img_id']);
		$this->db->where('image_id',$_POST['img_id']);
		$this->db->where('model_id',$_POST['model_id']);
		$this->db->where('user_id',$this->session->userdata('userid'));
		$this->db->delete('cart');
		if ($this->db->affected_rows()) {
			echo json_encode($this->db->affected_rows());
		}
		
	}
	public function empty_cart()
	{
		$this->db->where('user_id',$this->session->userdata('userid'));
		$this->db->delete('cart');
		echo json_encode('deleted');
		
	}

}