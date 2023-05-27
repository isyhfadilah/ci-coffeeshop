<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        if (isset($this->session->userdata['admin'])) {
            redirect(site_url('admin'));
        }
    }
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['kopi'] = $this->Menu_model->getBestMenu()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = 'Halaman Login';

        $this->load->view('templates/header', $data);
        $this->load->view('home/login');
        $this->load->view('templates/footer');
    }

    public function login_check()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = $this->Menu_model->check_admin($username, $password)->row();

        if ($data) {
            $datasession = array(
                'id' => $data->id,
                'username' => $data->username,
                'admin' => $data->nama
            );

            $this->session->set_userdata($datasession);
            redirect(site_url('Admin'));
        } else {
            $msg = array('msg' => 'Username/password tidak ditemukan');
            $this->session->set_userdata($msg);
            redirect(site_url('home/login'));
        }
    }
}
