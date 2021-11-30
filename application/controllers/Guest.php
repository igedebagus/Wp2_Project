<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('guest_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['guest'] = $this->guest_model->getAll();
        $this->load->view('template/wrapper');
        $this->load->view('guest/awal', $data);
    }

    public function create()
    {
        $this->load->view('template/wrapper');
        $this->load->view('guest');
    }

    public function save()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('parent', 'Your Parent Name', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('grade', 'Your Grade', 'required');
        $this->form_validation->set_rules('tlp', 'Your Phone', 'required');
        $this->form_validation->set_rules('address', 'Your Address', 'required');
        $this->form_validation->set_rules('message', 'Your Message', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == true) {
            $data['nama'] = $this->input->post('nama');
            $data['parent'] = $this->input->post('parent');
            $data['agama'] = $this->input->post('agama');
            $data['grade'] = $this->input->post('grade');
            $data['tlp'] = $this->input->post('tlp');
            $data['address'] = $this->input->post('address');
            $data['message'] = $this->input->post('message');
            $data['status'] = $this->input->post('status');
            $this->guest_model->save($data);
            redirect('Guest');
        } else {
            $this->load->view('template/wrapper');
            $this->load->view('guest/ubah');
        }
    }

    function edit($id_guest)
    {
        $data['registration'] = $this->guest_model->getById($id_guest);
        $this->load->view('template/wrapper');
        $this->load->view('guest/ubah', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('parent', 'Your Parent Name', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('grade', 'Your Grade', 'required');
        $this->form_validation->set_rules('tlp', 'Your Phone', 'required');
        $this->form_validation->set_rules('address', 'Your Address', 'required');
        $this->form_validation->set_rules('message', 'Your Message', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == true) {
            $data['nama'] = $this->input->post('nama');
            $data['parent'] = $this->input->post('parent');
            $data['agama'] = $this->input->post('agama');
            $data['grade'] = $this->input->post('grade');
            $data['tlp'] = $this->input->post('tlp');
            $data['address'] = $this->input->post('address');
            $data['message'] = $this->input->post('message');
            $data['status'] = $this->input->post('status');
            $this->guest_model->update($data);
            redirect('/Guest');
        } else {
            $this->load->view('template/wrapper');
            $this->load->view('guest/ubah');
        }
    }

    function delete($id_guest)
    {
        $this->guest_model->delete($id_guest);
        redirect('/Guest');
    }
}
