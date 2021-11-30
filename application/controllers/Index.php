<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
        $this->load->helper('url');
        $this->load->model('Hari');
        $this->load->model('Jam');
    }

    public function index()
    {
        $data['registration'] = $this->mymodel->tampil_data()->result();
        $data['guest'] = $this->mymodel->tampil_data()->result();
        $data['hari'] = $this->Hari->getAllUser();
        $data['jam'] = $this->Jam->getAllUser();
        $this->load->view('index', $data);
    }

    function tambah()
    {
        $this->load->view('index');
    }

    function tambah_aksi()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $ttl = $this->input->post('ttl');
        $agama = $this->input->post('agama');
        $alamat_lengkap = $this->input->post('alamat_lengkap');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $kelas = $this->input->post('kelas');
        $no_telp = $this->input->post('no_telp');
        $email = $this->input->post('email');
        $prestasi = $this->input->post('prestasi');
        $nama_orangtua = $this->input->post('nama_orangtua');
        $id_program = $this->input->post('id_program');
        $id_hari = $this->input->post('id_hari');
        $id_jam = $this->input->post('id_jam');
        $sumber = $this->input->post('sumber');



        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'ttl' => $ttl,
            'agama' => $agama,
            'alamat_lengkap' => $alamat_lengkap,
            'asal_sekolah' => $asal_sekolah,
            'kelas' => $kelas,
            'no_telp' => $no_telp,
            'email' => $email,
            'prestasi' => $prestasi,
            'nama_orangtua' => $nama_orangtua,
            'id_program' => $id_program,
            'id_hari' => $id_hari,
            'id_jam' => $id_jam,
            'sumber' => $sumber,
            "keterangan" => "-",
            "tanggal_daftar" => date('Y-m-d H:i:s'),
            "status_payment" => "unpaid",
            "status_account" => "non-active"
        );
        $this->mymodel->input_data($data, 'registration');
        redirect('/Index');
    }


    function tambah_tamu()
    {
        $nama = $this->input->post('nama');
        $parent = $this->input->post('parent');
        $grade = $this->input->post('grade');
        $tlp = $this->input->post('tlp');
        $address = $this->input->post('address');
        $message = $this->input->post('message');


        $data = array(
            'nama' => $nama,
            'parent' => $parent,
            'grade' => $tlp,
            'address' => $address,
            'message' => $message,
            "status" => "non-active"

        );
        $this->mymodel->input_data($data, 'guest');
        redirect('/Index');
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->mymodel->hapus_data($where, 'registration', 'guest');
        redirect('mymodel/dashboard');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['registration'] = $this->mymodel->edit_data($where, 'registration')->result();
        $this->load->view('mymodel/dashboard', $data);
    }
}
