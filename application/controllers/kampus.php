<?php
class kampus extends CCI_Controller{

    function __construct(){
        parent: :__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index(){
        $data['mahasiswa'] = $this->m_data->tampil_data()->result();
        $this->load->view('tampil_data',$data);
    }

    function index(){
        $this->load->view('input_data');
    }

    function tambah_aksi(){