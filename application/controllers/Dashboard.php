<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        if ($username = $this->session->nama) {
            $this->load->view('dashboard');
        } else {
            redirect('auth');
        }
    }
}
