<?php

  class Pages extends CI_controller{
      public function view($page = 'Home'){
        if(!file_exists(APPPATH.'views/site/'.$page.'.php')){
          show_404();
        }

        //data['title'] = ucfirst($page);

        $this->load->view('site/header');
        $this->load->view('site/home');
        $this->load->view('site/about');
        $this->load->view('site/products');
        $this->load->view('site/service');
        $this->load->view('site/info');
        $this->load->view('site/contact');
        $this->load->view('site/footer');

      }
  }

?>
