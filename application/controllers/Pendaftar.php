<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pendaftar');
    $this->load->model('M_kompetensi');
    $this->load->model('M_login');


    // $this->load->model('M_');
  }

  //Login User
  public function index()
  {
    $data['tampil'] = $this->M_pendaftar->ver_semua();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');

    // $this->load->view('maintenance');

    
  }

  public function tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->ver_tjkt();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function pplg()
  {
    $data['tampil'] = $this->M_pendaftar->ver_pplg();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function mplb()
  {
    $data['tampil'] = $this->M_pendaftar->ver_mplb();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function akl()
  {
    $data['tampil'] = $this->M_pendaftar->ver_akl();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function tm()
  {
    $data['tampil'] = $this->M_pendaftar->ver_tm();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function to()
  {
    $data['tampil'] = $this->M_pendaftar->ver_to();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function upload_pengajuan_tutup()
  {
    // awal captcha
		$config = [
			"img_path" => "./captcha/",
			"img_url" => base_url('captcha'),
			"img_width" => 160,
			"img_height" => 30,
			"border" => 4,
			"expiration" => 30, //gambar otomatis terhapus
			'word_length'   => 4,
			'font_size'     => 30,
			'pool'          => '0123456789',


			'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)

		];

		$captcha = create_captcha($config);
		$this->session->set_userdata('captcha_word', $captcha['word']);
		$data["image"] = $captcha['image'];
		// akhir capcha

    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/upload_pengajuan', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  function upload_pengajuan_up(){

    // captcha awal

    $currentCaptcha = $this->session->userdata('captcha_word');
		$sendedCaptcha = $this->input->post('captcha');

		if($currentCaptcha != $sendedCaptcha) {
			 $url = site_url('index.php/pendaftar/upload_pengajuan');
      echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Maaf anda memasukan Kode Captcha dengan salah, silahkan dicoba kembali.
        </div>
        ');
      redirect($url);
		}

    // captcha akhir

	
    $this->form_validation->set_rules('tgl_upload','Tgl_upload', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('no_pendaftaran','No_pendaftaran', 'trim','required','min_length[3]'); 
    $this->form_validation->set_rules('id_kompetensi_1','Id_kompetensi_1', 'trim','required','min_length[1]');
    $this->form_validation->set_rules('id_kompetensi_2','Id_kompetensi_2', 'trim','required','min_length[1]');
    $this->form_validation->set_rules('nisn_siswa','Nisn_siswa', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('asal_sekolah','Asal_sekolah', 'trim','required','min_length[3]');
   
    $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tempat_lahir','Tempat_lahir', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tgl_lahir','Tgl_lahir', 'trim|required');
    
    //mengubah format tanggal lahir
    // $tgl_lahir_old = set_value('tgl_lahir');
    // $tgl_lahir = date("d-m-Y", strtotime($tgl_lahir_old));

    $this->form_validation->set_rules('no_wa_siswa','No_wa_siswa', 'trim|required');
    $this->form_validation->set_rules('alamat','Alamat', 'trim|required|min_length[1]');
    $this->form_validation->set_rules('nama_org_tua','Nama_org_tua', 'trim|required|min_length[1]');
    $this->form_validation->set_rules('no_wa_org_tua','No_wa_org_tua', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      // echo 'upload error';    
      // echo validation_errors();
      // exit ();

      $url = site_url('index.php/pendaftar/upload_pengajuan');
      echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Kolom ada yang kosong, tolong upload ulang dan isi semua kolom.
        </div>
        ');
      redirect($url);

    } else {

    // awal cek dan upload file skl
      $config['upload_path'] = 'assets/upload_file';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '1200'; //MB
      $config['encrypt_name']     = TRUE;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      $nisn_siswa = set_value('nisn_siswa');
      $no_pendaftaran = set_value('no_pendaftaran');


      $cek_nisn = $this->M_pendaftar->cek_nisn($nisn_siswa);
        // cek jika nisn sudah terdaftar
        if(!empty($cek_nisn))
        {
          $url = site_url('index.php/Pendaftar/upload_pengajuan');
          echo $this->session->set_flashdata('msg', '

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                NISN sudah terdaftar di sistem, tolong cek kembali atau hubungi operator PPDB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
          redirect($url);
        }

        // cek jika nisn sudah terdaftar
        $cek_no_pendaftaran = $this->M_pendaftar->cek_no_pendaftaran($no_pendaftaran);
        if(!empty($cek_no_pendaftaran))
        {
          $url = site_url('index.php/Pendaftar/upload_pengajuan');
          echo $this->session->set_flashdata('msg', '

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nomor Pendaftaran sudah terdaftar di sistem, tolong cek kembali atau hubungi operator PPDB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
          redirect($url);
        }

      // exit();


      if (!$this->upload->do_upload('pdf_pengajuan_pendaftaran')) {

      // untuk testing error
      //  $error = array('error' => $this->upload->display_errors());
      // echo var_dump($error);
      // exit();

      $url = site_url('index.php/Pendaftar/upload_pengajuan');
      echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Upload Pengajuan Pendaftaran Gagal, ukuran file Upload lebih dari 1 MB atau file tidak PDF.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
      redirect($url);

      } else {
        $upload_pengajuan_pendaftaran = $this->upload->data();
      }
    // akhir cek dan upload file skl

      // eksekusi query INSERT
      date_default_timezone_set('Asia/Jakarta');
      // echo date("Y-m-d H:i:s");

      $data_tambah = [

        'tgl_upload'   => format_indo(date('Y-m-d H:i:s')),
        // 'tgl_upload'   => date('Y-m-d H:i:s'),

        'no_pendaftaran'   => set_value('no_pendaftaran'),
        'id_kompetensi_1' => set_value('id_kompetensi_1'),
        'id_kompetensi_2' => set_value('id_kompetensi_2'),
        'nisn_siswa'   => set_value('nisn_siswa'),
        'password'   => md5(set_value('nisn_siswa')),
        'asal_sekolah'   => strtoupper(set_value('asal_sekolah')),
        'nama_siswa'   => strtoupper(set_value('nama_siswa')),
        'tempat_lahir'   => strtoupper(set_value('tempat_lahir')),
        'tgl_lahir'   => set_value('tgl_lahir'),
        'no_wa_siswa'   => set_value('no_wa_siswa'),
        'alamat'   => strtoupper(set_value('alamat')),
        'nama_org_tua'   => strtoupper(set_value('nama_org_tua')),
        'no_wa_org_tua'   => set_value('no_wa_org_tua'),

        'status_siswa'   => 'siswa',
        'pdf_pengajuan_pendaftaran' => $upload_pengajuan_pendaftaran['file_name'],
        
      ];

      $this->M_pendaftar->upload_pengajuan_up($data_tambah);

      $url = site_url('index.php/Pendaftar');
      echo $this->session->set_flashdata('msg', '

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Upload Pengajuan Pendaftaran Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
      redirect($url);

    }
    
  }

  // awal test akademik 

  public function aka_semua()
  {
    $data['tampil'] = $this->M_pendaftar->ver_semua();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/akademik', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function aka_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->ver_tjkt();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/akademik', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function aka_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->ver_pplg();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/akademik', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function aka_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->ver_mplb();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/akademik', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function aka_akl()
  {
    $data['tampil'] = $this->M_pendaftar->ver_akl();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/akademik', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function aka_tm()
  {
    $data['tampil'] = $this->M_pendaftar->ver_tm();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/akademik', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function aka_to()
  {
    $data['tampil'] = $this->M_pendaftar->ver_to();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/akademik', $data);
    $this->load->view('template/footer-pendaftar.php');
  }
  
  // login pendaftar awal

  public function login(){
    $this->load->view('pendaftar/login');
  }


  public function siswa_login()
  {
    $nisn_siswa = htmlspecialchars($this->input->post('nisn_siswa', true), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

    $cek_login = $this->M_login->siswa_login($nisn_siswa, $password);

    if ($cek_login->num_rows() > 0) {
      $data = $cek_login->row_array();

      if ($data['status']=='pfqqe2266c') {
        $this->session->set_userdata('pfqqe2266c', true);
        $this->session->set_userdata('id_siswa_diterima', $data['id_siswa_diterima']);
        $this->session->set_userdata('ses_nisn', $data['nisn_siswa']);
        redirect('index.php/Daftar_ulang/index');

      }else{
        echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Login Gagal, cek ulang nisn dan password anda.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('index.php/Login/fa');
      }
      
      echo "test";

    }

    $this->session->set_flashdata('msg', '
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Login Gagal, cek ulang nisn dan password anda.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
    redirect('index.php/Pendaftaran/login');
  }


  public function siswa_logout()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('index.php/Pendaftar/login');
  }
  // login pendaftar akhir

				
	
  
}
