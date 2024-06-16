<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op_adm extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->model('M_admin');
      $this->load->model('M_pendaftar');

      if ($this->session->userdata('op_adm') != true) {
            $url = base_url('index.php/Login/fa');
            redirect($url);
        }
			
    }

  //Login User

  public function index()
  {
    $data['count_adm'] = $this->M_admin->count_adm();
    $data['count_selesai_adm'] = $this->M_admin->count_selesai_adm();
    $data['count_belum_adm'] = $data['count_adm'] - $data['count_selesai_adm'];

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/dashboard', $data);
    $this->load->view('template/footer-admin.php');
  }
  
  public function siswa_tampil()
  {
    $data['tampil'] = $this->M_admin->tampil_adm();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_detail($id_siswa)
  {
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_detail', $data);
    $this->load->view('template/footer-admin.php');
  }

  // akhir data siswa

 // awal Tampil Adm
  public function adm_semua()
  {
    $data['tampil'] = $this->M_pendaftar->ver_semua();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->adm_tjkt();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->adm_pplg();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->adm_mplb();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_akl()
  {
    $data['tampil'] = $this->M_pendaftar->adm_akl();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_tm()
  {
    $data['tampil'] = $this->M_pendaftar->adm_tm();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_to()
  {
    $data['tampil'] = $this->M_pendaftar->adm_to();

    $this->load->view('template/header-opadm.php');
    $this->load->view('op-adm/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

   // akhir akhir


  // awal seleksi adm
   public function adm_data_sesuai($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_adm/siswa_tampil/');
      } else {

        $data_edit = array(
          'status_seleksi_administrasi' => 'Data Sesuai',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Verifikasi Seleksi Administrasi Pilihan <strong>Data Sesuai</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_adm/siswa_tampil/');
      }
    }

    public function adm_belum($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_adm/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_seleksi_administrasi' => 'Belum Seleksi',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Verifikasi Seleksi Administrasi Pilihan <strong>Belum Seleksi</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_adm/siswa_tampil/');
      }
    }
  // akhir seleksi adm
  
}