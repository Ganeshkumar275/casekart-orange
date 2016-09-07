<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Customerorder extends CI_Controller {
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->library('excel');
	// }

	public function index() {
		$this->load->helper('url');
		if(!$this->session->userdata('username')){
			$this->load->view('login_view');
		}
		else{

			$this->load->view('order');
		}
	}
	public function load(){
		$this->db->select('c.first_name,c.mobile_number,o.order_id,o.order_date,o.status');
		$this->db->from('order_detail o');
		$query = $this->db->join('customer_address_details c','o.customer_id = c.customer_id')->get();
		$data = $query->result();
		echo json_encode(array("data" => $data ));
	}
	public function widgets()
	{
		$this->db->from('order_detail');
		$query = $this->db->get();
		$rowcount['orders'] = $query->num_rows();
		$this->db->from('image_gallery');
		$query = $this->db->get();
		$rowcount['images'] = $query->num_rows();
		$this->db->from('models');
		$query = $this->db->get();
		$rowcount['models'] = $query->num_rows();
		echo json_encode($rowcount);
	}
	public function detailed_order(){
		$result = array();
		$this->db->select('c.first_name,c.mobile_number,c.billing_address_line_1,op.order_id,c.billing_address_line_2,c.shipping_address_line_1,c.shipping_address_line_2,o.order_date,GROUP_CONCAT(op.order_item)as order_item,GROUP_CONCAT(op.order_model) as order_model,o.status,GROUP_CONCAT(op.order_item_price) as item_price,GROUP_CONCAT(op.order_model_price) as model_price,GROUP_CONCAT(op.qty) as qty,GROUP_CONCAT(op.order_subtotal) as order_subtotal');
		$this->db->from('order_detail o');
		$this->db->join('order_particulars op','op.order_id = o.order_id');
		$this->db->join('customer_address_details c','o.customer_id = c.customer_id');
		$this->db->where('op.order_id',$_GET['id']);
		$this->db->where('o.order_id',$_GET['id']);
		$query = $this->db->get();
		$result['details'] = $query->result();
		foreach ($result['details'] as $data =>$row) {
			if ($row->order_item) {
				$array = explode(",",$row->order_item);
				$count = count($array);
				$result['path'] = array();
				for ($i=0; $i < $count; $i++) { 
					$this->db->select('img_path');
					$this->db->from('image_gallery');
					// $this->db->select('img_path')->from('image_gallery i');
					// $this->db->join('order_particulars o','o.order_item = i.img_id','Right');
					// $this->db->where('img_id',$array[$i]);
					$this->db->where('img_id',$array[$i]);
					$query = $this->db->get()->result();
					// print_r($query[$i]);
					foreach ($query as $key => $value) {
						$result['path'][] = $value->img_path;
					}
				}
			}
			if($row->order_model){
				$arrayModel = explode(",",$row->order_model);
				$countModel = count($arrayModel);
				$result['model_name'] = array();
				for ($i=0; $i < $countModel; $i++) 
				{ 	
					$this->db->select('model_name');
					$this->db->from('models');
					$this->db->where('model_id',$arrayModel[$i]);
					$query = $this->db->get()->result();
					foreach ($query as $key => $value) {
						$result['model_name'][] = $value->model_name;
					}
				}
			}
			if($row->item_price){
				$arrayIprice = explode(",",$row->item_price);
				$countIprice = count($arrayIprice);
				for ($i=0; $i < $countIprice; $i++) 
				{ 
					$result['iprice'][] = $arrayIprice[$i];
					
				}
			}
			if($row->model_price){
				$arrayMprice = explode(",",$row->model_price);
				$countMprice = count($arrayIprice);
				for ($i=0; $i < $countMprice; $i++) 
				{ 
					$result['mprice'][] = $arrayMprice[$i];
					
				}
			}
			if($row->qty){
				$arrayQty = explode(",",$row->qty);
				$countQty = count($arrayQty);
				for ($i=0; $i < $countMprice; $i++) 
				{ 
					$result['qty'][] = $arrayQty[$i];
					
				}
			}
			if($row->order_subtotal){
				$arraysub_total = explode(",",$row->order_subtotal);
				$countsub_total = count($arraysub_total);
				for ($i=0; $i < $countsub_total; $i++) 
				{ 
					$result['sub_total'][] = $arraysub_total[$i];
					
				}
			}
		}
		if(!$this->session->userdata('username')){
			$this->load->view('login_view');
		}
		else{

			$this->load->view('order_view',$result);
		}
	}
	function downloadFile(){
        $yourFile = "Sample-CSV-Format.txt";
        $file = @fopen($yourFile, "rb");
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=TheNameYouWant.txt');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($yourFile));
        while (!feof($file)) {
            print(@fread($file, 1024 * 8));
            ob_flush();
            flush();
        }
}
function ExportCSV()
{
$this->load->dbutil();
$this->load->helper('file');
$this->load->helper('download');
$delimiter = ",";
$newline = "\r\n";
$filename = "Todays_order.csv";
$query = "SELECT * FROM order_particulars";
$result = $this->db->query($query);
$data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
force_download($filename, $data);
}
function order_particular()
{
$this->load->dbutil();
$this->load->helper('file');
$this->load->helper('download');
$delimiter = ",";
$newline = "\r\n";
$filename = "order.csv";
$query = "SELECT * FROM order_particulars where order_id=$_GET[id]";
$result = $this->db->query($query);
$data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
force_download($filename, $data);
}
}                             