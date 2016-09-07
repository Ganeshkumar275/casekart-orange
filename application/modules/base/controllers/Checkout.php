<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Checkout page
*/
class Checkout extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('username')) {
			$this->load->view('login');
		}else{
			$combaine = array_combine($this->input->post('model_id'), $this->input->post('qty'));
			foreach ($combaine as $key => $qty) {
				$this->db->where('user_id',$this->session->userdata('userid'));
				$this->db->where('model_id',$key);
				$this->db->update('cart',array('qty'=>$qty));
			}
			$this->db->select('s.*, b.img_path, b.img_name, b.img_price, c.model_name, c.price, c.model_id');
			$this->db->from('cart s');
			$this->db->join('image_gallery b','s.image_id = b.img_id','join');
			$this->db->join('models c','s.model_id = c.model_id','join');
			$this->db->where('user_id',$this->session->userdata('userid'));
			$cart['cart_detail'] = $this->db->get()->result();
			$cart['customer_details'] = $this->db->get_where('customer_address_details',array('customer_id'=>$this->session->userdata('userid')))->result();
			$this->load->view('checkout_new',$cart);
		}
	}
	public function check_login(){
		if ($this->session->userdata('username')) {
			$details = $this->get_customer_details($this->session->userdata('userid'));
			echo json_encode($details);
		}
	}
	public function customer_login()
	{
		$data = $this->db->get_where('customer_login_details',array('user_name'=>$_POST['username'],'password'=>$_POST['password']))->result();
		if ($data) {		
			$customer_id = $data[0]->customer_id;
			$userdata = array('userid'=>$customer_id);
			$this->session->set_userdata($userdata);
			$details = $this->get_customer_details($customer_id);
			echo json_encode($details);
		}else{
			echo json_encode($data);
		}
		
	}
	public function get_customer_details($customer_id)
	{
		$customer_details = $this->db->get_where('customer_address_details',array('customer_id'=>$customer_id))->result();
		$userdata = array('username'=>$customer_details[0]->first_name);
		$this->session->set_userdata($userdata);
		return $customer_details;
	}
	public function order_detail()
	{
		$data = array(
			'customer_id' => $this->session->userdata('userid'),
			'ent_id' => $_GET['id'],
			'status' => 'pending',
			);
		$this->db->insert('order_detail',$data);
		$this->db->select('s.*, b.img_path, b.img_name, b.img_price, c.model_name, c.price, c.model_id, o.order_id');
		$this->db->from('cart s');
		$this->db->join('image_gallery b','s.image_id = b.img_id','join');
		$this->db->join('models c','s.model_id = c.model_id','join');
		$this->db->join('order_detail o','o.customer_id = s.user_id','join');
		$this->db->where('user_id',$this->session->userdata('userid'));
		$cart = $this->db->get()->result();
		foreach ($cart as $key => $value) {
			$data = array(
				'customer_id' 		=> $value->user_id,
				'order_item'		=> $value->image_id,
				'order_item_price'	=> $value->img_price,
				'order_model'		=> $value->model_id,
				'order_model_price'	=> $value->price,
				'qty'				=> $value->qty,
				'order_id'			=> $value->order_id,
				'order_subtotal'	=> (($value->img_price + $value->price) * $value->qty),
				);
			$this->db->insert('order_particulars',$data);
		}			
		$this->db->select('SUM(order_subtotal) as order_subtotal,order_id');
		$update_data = $this->db->from('order_particulars')->get()->result();
		foreach ($update_data as $key => $value) {
			$data = array(
				'grand_total'	=> $value->order_subtotal,
				);
			$this->db->where('order_id',$value->order_id);
			$this->db->update('order_detail',$data);
		}
		$this->delete_cart();
		$this->load->view('success');
	}
	public function delete_cart()
	{
		$this->db->where('customer_id',$this->session->userdata('userid'));
		$this->db->where('DATE(cart_date)',DATE('Y-m-d'));
		$query = $this->db->get('order_particulars');
		$delete = $query->result();
		foreach ($delete as $key => $value) {
			$this->session->unset_userdata($value->order_item);
			$this->db->where('user_id',$value->customer_id);
			$this->db->where('image_id',$value->order_item);
			$this->db->where('model_id',$value->order_model);
			$this->db->delete('cart');
		}
	}
	public function newshipaddress()
	{
		if ($this->session->userdata('userid') != null) {
		$data = array(
			'customer_id'    =>    $this->session->userdata('userid'),
			'first_name'    =>    $_POST['shipping_first_name'],
			'last_name'    =>    $_POST['shipping_last_name'],
			'shipping_address_line_1'    =>    $_POST['shipping_address_1'],
			'shipping_address_line_2'    =>    $_POST['shipping_address_2'],
			'mobile_number'    =>    $_POST['mobile_number'],
			'city'    =>    $_POST['shipping_city'],
			'state'    =>    $_POST['shipping_state'],
			'zip_code'    =>    $_POST['shipping_postcode'],
			);
		// $this->db->insert('customer_address_details',$data);
		echo json_encode('success');
		}else{
			echo json_encode('session_expired');
		}
	}
	public function select_shippingaddress()
	{
		$data = array(
			'ent_id'=>$_POST['id'],
			);
		$this->db->where('user_id',$this->session->userdata('userid'));
		$this->db->update('cart',$data);
		$delivery_address = $this->db->get_where('customer_address_details',array('customer_id'=>$this->session->userdata('userid'),'ent_id'=>$_POST['id']))->result();
		echo json_encode($delivery_address);
	}
}