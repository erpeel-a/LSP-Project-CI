<?php

class Golongan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Data Golongan';
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('golongan/home', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Golongan';
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
        $data = array(
            'golongan' => $this->input->post('golongan'),
            'gajipokok' => $this->input->post('gajipokok'),
            'tunjangan' => $this->input->post('tunjangan'),
        );
        $this->db->insert('gaji', $data);
        redirect('/golongan');
    }

    public function action_edit()
    {
        $golongan = $this->input->post('golongan');
        $data = array(
            'golongan' => $this->input->post('golongan'),
            'gajipokok' => $this->input->post('gajipokok'),
            'tunjangan' => $this->input->post('tunjangan'),
        );
        $this->db->where('golongan', $golongan);
        $this->db->update('gaji', $data);
        redirect('/golongan');
    }
}
