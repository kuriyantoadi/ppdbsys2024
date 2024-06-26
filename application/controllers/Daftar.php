<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_daftar');
    // $this->load->model('M_');
  }

  //Login User
  public function index()
  {
    $data['tampil'] = $this->M_daftar->asal_sekolah();
    $data['tampil_kompetensi_1'] = $this->M_daftar->kompetensi_keahlian_1();
    $data['tampil_kompetensi_2'] = $this->M_daftar->kompetensi_keahlian_2();

    $this->load->view('template/header-daftar.php');
    $this->load->view('siswa/siswa-daftar', $data);
    $this->load->view('template/footer-daftar.php');
  }

  public function daftar_up()
  {
    $this->form_validation->set_rules('id_kompetensi_1','id_kompetensi_1', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('id_kompetensi_2','id_kompetensi_2', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('nisn_siswa','Nisn_siswa', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('asal_sekolah','Asal_sekolah', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('no_wa_siswa','No_wa_siswa', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      echo 'upload error';    
      echo validation_errors();
      exit ();

      // $url = site_url('Daftar/index');
      // echo $this->session->set_flashdata('msg', '

      //   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      //    Proses Pendaftaran gagal, silahkan dicoba kembali.
      //   </div>
      //   ');
      // redirect($url);

    } else {
  

      // eksekusi query INSERT
      $data_tambah = array(

        'tgl_upload'   => date('Y-m-d'),
        'id_kompetensi_1' => set_value('id_kompetensi_1'),
        'id_kompetensi_2' => set_value('id_kompetensi_2'),
        'nisn_siswa'   => set_value('nisn_siswa'),
        'asal_sekolah'   => set_value('asal_sekolah'),
        'nama_siswa'   => set_value('nama_siswa'),
        'no_wa_siswa'   => set_value('no_wa_siswa'),
        'status_siswa'   => 'siswa',      
        'status_verifikasi'   => 'Proses',
      );

      $this->M_daftar->siswa_daftar_up($data_tambah);

      $url = site_url('Daftar/index');
      echo $this->session->set_flashdata('msg', '

       <div class="alert alert-info alert-dismissible fade show" role="alert">
            Tambah Data User Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        ');
      redirect($url);

    }
    
  }


  public function sekolah_tambah_up()
  {
    $this->form_validation->set_rules('asal_sekolah','asal_sekolah', 'trim','required','min_length[3]');   
   

    if ($this->form_validation->run() == FALSE) {
      echo 'upload error';    
      echo validation_errors();
      exit ();

      // $url = site_url('Daftar/index');
      // echo $this->session->set_flashdata('msg', '

      //   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      //    Proses Pendaftaran gagal, silahkan dicoba kembali.
      //   </div>
      //   ');
      // redirect($url);

    } else {
  

      // eksekusi query INSERT
      $data_tambah = array(
        'asal_sekolah'   => set_value('asal_sekolah'),     
      );

      $this->M_daftar->sekolah_tambah_up($data_tambah);

      $url = site_url('Daftar/index');
      echo $this->session->set_flashdata('msg', '

        <div class="alert alert-info alert-dismissible fade show" role="alert">
          test
        </div>
        ');
      redirect($url);

    }
    
  }
  // awal contoh
  


 
}
