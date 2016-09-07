<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Filter extends CI_Controller{
public function index()
{
    $string = $_POST['amount'];
    $array = str_replace(' ', '', str_replace('Rs.','',$string));
    $values = explode("-",$array);
    $this->item_list($values[0],$values[1]);

}

 public function item_list($min, $max) {
   // $sort_order = ($sort_order == 'ASC') ? 'ASC' : 'DESC';
   // $sort_columns = array('img_price');
   // $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'img_price';
   // $sql = 'SELECT img_price FROM ' . 'image_gallery' . ' ORDER BY ' . $sort_by . ' ' . $sort_order;
    $this->db->from('image_gallery');
    $this->db->where('img_price >=',$min);
    $query = $this->db->where('img_price <=',$max);
   $data = $query->get()->result();
   print_r($data);
}
public function item_lists($sort_by = 'img_price', $sort_order = 'DESC') {
   $sort_order = ($sort_order == 'DESC') ? 'DESC' : 'ASC';
   $sort_columns = array('img_price');
   $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'img_price';
   $sql = 'SELECT img_price FROM ' . 'image_gallery' . ' ORDER BY ' . $sort_by . ' ' . $sort_order;
   $query = $this->db->query($sql);
   $data = $query->result();
   echo json_encode($data);
}


}