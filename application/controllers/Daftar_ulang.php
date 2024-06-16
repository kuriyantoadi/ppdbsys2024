<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_ulang extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->model('M_admin');
      $this->load->model('M_pendaftar');
      $this->load->model('M_daftar_ulang');

      if ($this->session->userdata('pfqqe2266c') != true) {
				$url = base_url('index.php/Pendaftar/login');
				redirect($url);
			}
			
    }

  //Login User
  public function index()
  {
    $id_siswa_diterima = $this->session->userdata('id_siswa_diterima');
    $data['tampil'] = $this->M_daftar_ulang->cetak_pakta_integritas($id_siswa_diterima);

    $this->load->view('template/header-daftar-ulang.php');
    $this->load->view('pendaftar/dashboard', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function form()
  {
    $id_siswa_diterima = $this->session->userdata('id_siswa_diterima');
    $data['tampil'] = $this->M_daftar_ulang->cetak_pakta_integritas($id_siswa_diterima);

    $this->load->view('template/header-daftar-ulang.php');
    $this->load->view('pendaftar/form', $data);
    $this->load->view('template/footer-admin.php');

  }

  public function form_up()
  {
    $id_siswa_diterima = $this->input->post('id_siswa_diterima');
    $this->form_validation->set_rules('nisn_siswa','Nisn_siswa', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('asal_sekolah','Asal_sekolah', 'trim','required','min_length[3]');
   
    $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('kompetensi_kehalian','Kompetensi_kehalian', 'trim','required','min_length[1]');

    $this->form_validation->set_rules('kampung_jln','Kampung_jln', 'trim|required');
    $this->form_validation->set_rules('rt','Rt', 'trim|required');
    $this->form_validation->set_rules('rw','Rw', 'trim|required');
    $this->form_validation->set_rules('kelurahan','Kelurahan', 'trim|required');
    $this->form_validation->set_rules('kec','Kec', 'trim|required');
    $this->form_validation->set_rules('kab_kota','Kab_kota', 'trim|required');

    $this->form_validation->set_rules('no_hp_siswa','No_hp_siswa', 'trim|required');
    $this->form_validation->set_rules('no_hp_orgtua','No_hp_orgtua', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      
      echo 'validasi error';  
      $test = $this->form_validation->error_array();
      var_dump($test);

    } else {

      $data_edit = array(

        'nisn_siswa'   => set_value('nisn_siswa'),
        'asal_sekolah'   => set_value('asal_sekolah'),
        'nama_siswa'   => set_value('nama_siswa'),
        'kompetensi_keahlian' => set_value('kompetensi_keahlian'),

        'kampung_jln'   => set_value('kampung_jln'),
        'rt'   => set_value('rt'),
        'rw'   => set_value('rw'),
        'kelurahan'   => set_value('kelurahan'),
        'kec'   => set_value('kec'),
        'kab_kota'   => set_value('kab_kota'),

        'no_hp_siswa'   => set_value('no_hp_siswa'),
        'no_hp_orgtua' => set_value('no_hp_orgtua')

      );

      $this->M_daftar_ulang->form_up($data_edit, $id_siswa_diterima);

      $this->session->set_flashdata('msg', '
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            Pengisian Form Data Siswa Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>');
          // var_dump($id_siswa);
      redirect('index.php/daftar_ulang/index');
    }
    
  }

  public function cetak_pakta_integritas()
  {
    $id_siswa_diterima = $this->session->userdata('id_siswa_diterima');
    $data['tampil'] = $this->M_daftar_ulang->cetak_pakta_integritas($id_siswa_diterima);

    $this->load->view('pendaftar/pakta-integritas', $data);
  }

  public function cetak_bukti_diterima()
  {
    $id_siswa_diterima = $this->session->userdata('id_siswa_diterima');
    $data['tampil'] = $this->M_daftar_ulang->cetak_pakta_integritas($id_siswa_diterima);

    $this->load->view('pendaftar/bukti-diterima', $data);
  }
  

}