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

            $this->form_validation->set_rules('name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email Address', 'required');
            $this->form_validation->set_rules('itemi', 'Item No 1', 'required');
            $this->form_validation->set_rules('qtyi', 'Item No 1 QTY', 'required');

            if($this->form_validation->run()===FALSE){
              $this->load->view('site/header');
              $this->load->view('site/home');
              $this->load->view('site/products');
              $this->load->view('site/order_item');
              $this->load->view('site/footer');
            }else{
              $this->Page_model->place_order();

              $this->load->view('site/header');
              $this->load->view('site/home');
              $this->load->view('site/success');
              $this->load->view('site/footer');
            }

            

          }
  }

      
?>
