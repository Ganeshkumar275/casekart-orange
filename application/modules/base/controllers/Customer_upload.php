<?php

class Customer_upload extends CI_Controller {
	
   public function __construct() { 
      parent::__construct(); 
   }
   
   public function index() { 
         // $this->load->view('upload_form', array('error' => ' ' ));
      $data['all_uploads'] = $this->db->get_where('customer_uploaded_images',array('customer_id'=>$this->session->userdata('userid')))->result();
      $this->load->view('upload_success', $data); 
   } 
   
   public function do_upload() { 
      $config['upload_path']   = './uploads/customer_images/250x250/'; 
      $config['allowed_types'] = 'gif|jpg|png'; 
      $config['max_size']      = 500; 
         // $config['max_width']     = 2048; 
         // $config['max_height']    = 1536;  
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('userfile')) {
         $error = array('error' => $this->upload->display_errors()); 
         $this->load->view('upload_success', $error); 
      }
      else { 
         $upload_data = $this->upload->data();
         $data['upload_data'] = $upload_data;
            $source_img = $upload_data['full_path'];    //Defining the Source Image
            $original_image_path = './uploads/customer_images/original_image/';    // original image path
            $new_img = $original_image_path . $upload_data['raw_name'].'_original'.$upload_data['file_ext'];  //Defining the Destination/New Image
            $data['source_image'] = $new_img;
            $this->create_thumb_gallery($upload_data, $source_img, $new_img, 250, 250);  //Creating Thumbnail for Gallery which keeps the original
            
            $details = array(
               'image_path' => $config['upload_path'],
               'image_name' => $data['upload_data']['file_name'],
               'customer_id' => $this->session->userdata('userid')
               );
            $this->db->insert('customer_uploaded_images',$details);
            $data['all_uploads'] = $this->db->get_where('customer_uploaded_images',array('customer_id'=>$this->session->userdata('userid')))->result();
            $this->load->view('upload_success', $data); 
         } 
      }
      public function create_thumb_gallery($upload_data, $source_img, $new_img, $width, $height)
      {
          //Copy Image Configuration
       $config['image_library'] = 'gd2';
       $config['source_image'] = $source_img;
       $config['create_thumb'] = FALSE;
       $config['new_image'] = $new_img;
       $config['quality'] = '100%';

       $this->load->library('image_lib');
       $this->image_lib->initialize($config);

       if ( ! $this->image_lib->resize() )
       {
        echo $this->image_lib->display_errors();
     }
     else
     {
        //Images Copied
        //Image Resizing Starts
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_img;
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = TRUE;
        $config['quality'] = '100%';
        $config['new_image'] = $source_img;
        $config['overwrite'] = TRUE;
        $config['width'] = $width;
        $config['height'] = $height;
        $dim = (intval($upload_data['image_width']) / intval($upload_data['image_height'])) - ($config['width'] / $config['height']);
        $config['master_dim'] = ($dim > 0)? 'height' : 'width';

        $this->image_lib->clear();
        $this->image_lib->initialize($config);

        if ( ! $this->image_lib->resize())
        {
         echo $this->image_lib->display_errors();
      }
      else
      {
            //echo 'Thumnail Created';
         return true;
      }
   }
}
} 
?>