<?php

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Data Transaksi';
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/menu');
        $this->load->view('transaksi/home', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Transaksi';
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
        $data = array(
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun'),
            'idkaryawan' => $this->input->post('namakaryawan'),
            'transport' => $this->input->post('transport'),
            'lembur' => $this->input->post('lembur'),
        );
        $this->db->insert('transaksi', $data);
        redirect('/transaksi');
    }

    public function action_edit()
    {
        $idtransaksi = $this->input->post('idtransaksi');
        $data = array(
            'bulan' => $this->input->post('bulan'),
            'tahun' => $this->input->post('tahun'),
            'idkaryawan' => $this->input->post('namakaryawan'),
            'transport' => $this->input->post('transport'),
            'lembur' => $this->input->post('lembur'),
        );
        $this->db->where('idtransaksi', $idtransaksi);
        $this->db->update()('transaksi', $data);
        redirect('/transaksi');
    }
}
