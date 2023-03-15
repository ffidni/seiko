<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model
{
    public function get_articles()
    {
        $articles = $this->db->get("tb_artikel")->result_array();
        return $articles;
    }

    public function get_article($link)
    {
        $this->db->where("link", $link);
        $article = $this->db->get("tb_artikel")->result_array()[0];
        return $article;
    }



}