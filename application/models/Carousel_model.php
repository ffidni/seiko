<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carousel_model extends CI_Model
{
    public function get_carousels()
    {
        $carousels = $this->db->get("tb_carousel")->result_array();
        return $carousels;
    }



}