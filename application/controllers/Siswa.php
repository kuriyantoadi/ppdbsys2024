<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			// $this->load->model('M_login');
      $this->load->model('M_siswa');

      // session login
			if ($this->session->userdata('siswa') != true) {
				$url = base_url('Login');
				redirect($url);
			}
	}

//Login User
  public function index()
  {
    $data['tampil'] = $this->M_siswa->timeline();


    $this->load->view('template/header-siswa');
    $this->load->view('siswa/dashboard', $data);
    $this->load->view('template/footer-siswa');
  }

  public function profil()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_siswa->profil($ses_id);

    $this->load->view('template/header-siswa');
    $this->load->view('siswa/profil', $data);
    $this->load->view('template/footer-siswa');
  }


}
