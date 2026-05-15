<?php

class Posts extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Latest Posts';
    $data['posts'] = $this->post_model->get_posts();

    $this->load->view('templates/header');
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer');
  }


  public function view($slug = null)
  {
    $data['post'] = $this->post_model->get_posts($slug);


    if (empty($data['post'])) {
      return show_404();
    }

    $data['title'] = $data['post']['tile'];

    $this->load->view('templates/header');
    $this->load->view('posts/view', $data);
    $this->load->view('templates/footer');
  }
}
