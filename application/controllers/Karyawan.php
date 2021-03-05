<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Karyawan';
        $this->load->helper('url');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('karyawan/home', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Karyawan';
        $this->load->helper('url');
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
        $this->load->helper('url');
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
        $nama = $this->input->post('nama');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $alamat = $this->input->post('alamat');
        $tempatlahir = $this->input->post('tempatlahir');
        $tgllahir = $this->input->post('tgllahir');
        $golongan = $this->input->post('golongan');
        $status = $this->input->post('status');
        $data = array(
            'namakaryawan' => $nama,
            'jeniskelamin' => $jeniskelamin,
            'alamat' => $alamat,
            'tempatlahir' => $tempatlahir,
            'tgllahir' => $tgllahir,
            'golongan' => $golongan,
            'status' => $status,
        );
        $this->db->insert('karyawan', $data);
        redirect('/');
    }

    public function action_edit()
    {
        $idkaryawan = $this->input->post('idkaryawan');
        $nama = $this->input->post('nama');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $alamat = $this->input->post('alamat');
        $tempatlahir = $this->input->post('tempatlahir');
        $tgllahir = $this->input->post('tgllahir');
        $golongan = $this->input->post('golongan');
        $status = $this->input->post('status');
        $this->db->set('namakaryawan', $nama);
        $this->db->set('jeniskelamin', $jeniskelamin);
        $this->db->set('alamat', $alamat);
        $this->db->set('tempatlahir', $tempatlahir);
        $this->db->set('tgllahir', $tgllahir);
        $this->db->set('golongan', $golongan);
        $this->db->set('status', $status);
        $this->db->where('idkaryawan', $idkaryawan);
        $this->db->update('karyawan');
        redirect('/');
    }
}
