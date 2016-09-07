<?php
class Upload_csv extends CI_Controller{
public $data;
public function __construct()
{
//Core controller constructor
parent::__construct();

$this->load->model('upload_csv_model');
// $this->load->library('csvreader');
    
}
public function index()

{	
	$this->load->helper('url');
	if(!$this->session->userdata('username')){
	$this->load->view('login_view');
	}
	else{
    $this->load->view('upload_csv');
}
}
function upload_sampledata()
{

$data['result']=$this->upload_csv_model->upload_sampledata_csv();
$this->session->set_flashdata('message',"Data Inserted Successfully");
// echo json_encode("success");
redirect('http://localhost/casekart/admin/upload_csv');

}
}