<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golongan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Golongan';
        $this->load->helper('url');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('golongan/home', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Golongan';
        $this->load->helper('url');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('golongan/tambah', $data);
        $this->load->view('layouts/footer');
    }

    public function edit($id)
    {
        $query = $this->db->get_where('gaji', array('golongan' => $id));
        $golongan = $query->result()[0];
        $data['golongan'] = $golongan;
        $data['title'] = 'Edit Golongan';
        $data['id'] = $id;
        $this->load->helper('url');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('golongan/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function hapus($id)
    {
        $this->db->where('golongan', $id);
        $this->db->delete('gaji');
        redirect('/golongan');
    }

    public function action_tambah()
    {
        $golongan = $this->input->post('golongan');
        $gajipokok = $this->input->post('gajipokok');
        $tunjangan = $this->input->post('tunjangan');
        $data = array(
            'golongan' => $golongan,
            'gajipokok' => $gajipokok,
            'tunjangan' => $tunjangan,
        );
        $this->db->insert('gaji', $data);
        redirect('/golongan');
    }

    public function action_edit()
    {
        $golongan = $this->input->post('golongan');
        $gajipokok = $this->input->post('gajipokok');
        $tunjangan = $this->input->post('tunjangan');
        $this->db->set('golongan', $golongan);
        $this->db->set('gajipokok', $gajipokok);
        $this->db->set('tunjangan', $tunjangan);
        $this->db->where('golongan', $golongan);
        $this->db->update('gaji');
        redirect('/golongan');
    }
}
