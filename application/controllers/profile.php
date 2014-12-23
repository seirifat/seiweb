<?php
    class Profile extends CI_Controller
    {
        public function index()
        {
            $data['title'] = "Sei's Profile";
            $this->load->view('viewProfile',$data);
        }
    }