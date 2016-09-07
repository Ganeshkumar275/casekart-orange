<?php

class Upload_csv_model extends CI_Model

{

  function __construct()

  {



    parent::__construct();





  }

  function upload_sampledata_csv()

  {



    $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");

    while($csv_line = fgetcsv($fp,10000))

    {

      for ($i = 0, $j = count($fp); $i < $j; $i++) 

      {

       $insert_csv = array();

       $insert_csv['img_id'] = $csv_line[0];

       $insert_csv['img_category_id'] = $csv_line[1];

       $insert_csv['img_category_name'] = $csv_line[2];

       $insert_csv['img_name'] = $csv_line[3];

       $insert_csv['img_path'] = $csv_line[4];

       $insert_csv['img_price'] = $csv_line[5];

        // print_r(array_slice($insert_csv,1));

   }

     $data = array(

       'img_id' => $insert_csv['img_id'] ,

       'img_category_id' => $insert_csv['img_category_id'],

       'img_category_name' => $insert_csv['img_category_name'],

       'img_name' => $insert_csv['img_name'] ,

       'img_path' => $insert_csv['img_path'],

       'img_price' => $insert_csv['img_price'],);

     $data['crane_features']=$this->db->insert('image_gallery', $data);

   }

   fclose($fp) or die("can't close file");

   $data['success']="success";

   echo "file hasbeen successfully uploaded!";

   // echo json_encode("success");

   return $data;

 }

}