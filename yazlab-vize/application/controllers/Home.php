<?php
    class Home extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
        }
        public function index()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/index');
            $this->load->view('home/include/footer');
        }
        public function about()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/about');
            $this->load->view('home/include/footer');
        }
        public function amenities()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/amenities');
            $this->load->view('home/include/footer');
        }
        public function contacts()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/contacts');
            $this->load->view('home/include/footer');
        }
        public function gallery()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/gallery');
            $this->load->view('home/include/footer');
        }
        public function login()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/login');
            $this->load->view('home/include/footer');
        }
        public function mail()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/mail');
            $this->load->view('home/include/footer');
        }
        public function register()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/register');
            $this->load->view('home/include/footer');
        }
        public function faqs()
        {
            $this->load->view('home/include/header');
            $this->load->view('home/faqs');
            $this->load->view('home/include/footer');
        }
        
    }
?>