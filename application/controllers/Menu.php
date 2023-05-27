<?php

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Menu';
        $data['kopi'] =  $this->Menu_model->getAllMenu()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }
}
