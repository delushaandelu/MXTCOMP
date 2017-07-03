<?php

  class Pages extends CI_controller{
      public function index($page = 'Home'){
        if(!file_exists(APPPATH.'views/site/'.$page.'.php')){
          show_404();
        }
        
        //data['title'] = ucfirst($page);

        $this->load->view('site/header');
        $this->load->view('site/home');
        $this->load->view('site/headcontact');
        $this->load->view('site/slider');
        $this->load->view('site/about');
        $this->load->view('site/products');
        $this->load->view('site/service');
        $this->load->view('site/contact');
        $this->load->view('site/footer');

      }

      public function order($page = 'Home'){
            if(!file_exists(APPPATH.'views/site/'.$page.'.php')){
              show_404();
            }
            
            //data['title'] = ucfirst($page);

            $this->load->view('site/header');
            $this->load->view('site/home');
            $this->load->view('site/products');
            $this->load->view('site/order_item');
            $this->load->view('site/footer');

          }
  }

      
?>
