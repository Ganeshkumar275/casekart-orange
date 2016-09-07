<?php

class Dropdwn_view extends CI_model
{

	function construct()

	{

		parent::__construct();

	}

	public function select_option()

	{

		$query=$this->db->get('brands');

		return $query->result();

	}

}



