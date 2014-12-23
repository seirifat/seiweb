<?php
    class Home extends CI_Controller
    {
        public function index()
        {
            $data['title'] = "Sei's Corner";
            $this->load->view('viewHome',$data);
        }
    }