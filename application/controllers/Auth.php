<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function register()
    {

        $cabang = $this->Cabang_model->get_cabang();
        $paket = $this->Paket_model->get_paket();
        $data = [
            "cabang" => $cabang,
            "paket" => $paket,
        ];

        $this->load->view("template/header");
        $this->load->view("auth/register", $data);
    }

    public function registerProcess()
    {
        $post_data = $this->input->post();
        $this->load->view("template/head");

        if ($this->db->insert("tb_siswa", $post_data)) {
            redirect("app/dashboard");
        } else {
            $this->session->set_flashdata("error", "Email/nomor hp/username sudah digunakan!");
            redirect("auth/register");
        }

    }

    public function login()
    {
        $this->load->view("template/header");
        $this->load->view("auth/login");
    }

    public function logout()
    {
        $this->session->unset_userdata("user");
        redirect(base_url('/login'));
    }

    public function loginProcess()
    {
        $post_data = $this->input->post();
        $user = $this->db->get_where("tb_siswa", array("username" => $post_data['username'], "password" => $post_data['password']))->row();
        if ($user) {
            $this->session->set_userdata("user", $user);
            redirect(base_url("app/dashboard"));
        } else {
            $user = $this->db->get_where("tb_admin", array("username" => $post_data['username'], "password" => $post_data['password']))->row();
            // var_dump($user);
            if ($user) {
                $this->session->set_userdata("user", $user);
                redirect(base_url("app/dashboard"));
            } else {
                $this->session->set_flashdata("error", "Username atau password salah!");
                redirect(base_url("/login"));
            }
        }
    }
}