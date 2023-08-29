<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Departemen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ModelDepartemen");
        $this->load->model("Core");
    }
    public function index()
    {
        $data = array(
            'body' => 'Departemen/index',
            'data_departemen' => $this->ModelDepartemen->get_data_departemen()->result_array(),
        );
        $this->load->view('index', $data);
    }
    public function tambah()
    {
        $data = array(
            'body' => 'Departemen/tambah',
        );
        $this->load->view('index', $data);
    }
    public function prosesTambah()
    {
        $nama_departemen = $this->input->post('nama_departemen');
        $data = array(
            'nama_departemen' => $nama_departemen,
        );
        $this->ModelDepartemen->insert_data_departemen($data);
        $this->Core->setMessage("Berhasil", "Data berhasil ditambahkan", "success");
        redirect(base_url("Departemen"));
    }
    public function edit($id)
    {
        $data = array(
            'body' => 'Departemen/edit',
            'data_departemen' => $this->ModelDepartemen->get_data_departemen_by_id($id)->row_array(),
        );
        $this->load->view('index', $data);
    }
    public function prosesEdit($id)
    {
        $nama_departemen = $this->input->post('nama_departemen');
        $data = array(
            'nama_departemen' => $nama_departemen,
        );
        $this->ModelDepartemen->update_data_departemen($id, $data);
        $this->Core->setMessage("Berhasil", "Data berhasil diubah", "success");
        redirect(base_url("Departemen"));
    }
    public function hapus($id)
    {
        $this->ModelDepartemen->delete_data_departemen($id);
        $this->Core->setMessage("Berhasil", "Data berhasil dihapus", "success");
        redirect(base_url("Departemen"));
    }
}
    