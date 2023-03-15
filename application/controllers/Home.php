<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $carousel = $this->Carousel_model->get_carousels();
        $instructors = $this->Instructor_model->get_instructors();
        $data = [
            "carousels" => $carousel,
            "instructors" => $instructors
        ];
        $this->load->view('template/header');
        $this->load->view('home/home', $data);
        $this->load->view('template/footer');
    }

    public function artikel($link = false)
    {
        if (!$link) {
            $articles = $this->Article_model->get_articles();
            $data = [
                "articles" => $articles
            ];
            $this->load->view('template/header');
            $this->load->view('home/artikel', $data);
            $this->load->view('template/footer');
        } else {
            $article = $this->Article_model->get_article($link);
            $data = [
                "article" => $article
            ];
            $this->load->view('template/header');
            $this->load->view('home/artikel_detail', $data);
            $this->load->view('template/footer');
        }

    }
}