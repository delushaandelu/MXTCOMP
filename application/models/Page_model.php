<?php
    class Page_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function place_order(){
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'itemi' => $this->input->post('itemi'),
                'qtyi' => $this->input->post('qtyi'),
                'itemii' => $this->input->post('itemii'),
                'qtyii' => $this->input->post('qtyii'),
                'itemiii' => $this->input->post('itemiii'),
                'qtyiii' => $this->input->post('qtyiii'),
                'itemiv' => $this->input->post('itemiv'),
                'qtyiv' => $this->input->post('qtyiv'),
                'address' => $this->input->post('address')
            );

            return $this->db->insert('orders', $data);

        }

    }
?>