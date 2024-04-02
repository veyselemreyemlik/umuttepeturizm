<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CommonModel', 'CM');



    }
    public function index()
    {
        $data["pnr"] = array();
        $getInfo = $this->input->get();
        if (isset($getInfo['KalkisYeri'])) {
            $data["pnr"] = $this->CM->select_data("seferler", "*", $getInfo);

        }
        $this->load->view('home/include/header');
        $this->load->view('home/index', $data);
        $this->load->view('home/include/footer');
    }

    public function about()
    {
        $this->load->view('home/include/header');
        $this->load->view('home/about');
        $this->load->view('home/include/footer');
    }
    public function contacts()
    {
        $this->load->view('home/include/header');
        $this->load->view('home/contacts');
        $this->load->view('home/include/footer');
    }
    public function seferler()
    {

        $data["seferler"] = array();
        $getInfo = $this->input->get();
        if (isset($getInfo['KalkisYeri'])) {
            $data["seferler"] = $this->CM->select_data("seferler", "*", $getInfo);

        }
        $this->load->view('home/include/header');
        $this->load->view('home/seferler', $data);
        $this->load->view('home/include/footer');
    }

    public function bilet()
    {
        if (!$this->session->userdata("session")) {
            redirect(base_url("login"));
            return false;
        }

        $this->load->view('home/include/header');
        $this->load->view('home/bilet');
        $this->load->view('home/include/footer');
    }
    public function mail()
    {
        $this->load->view('home/include/header');
        $this->load->view('home/mail');
        $this->load->view('home/include/footer');
    }
    public function registerislem()
    {

        $this->load->view('home/registerislem');

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