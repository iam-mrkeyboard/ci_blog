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

  public function create()
  {

    $data['title'] = 'Create Post';

    $this->form_validation->set_rules('tile', 'Title', 'required');
    $this->form_validation->set_rules('body', 'Body', 'required');

    if ($this->form_validation->run() === false) {
      $this->load->view('templates/header');
      $this->load->view('posts/create', $data);
      $this->load->view('templates/footer');
    } else {
      $this->post_model->create_post();
      redirect('posts');
    }
  }

  public function delete($id)
  {

    $this->post_model->delete_post($id);

    redirect('posts');
  }

  public function edit($slug)
  {
    $data['post'] = $this->post_model->get_posts($slug);

    if (empty($data['post'])) {
      return show_404();
    }

    $data['title'] = 'Edit Post';

    // $this->form_validation->set_rules('tile', 'Title', 'required');
    // $this->form_validation->set_rules('body', 'Body', 'required');

    if ($this->form_validation->run() === false) {
      $this->load->view('templates/header');
      $this->load->view('posts/edit', $data);
      $this->load->view('templates/footer');
    }
    // } else {

    //   $this->post_model->update_post($slug);
    //   redirect('posts');
    // }
  }

  public function update()
  {
    $this->post_model->update_post();

    redirect('posts');
  }
}
