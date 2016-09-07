<?php

class Add_brand extends CI_Model{

function isBrandExist($email) {

    $this->db->select();

    $this->db->where('brand_name', $email);

    $query = $this->db->get('brands');



    if ($query->num_rows() > 0) {

        return true;

    } else {

        return false;

    }
}
}