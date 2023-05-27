<?php

class Menu_model extends CI_Model
{
    public function getAllMenu()
    {
        return $this->db->get('menu');
    }

    public function getBestMenu()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('harga <=', 30000);
        return $this->db->get();
    }

    public function check_admin($user, $pass)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $user);
        $this->db->where('password', md5($pass));
        return $this->db->get();
    }

    public function tambahDataMenu($file)
    {
        // mengambil data yg dikirimkan dari form
        $data = [
            // true, supaya aman
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "foto" => $file['filename']
        ];

        $this->db->insert('menu', $data);
    }

    public function hapusDataMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('menu');
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('menu', ['id' => $id])->row_array();
    }

    public function ubahDataMenu($file)
    {
        $data = [
            // true, supaya aman
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "foto" => $file['filename']
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('menu', $data);
    }

    public function ubahDataGambar()
    {
        $data = [
            // true, supaya aman
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('menu', $data);
    }

    public function cariDataMenu()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get('menu')->result();
    }
}
