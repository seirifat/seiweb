<?php
    class Admin extends CI_Controller
    {
        public function index()
        {
            $data['title'] = "Sei's ADMIN";
            $this->load->view('viewAdminHome',$data);
        }
    }