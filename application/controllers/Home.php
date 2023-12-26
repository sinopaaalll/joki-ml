<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $data['layanan'] = $this->db->get('layanan')->result();
        $this->load->view('landing-page/index', $data);
    }

    public function formulir($id)
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $data['layanan'] = $this->db->get_where('layanan', ['id' => $id])->row();
        $this->load->view('landing-page/formulir', $data);
    }
}
