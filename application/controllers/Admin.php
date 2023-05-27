<?php
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        if (isset($this->session->userdata['admin'])) {
        } else {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Menu';
        $data['menu'] = $this->Menu_model->getAllMenu()->result();

        // if ($this->input->post('keyword')) {
        //     $data['menu'] = $this->Menu_model->cariDataMenu();
        // }

        $this->load->view('templates/header2', $data);
        $this->load->view('admin/menu', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah';

        // mengatur lokasi penyimpanan dan jenis file
        $config['upload_path']  = './assets/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->upload->do_upload('berkas');
            $data = $this->upload->data();

            $file = array(
                'filename' => $data['file_name'],
                'filetype' => $data['file_type'],
                'filepath' => $data['file_path'] . $data['file_name']
            );

            $this->Menu_model->tambahDataMenu($file);
            // ('nama', 'isi')
            // $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin');
        }
    }

    public function hapus($id)
    {
        $this->Menu_model->hapusDataMenu($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail data menu';
        $data['menu'] = $this->Menu_model->getMenuById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah';
        $data['menu'] = $this->Menu_model->getMenuById($id);

        // mengatur lokasi penyimpanan dan jenis file
        $config['upload_path']  = './assets/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            if ($_FILES['berkas']['name']) {
                $this->upload->do_upload('berkas');
                $data = $this->upload->data();

                $file = array(
                    'filename' => $data['file_name'],
                    'filetype' => $data['file_type'],
                    'filepath' => $data['file_path'] . $data['file_name']
                );

                $this->Menu_model->ubahDataMenu($file);
            } else {
                $this->Menu_model->ubahDataGambar();
            }

            // ('nama', 'isi')
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
