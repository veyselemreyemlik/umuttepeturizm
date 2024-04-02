<?php 
    class Login extends CI_Controller
    {
        public function __construct()   //yapıcı metot
        {
            parent::__construct();
            $this->load->model('CommonModel', 'CM');
        }
        public function index()
        {
            if($this->session->userdata("session"))
            {
                redirect(base_url("home"));
                return false;
            }
            $this->load->view('home/include/header');
            $this->load->view('login');
            $this->load->view('home/include/footer');
        }

        function login()
        {   
            $data = $this->input->post();
            $resp = $this->CM->select_data("kullanicilar","*",$data);
            if(count($resp)>0)
            {
                $this->session->set_userdata("session",$resp[0]);
                echo json_encode(array("status"=>"true","message"=>"success"));
                
            }
            else
            {
                echo json_encode(array("status"=>"false","message"=>"username and password not match"));
            }
        }
    }

?>