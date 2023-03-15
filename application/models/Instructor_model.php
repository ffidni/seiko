<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instructor_model extends CI_Model
{
    public function get_instructors()
    {
        $instructors = $this->db->get("tb_instructor")->result_array();
        return $instructors;
    }
}