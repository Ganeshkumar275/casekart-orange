<?php 
/**
* for pagination
*/
class Design_models extends CI_Model
{
  public function __construct() {
    parent::__construct();
  }

  public function record_count($min_price,$max_price) {
    if ($min_price && $max_price) {
      $this->db->where('img_price >=', $min_price);
      $this->db->where('img_price <=', $max_price);
      $this->db->from('image_gallery');
      return $this->db->count_all_results();
    }else{
      return $this->db->count_all("image_gallery");
    }
  }
  public function count_all()
  {
    return $this->db->count_all("image_gallery");
  }
  public function fetch_design($limit, $start, $min_price, $max_price) {
    $this->db->limit($limit, $start);
    $this->db->order_by("img_price", "asc");
    $query = $this->db->get_where("image_gallery",array('img_price >=' => $min_price,'img_price <=' => $max_price));

    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function min()
  {
   $this->db->select_min('img_price');
   $query = $this->db->get('image_gallery');
   if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
      $min = $row->img_price;
    }
    return $min;
  }
  return false;
}

public function max()
{
 $this->db->select_max('img_price');
 $query = $this->db->get('image_gallery');
 if ($query->num_rows() > 0) {
  foreach ($query->result() as $row) {
    $max = $row->img_price;
  }
  return $max;
}
return false;
}
public function cart_count()
{
  $this->db->from('cart');
  $this->db->where('user_id',$this->session->userdata('userid'));
  $query = $this->db->get();
  if ($query->num_rows() > 0) {
    return $query->num_rows();
  }else{
    return $query->num_rows();
  }
}
}

?>