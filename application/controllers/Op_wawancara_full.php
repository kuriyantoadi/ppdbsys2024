<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op_wawancara_full extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->model('M_admin');
      $this->load->model('M_pendaftar');


      if ($this->session->userdata('opwan_tjkt_full') != true && 
          $this->session->userdata('opwan_pplg_full') != true &&
          $this->session->userdata('opwan_akl_full') != true &&
          $this->session->userdata('opwan_mplb_full') != true &&
          $this->session->userdata('opwan_to_full') != true &&
          $this->session->userdata('opwan_tm_full') != true 
        ) {
				$url = base_url('index.php/Login/fa');
				redirect($url);
			}
			
    }

  //Login User

  public function index()
  {
    $ses_kompetensi = $this->session->userdata('ses_status_kompetensi');
    $data['ses_kompetensi'] = $ses_kompetensi;
    $data['count'] = $this->M_admin->count_siswa($ses_kompetensi);
    $data['count_wawancara'] = $this->M_admin->count_selesai_wawancara($ses_kompetensi);
    $data['count_belum_wawancara'] = $data['count'] - $data['count_wawancara'];

    $this->load->view('template/header-wawancara-full.php');
    $this->load->view('op-wawancara-full/dashboard', $data);
    $this->load->view('template/footer-admin.php');
  }
  
  public function siswa_tampil()
  {
    $ses_kompetensi = $this->session->userdata('ses_status_kompetensi');
    $data['tampil'] = $this->M_pendaftar->ver_kompetensi($ses_kompetensi);

    $this->load->view('template/header-wawancara-full.php');
    $this->load->view('op-wawancara-full/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_detail($id_siswa)
  {
    $ses_user = $this->session->userdata('ses_user');
    $data['ses_user'] = $ses_user;
    $ses_kompetensi = $this->session->userdata('ses_status_kompetensi');
    $data['ses_kompetensi'] = $ses_kompetensi;
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-wawancara-full.php');
    $this->load->view('op-wawancara-full/siswa_detail', $data);
    $this->load->view('template/footer-admin.php');
  }

    public function wawancara_note()
    {
        $id_siswa = htmlspecialchars($this->input->post('id_siswa', true), ENT_QUOTES);
        $user_tes_wawancara = htmlspecialchars($this->input->post('user_tes_wawancara', true), ENT_QUOTES);
        $note_tes_wawancara = htmlspecialchars($this->input->post('note_tes_wawancara', true), ENT_QUOTES);
        $rekomendasi_tes_wawancara = htmlspecialchars($this->input->post('rekomendasi_tes_wawancara', true), ENT_QUOTES);

        if(empty($id_siswa)){
        redirect('index.php/Op_wawancara_full/siswa_tampil/');

        } else {

        $data_edit = array(
            'user_tes_wawancara' => $user_tes_wawancara,
            'note_tes_wawancara' => $note_tes_wawancara,
            'rekomendasi_tes_wawancara' => $rekomendasi_tes_wawancara,
            'status_tes_wawancara' => 'Sudah Tes',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Update Siswa Sudah Wawancara <strong>Berhasil</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_wawancara_full/siswa_tampil/');
        }
    }

    public function wawancara_belum($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_wawancara_full/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_tes_wawancara' => 'Belum Tes',
          'user_tes_wawancara' => '',
          'note_tes_wawancara' => '',
          'rekomendasi_tes_wawancara' => '',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Status Siswa <strong>Belum Tes Wawancara</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_wawancara_full/siswa_tampil/');
      }
    }

    public function wawancara_sudah($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Op_wawancara_full/siswa_tampil/');
      } else {

        $data_edit = array(
          'status_tes_wawancara' => 'Sudah Tes',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Status Siswa <strong>Belum Tes Wawancara</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Op_wawancara_full/siswa_tampil/');
      }
    }

   // akhir note verifikasi

    public function akademik_sudah($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('Op_wawancara_full/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_tes_akademik' => 'Sudah Tes',          
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Status Siswa <strong>Sudah Tes Akademik</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('Op_wawancara_full/siswa_tampil/');
      }
    }

    public function akademik_belum($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('Op_wawancara_full/siswa_tampil/');

      } else {

        $data_edit = array(
          'status_tes_akademik' => 'Belum Tes',          
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Status Siswa <strong>Belum Tes Akademik</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('Op_wawancara_full/siswa_tampil/');
      }
    }

  public function siswa_detail_tes_wawancara($id_siswa)
  {
    $ses_user = $this->session->userdata('ses_user');
    $data['ses_user'] = $ses_user;
    $ses_kompetensi = $this->session->userdata('ses_status_kompetensi');
    $data['ses_kompetensi'] = $ses_kompetensi;
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-wawancara-full.php');
    $this->load->view('op-wawancara-full/siswa_detail_tes_wawancara', $data);
    $this->load->view('template/footer-admin.php');
  }


  public function siswa_detail_tes_khusus($id_siswa)
  {
    $ses_user = $this->session->userdata('ses_user');
    $data['ses_user'] = $ses_user;
    $ses_kompetensi = $this->session->userdata('ses_status_kompetensi');
    $data['ses_kompetensi'] = $ses_kompetensi;
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-wawancara-full.php');
    $this->load->view('op-wawancara-full/siswa_detail_tes_khusus', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function tes_khusus_note()
  {
      $id_siswa = htmlspecialchars($this->input->post('id_siswa', true), ENT_QUOTES);
      $user_tes_khusus = htmlspecialchars($this->input->post('user_tes_khusus', true), ENT_QUOTES);
      $note_tes_khusus = htmlspecialchars($this->input->post('note_tes_khusus', true), ENT_QUOTES);
      $rekomendasi_tes_khusus = htmlspecialchars($this->input->post('rekomendasi_tes_khusus', true), ENT_QUOTES);

      if(empty($id_siswa)){
      redirect('Op_wawancara_full/siswa_tampil/');

      } else {

      $data_edit = array(
          'user_tes_khusus' => $user_tes_khusus,
          'note_tes_khusus' => $note_tes_khusus,
          'rekomendasi_tes_khusus' => $rekomendasi_tes_khusus,
          'status_tes_khusus' => 'Sudah Tes',
      );

      $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

      $this->session->set_flashdata('msg', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              Update Siswa Sudah Khusus <strong>Berhasil</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
          // var_dump($id_siswa);
      redirect('Op_wawancara_full/siswa_tampil/');
      }
  }

  public function tes_khusus_belum($id_siswa)
  {
    $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

    if(empty($id_siswa)){
      redirect('Op_wawancara_full/siswa_tampil/');

    } else {

      $data_edit = array(
        'status_tes_khusus' => 'Belum Tes',
        'rekomendasi_tes_khusus' => '',           
      );

      $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

      $this->session->set_flashdata('msg', '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Status Siswa <strong>Belum Tes Khusus</strong> Berhasil 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
          // var_dump($id_siswa);
      redirect('Op_wawancara_full/siswa_tampil/');
    }
  }


}