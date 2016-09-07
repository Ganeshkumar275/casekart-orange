<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* shopping cart
*/
class Cart extends CI_Controller
{
	public function index(){
		$data = array_filter($this->session->all_userdata());
		$count = count($data);
		$insert_array = array_slice($data,4,$count,true);
		foreach ($insert_array as $key => $value) {
			$model = explode(",",rtrim($value,','));
			$max = count($model);
			for ($i=0; $i < $max; $i++) { 
				$query = $this->db->get_where('cart', array('image_id' => $key,'model_id' => $model[$i]));
				$count = $query->num_rows();
				if ($count === 0) {
					$data = array(
						'image_id'=> $key,
						'model_id'=> $model[$i],
						);
					$this->db->insert('cart',$data);
				}
			}
		}
		$full_cart['image_path'] = $this->get_cart();
		$this->load->view('cart',$full_cart);
	}
	public function get_cart(){
		$query = "select s.*, b.img_path, c.model_name from cart s, image_gallery b, models c where s.`image_id` = b.`img_id` and s.`model_id` = c.model_id";
		return $result = mysql_query($query);
	}
}