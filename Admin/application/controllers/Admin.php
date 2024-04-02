<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("adminsession")) {
            redirect(base_url("adminlogin"));
            return false;
        }
    }
    public function index()
    {
        $data["locations"] = $this->CM->select_data("pnr", "*", "");
        $data["kullanici"] = $this->CM->select_data("kullanicilar", "*", "");
        $data["otobusler"] = $this->CM->select_data("otobus", "*", "");
        $data["seferler"] = $this->CM->select_data("seferler", "*", "");
        $this->load->view('admin/includes/header');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/includes/footer');
    }
    public function locations($type = "")
    {
        if ($this->input->method() == "post") {
            if ($type == "insert") {
                $resp = $this->CM->insert_data("pnr", $this->input->post());
                if ($resp) {
                    echo json_encode(array("status" => "true", "message" => "Başarılı", "reload" => base_url("admin/locations")));

                } else {
                    echo json_encode(array("status" => "false", "message" => "Please Try Again"));
                }
            }
        } else {
            $this->db->order_by('PNRID', 'desc');
            $data["locations"] = $this->CM->select_data("pnr", "*", "");
            $this->load->view('admin/includes/header');
            $this->load->view('admin/locations', $data);
            $this->load->view('admin/includes/footer');
        }

    }

    function delete_location($id)  //controllersda yönlendirmeler yapılır siilme işlmeiin fonksiyonunu burada sadece bir kere yazıyoruz commonmodeldeki fonksiyonu kullanıyoruz
    {
        $this->CM->delete_data("pnr", array("PNRID" => $id));
        redirect(base_url("admin/locations"));
    }
    function update_location($id)
    {
        if ($this->input->method() == "post") {
            $this->CM->update_data("pnr", $_POST, array("PNRID" => $id));
            echo json_encode(array("status" => "true", "message" => "Data Successfully Updated", "reload" => base_url("admin/locations")));
        } else {
            $data["location"] = $this->CM->select_data("pnr", "*", array("PNRID" => $id))[0];

            $this->load->view('admin/includes/header');
            $this->load->view('admin/edit_location', $data);
            $this->load->view('admin/includes/footer');
        }

    }
    function location_status($id)
    {
        print_r($_POST);
        echo $id;
    }
    public function kullanici($type = "")
    {
        $this->db->order_by('KullaniciID', 'desc');
        $data["kullanici"] = $this->CM->select_data("kullanicilar", "*", "");
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/kullanici');
        $this->load->view('admin/includes/footer');
    }


    function delete_kullanici($id)  //controllersda yönlendirmeler yapılır siilme işlmeiin fonksiyonunu burada sadece bir kere yazıyoruz commonmodeldeki fonksiyonu kullanıyoruz
    {
        $this->CM->delete_data("kullanicilar", array("KullaniciID" => $id));
        redirect(base_url("admin/kullanici"));
    }

    public function otobus($type = "")
    {
        if ($this->input->method() == "post") {
            if ($type == "insert") {
                $resp = $this->CM->insert_data("otobus", $this->input->post());
                if ($resp) {
                    echo json_encode(array("status" => "true", "message" => "Otobüs Başarı İle Eklendi", "reload" => base_url("admin/otobus")));

                } else {
                    echo json_encode(array("status" => "false", "message" => "Please Try Again"));
                }
            }
        } else {
            $this->db->order_by('OtobusID', 'desc');
            $data["otobusler"] = $this->CM->select_data("otobus", "*", "");
            $this->load->view('admin/includes/header', $data);
            $this->load->view('admin/otobus');
            $this->load->view('admin/includes/footer');
        }


    }
    function delete_otobus($id)  //controllersda yönlendirmeler yapılır siilme işlmeiin fonksiyonunu burada sadece bir kere yazıyoruz commonmodeldeki fonksiyonu kullanıyoruz
    {
        $this->CM->delete_data("otobus", array("OtobusID" => $id));
        redirect(base_url("admin/otobus"));
    }
    function update_otobus($id)
    {
        if ($this->input->method() == "post") {
            $this->CM->update_data("otobus", $_POST, array("OtobusID" => $id));
            echo json_encode(array("status" => "true", "message" => "Otobüs Başarı ile Güncellendi", "reload" => base_url("admin/otobus")));
        } else {
            $data["otobusler"] = $this->CM->select_data("otobus", "*", array("OtobusID" => $id))[0];

            $this->load->view('admin/includes/header');
            $this->load->view('admin/edit_otobus', $data);
            $this->load->view('admin/includes/footer');
        }

    }
    public function sefer($type = "")
    {
        if ($this->input->method() == "post") {
            if ($type == "insert") {
                $resp = $this->CM->insert_data("seferler", $this->input->post());
                if ($resp) {
                    echo json_encode(array("status" => "true", "message" => "Sefer Başarı İle Eklendi", "reload" => base_url("admin/sefer")));

                } else {
                    echo json_encode(array("status" => "false", "message" => "Please Try Again"));
                }
            }
        } else {
            $this->db->order_by('SeferID', 'desc');
            $data["seferler"] = $this->CM->select_data("seferler", "*", "");
            $data["otobus"] = $this->CM->select_data("otobus", "*", "");

            $this->load->view('admin/includes/header', $data);
            $this->load->view('admin/sefer');
            $this->load->view('admin/includes/footer');
        }
    }
    function delete_sefer($id)  //controllersda yönlendirmeler yapılır siilme işlmeiin fonksiyonunu burada sadece bir kere yazıyoruz commonmodeldeki fonksiyonu kullanıyoruz
    {
        $this->CM->delete_data("seferler", array("SeferID" => $id));
        redirect(base_url("admin/sefer"));
    }
    function update_sefer($id)
    {
        if ($this->input->method() == "post") {
            $this->CM->update_data("seferler", $_POST, array("SeferID" => $id));
            echo json_encode(array("status" => "true", "message" => "Sefer Başarı ile Güncellendi", "reload" => base_url("admin/sefer")));
        } else {
            $data["seferler"] = $this->CM->select_data("seferler", "*", array("SeferID" => $id))[0];

            $this->load->view('admin/includes/header');
            $this->load->view('admin/edit_sefer', $data);
            $this->load->view('admin/includes/footer');
        }

    }

}

?>