<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_model extends CI_Model
{
    public function get_paket()
    {
        $paket = $this->db->get("tb_paket")->result_array();
        return $paket;
    }
}