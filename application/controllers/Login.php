<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_login');
      $this->load->model('M_siswa');
	}

  public function index()
  {
    $this->load->view('siswa/login');
  }

  //Login Siswa Tekno Awal
  public function login_siswa()
  {
    $nisn_siswa = htmlspecialchars($this->input->post('nisn_siswa', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login->login_siswa($nisn_siswa, $password);

    if ($cek_login->num_rows() > 0) {
     $data = $cek_login->row_array();

      if ($data['status_siswa']=='siswa') {
        $this->session->set_userdata('siswa', true);
        $this->session->set_userdata('ses_id', $data['id_siswa']);
        $this->session->set_userdata('ses_nisn', $data['nisn_siswa']);
        redirect('index.php/Siswa/index');

      }else {
        $url = site_url('index.php/Login/index');
        echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          NISN atau Password Salah<br> Silahkan Login Kembali
        </div>
        ');
        redirect($url);

      }

      // $url = site_url('index.php/C_login/siswa_tekno');
      $url = site_url('index.php/Login/index');
      echo $this->session->set_flashdata('msg', '

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        NISN atau Password Salah<br> Silahkan Login Kembali
      </div>
      ');
      redirect($url);
    }

    $url = site_url('index.php/Login/index');
      echo $this->session->set_flashdata('msg', '

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        NISN atau Password Salah<br> Silahkan Login Kembali
      </div>
      ');
      redirect($url);

  }


// Login Admin

  public function fa()
  {
    $this->load->view('admin/login');
  }

  public function admin_login()
  {
    $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login->admin_login($username, $password);

    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();

      if ($data['status']=='xeimaiPh9ahs4ie') {
        $this->session->set_userdata('xeimaiPh9ahs4ie', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_user', $data['username']);
        redirect('index.php/Admin/index');

       }elseif ($data['status']=='opver_all'){
        $this->session->set_userdata('opver_all', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_user', $data['username']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);

        redirect('index.php/Op_ver/index');

      }elseif ($data['status']=='opver_tjkt'){
        $this->session->set_userdata('opver_tjkt', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_ver/index');

      }elseif ($data['status']=='opver_pplg'){
        $this->session->set_userdata('opver_pplg', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_ver/index');

      }elseif ($data['status']=='opver_akl'){
        $this->session->set_userdata('opver_akl', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_ver/index');

      }elseif ($data['status']=='opver_mplb'){
        $this->session->set_userdata('opver_mplb', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_ver/index');

      }elseif ($data['status']=='opver_tm'){
        $this->session->set_userdata('opver_tm', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_ver/index');

      }elseif ($data['status']=='opver_to'){
        $this->session->set_userdata('opver_to', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_ver/index');

      }elseif ($data['status']=='op_adm'){
        $this->session->set_userdata('op_adm', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_adm/index');

      }elseif ($data['status']=='op_akademik'){
        $this->session->set_userdata('op_akademik', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_user', $data['username']);
        redirect('index.php/op_akademik/index');


        //awal op wawancara

      }elseif ($data['status']=='opwan_tjkt'){
        $this->session->set_userdata('opwan_tjkt', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara/index');

      }elseif ($data['status']=='opwan_pplg'){
        $this->session->set_userdata('opwan_pplg', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara/index');

      }elseif ($data['status']=='opwan_akl'){
        $this->session->set_userdata('opwan_akl', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara/index');

      }elseif ($data['status']=='opwan_mplb'){
        $this->session->set_userdata('opwan_mplb', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara/index');

      }elseif ($data['status']=='opwan_tm'){
        $this->session->set_userdata('opwan_tm', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara/index');

      }elseif ($data['status']=='opwan_to'){
        $this->session->set_userdata('opwan_to', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara/index');

        //akhir op wawancara


         //awal op wawancara full

      }elseif ($data['status']=='opwan_tjkt_full'){
        $this->session->set_userdata('opwan_tjkt_full', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara_full/index');

      }elseif ($data['status']=='opwan_pplg_full'){
        $this->session->set_userdata('opwan_pplg_full', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara_full/index');

      }elseif ($data['status']=='opwan_akl_full'){
        $this->session->set_userdata('opwan_akl_full', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara_full/index');

      }elseif ($data['status']=='opwan_mplb_full'){
        $this->session->set_userdata('opwan_mplb_full', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara_full/index');

      }elseif ($data['status']=='opwan_tm_full'){
        $this->session->set_userdata('opwan_tm_full', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara_full/index');

      }elseif ($data['status']=='opwan_to_full'){
        $this->session->set_userdata('opwan_to_full', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_status_kompetensi', $data['status_kompetensi']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_wawancara_full/index');

        //akhir op wawancara full

      }elseif ($data['status']=='op_tambah_siswa'){
        $this->session->set_userdata('op_tambah_siswa', true);
        $this->session->set_userdata('ses_id', $data['id_user']);
        $this->session->set_userdata('ses_user', $data['username']);

        redirect('index.php/Op_tambah_siswa/index');
        
      }else{
        echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Login Gagal, cek ulang username dan password anda.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('index.php/Login/fa');
      }
      
      echo "test";

    }

    $this->session->set_flashdata('msg', '
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Login Gagal, cek ulang username dan password anda.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
    redirect('index.php/Login/fa');
  }

  public function siswa_logout()
  {
    $this->session->sess_destroy();
    $this->session->set_flashdata('msg', '
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      Anda Berhasil Logout dari Sistem PPDB
    </div>
    ');
    $url = base_url();
    redirect('index.php/Login');
  }

  public function admin_logout()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('index.php/Login/fa');
  }

}
