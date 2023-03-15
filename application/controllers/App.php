<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{


    public function dashboard()
    {
        $data = [
            "user" => $this->session->userdata("user"),
        ];
        $this->load->view('app/dashboard', $data);
    }


}