<?php
error_reporting(-1);
class Imageupload extends CI_Controller {
  public function do_upload()
  {
    if($_POST['form_submit'] >= 1)
    {
      $images = array();
      $error="";
      $inc = 0;
      foreach($_FILES['images']['name'] as $key => $name){
        $name=$_FILES['images']['name'][$key];
        $type=$_FILES['images']['type'][$key];
        $sourcePath = 'assets/base/img/gallery/'. $_FILES['images']['name'][$key];
        $folder = str_replace(" ","_",strtolower($_POST['catagory']));

        if($type=='image/jpeg' || $type=='image/png' || $type=='image/gif' || $type=='image/pjpeg' || $type=='image/jpg')
        {
          if(file_exists($sourcePath))
          {
            $images['error'] = ++$inc." File Skipped";
          }
          else {
            $up=move_uploaded_file($_FILES['images']['tmp_name'][$key],$sourcePath);
            $q = $this->db->insert('image_gallery',array('img_name'=>$name,'img_path'=>$sourcePath, 'img_category_name' => $_POST['catagory'],'img_price' => $_POST['price'],'img_category_id'=>$folder,));
            if($up && $q) {
             $images['image_list'][] = $this->db->get_where('image_gallery',array('img_name'=>$name,'img_path'=>$sourcePath,))->result();
           }
           elseif(!$up)
           {
             $images['error'] = 'image not uploaded';
           }
           elseif(!$q)
           {
             $images['error'] = 'image not stored';
           }
         }
       }
     }
     print_r(json_encode($images));
   }
 }
 public function image()
 {

      $this->db->limit(50);
      $images = $this->db->get_where('image_gallery')->result();
      echo json_encode($images);
}
public function delete(){
  // $image = $this->db->delete('image_gallery',array('img_id'=>$_POST['checked_id'],'img_name'=>$_POST['img']));
  // unlink('../assets/img/gallery/'.$_POST['img']);
  // print_r(json_encode("success"));
  // print_r($_POST['str1']);
  foreach ($_POST['str1'] as $key => $value) {
  $this->db->select('order_item');
  $this->db->from('order_particulars');
  $this->db->where('order_particulars.order_item',$value);
  $where_clause = $this->db->get_compiled_select();
  // print_r(json_encode($where_clause));
  $this->db->where('image_gallery.img_id',$value); 
  $this->db->where("`img_id` NOT IN ($where_clause)", NULL, FALSE);
  $this->db->delete('image_gallery',array('img_id'=>$value,));
  // printf(mysql_affected_rows());
  $check = mysql_affected_rows();
  $response = array();
  if ($check > 0) {
  $response['status'] = 'deleted';
      } 
  else{
   $response['status'] = 'not_deleted';
}
echo json_encode($response);
  }
}
public function loadmore(){
      $result  = $this->db->get('image_gallery',$_POST['limit'],$_POST['offset']);
      $images['view'] = $result->result();
      $images['last_offset'] = $_POST['offset'] + 1;
      $images['offset'] = $_POST['offset']+50;
      $images['limit'] = $_POST['limit'];
      echo json_encode($images);
  }

}