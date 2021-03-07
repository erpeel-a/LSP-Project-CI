<?php

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Data Karyawan';
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('karyawan/home', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Karyawan';
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('karyawan/tambah', $data);
        $this->load->view('layouts/footer');
    }

    public function edit($id)
    {
        $query = $this->db->get_where('karyawan', array('idkaryawan' => $id));
        $karyawan = $query->result()[0];
        $data['karyawan'] = $karyawan;
        $data['title'] = 'Edit Karyawan';
        $data['id'] = $id;
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('karyawan/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function hapus($id)
    {
        $this->db->where('idkaryawan', $id);
        $this->db->delete('karyawan');
        redirect('/');
    }

    public function action_tambah()
    {
        $data = array(
            'namakaryawan' =>  $this->input->post('nama'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'alamat' => $this->input->post('alamat'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'tgllahir' => $this->input->post('tgllahir'),
            'golongan' => $this->input->post('golongan'),
            'status' => $this->input->post('status'),
        );
        $this->db->insert('karyawan', $data);
        redirect('/');
    }

    public function action_edit()
    {
        $idkaryawan = $this->input->post('idkaryawan');
        $data = array(
            'namakaryawan' =>  $this->input->post('nama'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'alamat' => $this->input->post('alamat'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'tgllahir' => $this->input->post('tgllahir'),
            'golongan' => $this->input->post('golongan'),
            'status' => $this->input->post('status'),
        );
        $this->db->where('idkaryawan', $idkaryawan);
        $this->db->update('karyawan', $data);
        redirect('/');
    }
}
