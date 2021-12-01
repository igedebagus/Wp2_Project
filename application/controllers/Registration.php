<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('registration_model');
        $this->load->helper('url');
        $this->load->model('Hari');
        $this->load->model('Jam');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['hari'] = $this->Hari->getAllUser();
        $data['jam'] = $this->Jam->getAllUser();
        $data['registration'] = $this->registration_model->getAll();
        $this->load->view('template/wrapper');
        $this->load->view('registration/depan', $data);
    }

    public function create()
    {
        $this->load->view('template/wrapper');
        $this->load->view('registration');
    }

    public function save()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'required');
        $this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('prestasi', 'Prestasi', 'required');
        $this->form_validation->set_rules('nama_orangtua', 'Nama Orangtua', 'required');
        // $this->form_validation->set_rules('id_program', 'Id Program', 'required');
        // $this->form_validation->set_rules('id_hari', 'Id_Hari', 'required');
        // $this->form_validation->set_rules('id_jam', 'Id_Jam', 'required');
        // $this->form_validation->set_rules('tanggal_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('status_payment', 'Status Payment', 'required');
        if ($this->form_validation->run() == true) {
            $data['nama_lengkap'] = $this->input->post('nama_lengkap');
            $data['ttl'] = $this->input->post('ttl');
            $data['agama'] = $this->input->post('agama');
            $data['alamat_lengkap'] = $this->input->post('alamat_lengkap');
            $data['asal_sekolah'] = $this->input->post('asal_sekolah');
            $data['kelas'] = $this->input->post('kelas');
            $data['no_telp'] = $this->input->post('no_telp');
            $data['email'] = $this->input->post('email');
            $data['prestasi'] = $this->input->post('prestasi');
            $data['nama_orangtua'] = $this->input->post('nama_orangtua');
            // $data['id_program'] = $this->input->post('id_program');
            // $data['id_hari'] = $this->input->post('id_hari');
            // $data['id_jam'] = $this->input->post('id_jam');
            // $data['tanggal_daftar'] = $this->input->post('tanggal_daftar');
            $data['status_payment'] = $this->input->post('status_payment');
            $this->Registration_model->save($data);
            redirect('Registration');
        } else {
            $this->load->view('template/wrapper');
            $this->load->view('registration/create');
        }
    }

    function edit($id_regis)
    {
        $data['registration'] = $this->registration_model->getById($id_regis);
        $this->load->view('template/wrapper');
        $this->load->view('registration/edit', $data);
        $this->load->model('Hari');
        $this->load->model('Jam');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'required');
        $this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('prestasi', 'Prestasi', 'required');
        $this->form_validation->set_rules('nama_orangtua', 'Nama Orangtua', 'required');
        // $this->form_validation->set_rules('id_program', 'Id Program', 'required');
        // $this->form_validation->set_rules('id_hari', 'Id_Hari', 'required');
        // $this->form_validation->set_rules('id_jam', 'Id_Jam', 'required');
        // $this->form_validation->set_rules('tanggal_daftar', 'Tanggal Daftar', 'required');
        // $this->form_validation->set_rules('status_payment', 'Status Payment', 'required');
        if ($this->form_validation->run() == true) {
            $id_regis = $this->input->post('id_regis');
            $data['nama_lengkap'] = $this->input->post('nama_lengkap');
            $data['ttl'] = $this->input->post('ttl');
            $data['agama'] = $this->input->post('agama');
            $data['alamat_lengkap'] = $this->input->post('alamat_lengkap');
            $data['asal_sekolah'] = $this->input->post('asal_sekolah');
            $data['kelas'] = $this->input->post('kelas');
            $data['no_telp'] = $this->input->post('no_telp');
            $data['email'] = $this->input->post('email');
            $data['prestasi'] = $this->input->post('prestasi');
            $data['nama_orangtua'] = $this->input->post('nama_orangtua');
            // $data['id_program'] = $this->input->post('id_program');
            // $data['id_hari'] = $this->input->post('id_hari');
            // $data['id_jam'] = $this->input->post('id_jam');
            // $data['tanggal_daftar'] = $this->input->post('tanggal_daftar');
            // $data['status_payment'] = $this->input->post('status_payment');
            $this->registration_model->update($data, $id_regis);
            redirect('/Registration');
        } else {
            $id_regis = $this->input->post('id_regis');
            $data['registration'] = $this->registration_model->getById($id_regis);
            $this->load->view('template/wrapper');
            $this->load->view('registration/edit', $data);
        }
    }

    function delete($id_regis)
    {
        $this->registration_model->delete($id_regis);
        redirect('/Registration');
    }
}
