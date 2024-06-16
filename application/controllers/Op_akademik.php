<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op_akademik extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->model('M_admin');
      $this->load->model('M_pendaftar');

      if ($this->session->userdata('op_akademik') != true) {
				$url = base_url('index.php/Login/fa');
				redirect($url);
			}
			
    }

  //Login User

  public function index()
  {
    $data['count'] = $this->M_admin->count_semua_siswa();
    $data['count_akademik'] = $this->M_admin->count_selesai_akademik();
    $data['count_belum_terverifkasi'] = $data['count'] - $data['count_akademik'];

    $this->load->view('template/header-akademik.php');
    $this->load->view('op-akademik/dashboard', $data);
    $this->load->view('template/footer-admin.php');
  }
  
  public function siswa_tampil()
  {
    $data['tampil'] = $this->M_admin->tampil_adm();

    $this->load->view('template/header-akademik.php');
    $this->load->view('op-akademik/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_detail($id_siswa)
  {
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-akademik.php');
    $this->load->view('op-akademik/siswa_detail', $data);
    $this->load->view('template/footer-admin.php');
  }

  // awal data siswa

  // awal verifikasi opsi
    public function aka_tes_selesai($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_akademik/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_tes_akademik' => 'Sudah Tes',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              Status Siswa <strong>Selesai Tes</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_akademik/siswa_tampil/');

      }

      
    }

    public function aka_tes_belum($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_akademik/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_tes_akademik' => 'Belum Tes',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Status Siswa <strong>Belum Tes</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_akademik/siswa_tampil/');
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