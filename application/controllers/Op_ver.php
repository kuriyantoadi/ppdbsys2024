<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op_ver extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->model('M_admin');
      $this->load->model('M_pendaftar');

      $ses_kompetensi = $this->session->userdata('ses_status_kompetensi');

      if ($this->session->userdata('opver_tjkt') != true && 
          $this->session->userdata('opver_pplg') != true &&
          $this->session->userdata('opver_akl') != true &&
          $this->session->userdata('opver_mplb') != true &&
          $this->session->userdata('opver_to') != true &&
          $this->session->userdata('opver_tm') != true 
        ) {
				$url = base_url('index.php/Login/fa');
				redirect($url);
			}
			
    }

  //Login User

  public function index()
  {
    $ses_kompetensi = $this->session->userdata('ses_status_kompetensi');
    $data['count'] = $this->M_admin->count_siswa($ses_kompetensi);
    $data['count_terverifikasi'] = $this->M_admin->count_terverifikasi($ses_kompetensi);
    $data['count_belum_terverifkasi'] = $data['count'] - $data['count_terverifikasi'];
    $data['ses_kompetensi'] = $ses_kompetensi;

    $this->load->view('template/header-opver.php');
    $this->load->view('op-verifikasi/dashboard', $data);
    $this->load->view('template/footer-admin.php');
  }
  
  public function siswa_tampil()
  {
    $ses_kompetensi = $this->session->userdata('ses_status_kompetensi');
    $data['tampil'] = $this->M_pendaftar->ver_kompetensi($ses_kompetensi);

    $this->load->view('template/header-opver.php');
    $this->load->view('op-verifikasi/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_detail($id_siswa)
  {
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-opver.php');
    $this->load->view('op-verifikasi/siswa_detail', $data);
    $this->load->view('template/footer-admin.php');
  }

  // awal data siswa

  // awal verifikasi opsi
    public function ver_proses($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_ver/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_verifikasi' => 'Proses',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              Verifikasi Pilihan <strong>Proses</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_ver/siswa_tampil/');

      }

      
    }

    public function ver_tidak_sesuai($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_ver/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_verifikasi' => 'Tidak Sesuai',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Verifikasi Pilihan <strong>Tidak Sesuai</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_ver/siswa_tampil/');
      }
    }

    public function ver_data_sesuai($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_ver/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_verifikasi' => 'Data Sesuai',
          'status_seleksi_administrasi' => 'Belum Seleksi',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Verifikasi Pilihan <strong>Data Sesuai</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_ver/siswa_tampil/');
      }
    }
   // akhir verifikasi opsi

   // awal note verifikasi

    public function note_verifikasi($id_siswa){
      $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);

    $this->load->view('template/header-opver.php');
      $this->load->view('op-verifikasi/note_verifikasi', $data);
      $this->load->view('template/footer-admin.php');
    }

    public function note_verifikasi_up(){
      
      $id_siswa = htmlspecialchars($this->input->post('id_siswa', true), ENT_QUOTES);
      $note_ver = htmlspecialchars($this->input->post('note_verifikasi', true), ENT_QUOTES);

      $data_edit = array(
        'note_verifikasi' => set_value('note_verifikasi')
      );

      $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

      $this->session->set_flashdata('msg', '
          <div class="alert alert-info alert-dismissible fade show" role="alert">
              Catatan Verfikasi Berhasil 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
      redirect('index.php/Op_ver/note_verifikasi/'.$id_siswa);
    }

   // akhir note verifikasi
  
}