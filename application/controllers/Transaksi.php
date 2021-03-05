<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Transaksi';
        $this->load->helper('url');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('transaksi/home', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Transaksi';
        $this->load->helper('url');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('transaksi/tambah', $data);
        $this->load->view('layouts/footer');
    }

    public function edit($id)
    {
        $query = $this->db->get_where('transaksi', array('idtransaksi' => $id));
        $transaksi = $query->result()[0];
        $data['transaksi'] = $transaksi;
        $data['title'] = 'Edit Transaksi';
        $data['id'] = $id;
        $this->load->helper('url');
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('transaksi/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function hapus($id)
    {
        $this->db->where('idtransaksi', $id);
        $this->db->delete('transaksi');
        redirect('/transaksi');
    }

    public function action_tambah()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $namakaryawan = $this->input->post('namakaryawan');
        $transport = $this->input->post('transport');
        $lembur = $this->input->post('lembur');
        $data = array(
            'bulan' => $bulan,
            'tahun' => $tahun,
            'idkaryawan' => $namakaryawan,
            'transport' => $transport,
            'lembur' => $lembur,
        );
        $this->db->insert('transaksi', $data);
        redirect('/transaksi');
    }

    public function action_edit()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $namakaryawan = $this->input->post('namakaryawan');
        $transport = $this->input->post('transport');
        $lembur = $this->input->post('lembur');
        $this->db->set('bulan', $bulan);
        $this->db->set('tahun', $tahun);
        $this->db->set('namakaryawan', $namakaryawan);
        $this->db->set('transport', $transport);
        $this->db->set('lembur', $lembur);
        $this->db->insert('transaksi');
        redirect('/transaksi');
    }
}
