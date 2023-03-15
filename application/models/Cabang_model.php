<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cabang_model extends CI_Model
{
    public function get_cabang()
    {
        $cabang = $this->db->get("tb_cabang")->result_array();
        return $cabang;
    }
}