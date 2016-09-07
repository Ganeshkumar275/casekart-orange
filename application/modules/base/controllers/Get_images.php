<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Get image by json
*/

class Get_images extends CI_Controller

{

	public function load_image(){

		if ($_GET['cat'] != "all") {

			$where = array(

				'img_category_id' => $_GET['cat'],

				);

			$query = $this->db->get_where('image_gallery',$where);

			$images = $query->result();

			echo json_encode($images);

		}else{

			$query = $this->db->get('image_gallery');

			$images = $query->result();

			echo json_encode($images);		

		}

	}

	public function load_all_image(){

			$query = $this->db->get('image_gallery',50,0);

			$images = $query->result();

			echo json_encode($images);

	}
	function loadmore(){
      $result  = $this->db->get('image_gallery',$_POST['limit'],$_POST['offset']);
      $images['view'] = $result->result();
      $images['last_offset'] =$_POST['offset'];
      $images['offset'] =$_POST['offset']+25;
      $images['limit'] =$_POST['limit'];
      echo json_encode($images);
    }
	public function getImgName(){
		$array = explode(',', $_POST['id']);
		$output = array();

		foreach ($array as $key => $value) {

			$where = array(

				'img_id' => $value,

				);

			$query = $this->db->get_where('image_gallery',$where);

			$output[] = $query->result_array();

			

		}

		print_r(json_encode($output));

	}

}