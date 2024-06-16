<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_admin');
      $this->load->model('M_pendaftar');
      $this->load->model('M_daftar_ulang');

      // session login
			if ($this->session->userdata('xeimaiPh9ahs4ie') != true) {
				$url = base_url('index.php/Login/fa');
				redirect($url);
			}
	}

  //Login User
  public function index()
  {
    // $data['count_akl'] = $this->M_admin->count_akl();
    // $data['count_mplb'] = $this->M_admin->count_mplb();
    // $data['count_tjkt'] = $this->M_admin->count_tjkt();
    // $data['count_pplg'] = $this->M_admin->count_pplg();
    // $data['count_to'] = $this->M_admin->count_to();
    // $data['count_tm'] = $this->M_admin->count_tm();

    $this->load->view('template/header-admin');
    $this->load->view('admin/dashboard');
    $this->load->view('template/footer-admin');
  }

  // awal user

  public function user_tampil()
  {
    $data['tampil'] = $this->M_admin->user_tampil();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/user_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function user_tambah()
  {
    $data['user_kompetensi'] = $this->M_admin->user_kompetensi();
    $data['status'] = $this->M_admin->status();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/user_tambah', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function user_tambah_up()
  {
    $this->form_validation->set_rules('username','Username', 'trim','required','min_length[1]');
    $this->form_validation->set_rules('password','Password', 'trim','required','min_length[1]');
    $this->form_validation->set_rules('status','Status', 'trim','required','min_length[1]');
    $this->form_validation->set_rules('status_kompetensi','Status_kompetensi', 'trim','required','min_length[1]');

    if ($this->form_validation->run() == FALSE) {
      
      echo 'validasi error';  
      $test = $this->form_validation->error_array();
      var_dump($test);

    } else {

      $data_tambah = array(

        'username' => set_value('username'),
        'password' => md5(set_value('password')),
        'status' => set_value('status'),
        'status_kompetensi' => set_value('status_kompetensi'),

      );

      $this->M_admin->user_tambah($data_tambah);

      $this->session->set_flashdata('msg', '
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            Tambah Data User Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>');
          // var_dump($id_siswa);
      redirect('index.php/Admin/user_tampil/');

    }

  }

  public function user_hapus($id_user){
    $id_user = array('id_user' => $id_user);

    $success = $this->M_admin->user_hapus($id_user);
    $this->session->set_flashdata('msg', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Hapus Data User Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
    redirect('index.php/Admin/user_tampil');
  }
  // akhir user

  // awal data siswa

  public function siswa_tampil()
  {
    $data['tampil'] = $this->M_pendaftar->siswa_tampil();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->ver_tjkt();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->ver_pplg();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->ver_mplb();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_akl()
  {
    $data['tampil'] = $this->M_pendaftar->ver_akl();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_tm()
  {
    $data['tampil'] = $this->M_pendaftar->ver_tm();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_to()
  {
    $data['tampil'] = $this->M_pendaftar->ver_to();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_detail($id_siswa)
  {
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_detail', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_hapus($id_siswa){
    $id_siswa = array('id_siswa' => $id_siswa);

    $success = $this->M_admin->siswa_hapus($id_siswa);
    $this->session->set_flashdata('msg', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Hapus Data Siswa Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
    redirect('index.php/Admin/siswa_tampil');
  }

  public function siswa_edit($id_siswa)
  {
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_edit', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_edit_up()
  {
    $id_siswa = $this->input->post('id_siswa');
    $this->form_validation->set_rules('id_kompetensi_1','Id_kompetensi_1', 'trim','required','min_length[1]');
    $this->form_validation->set_rules('id_kompetensi_2','Id_kompetensi_2', 'trim','required','min_length[1]');

    $this->form_validation->set_rules('nisn_siswa','Nisn_siswa', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('asal_sekolah','Asal_sekolah', 'trim','required','min_length[3]');
   
    $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tempat_lahir','Tempat_lahir', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tgl_lahir','Tgl_lahir', 'trim|required');

    $this->form_validation->set_rules('no_wa_siswa','No_wa_siswa', 'trim|required');
    $this->form_validation->set_rules('alamat','Alamat', 'trim|required|min_length[1]');
    $this->form_validation->set_rules('nama_org_tua','Nama_org_tua', 'trim|required|min_length[1]');
   
    if ($this->form_validation->run() == FALSE) {
      
      echo 'validasi error';  
      $test = $this->form_validation->error_array();
      var_dump($test);

    } else {

      $data_edit = array(

        'id_kompetensi_1' => set_value('id_kompetensi_1'),
        'id_kompetensi_2' => set_value('id_kompetensi_2'),
        'nisn_siswa'   => set_value('nisn_siswa'),
        'asal_sekolah'   => set_value('asal_sekolah'),
        'nama_siswa'   => set_value('nama_siswa'),
        'tempat_lahir'   => set_value('tempat_lahir'),
        'tgl_lahir'   => set_value('tgl_lahir'),
        'no_wa_siswa'   => set_value('no_wa_siswa'),
        'alamat'   => set_value('alamat'),
        'nama_org_tua'   => set_value('nama_org_tua'),
        'no_wa_org_tua' => set_value('no_wa_org_tua')

      );

      $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

      $this->session->set_flashdata('msg', '
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            Edit Data Siswa Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>');
          // var_dump($id_siswa);
      redirect('index.php/Admin/siswa_detail/'.$id_siswa);

    }

    
  }
  // akhir data siswa


  // awal verifikasi
  
  public function ver_semua()
  {
    $data['tampil'] = $this->M_pendaftar->ver_semua();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function note_verifikasi($id_siswa){
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/note_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function note_verifikasi_up(){
    
    $id_siswa = htmlspecialchars($this->input->post('id_siswa', true), ENT_QUOTES);
    $note_ver = htmlspecialchars($this->input->post('note_verifikasi', true), ENT_QUOTES);

    $data_edit = array(
      'note_verifikasi' => set_value('note_verifikasi'),
    );

    $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

    $this->session->set_flashdata('msg', '
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            Catatan Verfikasi Berhasil 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        // var_dump($id_siswa);
    redirect('index.php/Admin/note_verifikasi/'.$id_siswa);
  }

  public function ver_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->ver_tjkt();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function ver_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->ver_pplg();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function ver_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->ver_mplb();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function ver_akl()
  {
    $data['tampil'] = $this->M_pendaftar->ver_akl();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function ver_tm()
  {
    $data['tampil'] = $this->M_pendaftar->ver_tm();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function ver_to()
  {
    $data['tampil'] = $this->M_pendaftar->ver_to();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

   // awal akhir
 

   // awal verifikasi opsi
    public function ver_proses($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Admin/ver_semua/');

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
        redirect('index.php/Admin/ver_semua/');

      }

      
    }

    public function ver_tidak_sesuai($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Admin/ver_semua/');

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
        redirect('index.php/Admin/ver_semua/');
      }
    }

    public function ver_data_sesuai($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Admin/ver_semua/');

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
        redirect('index.php/Admin/ver_semua/');

      }

      
    }
   // akhir verifikasi opsi
  

  // awal Tampil Adm
  public function adm_semua()
  {
    $data['tampil'] = $this->M_pendaftar->ver_semua();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_administrasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->adm_tjkt();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_administrasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->adm_pplg();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_administrasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->adm_mplb();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_administrasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_akl()
  {
    $data['tampil'] = $this->M_pendaftar->adm_akl();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_administrasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_tm()
  {
    $data['tampil'] = $this->M_pendaftar->adm_tm();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function adm_to()
  {
    $data['tampil'] = $this->M_pendaftar->adm_to();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_administrasi', $data);
    $this->load->view('template/footer-admin.php');
  }

   // akhir akhir

  // awal seleksi adm
   public function adm_data_sesuai($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Admin/adm_semua/');

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
        redirect('index.php/Admin/adm_semua/');
      }
    }

    public function adm_belum($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Admin/adm_semua/');

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
        redirect('index.php/Admin/adm_semua/');
      }
    }
  // akhir seleksi adm

  // awal test wawancara
  public function wan_semua()
  {
    $data['tampil'] = $this->M_pendaftar->ver_semua();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_wawancara', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function wan_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->adm_tjkt();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_wawancara', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function wan_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->adm_pplg();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_wawancara', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function wan_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->adm_mplb();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_wawancara', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function wan_akl()
  {
    $data['tampil'] = $this->M_pendaftar->adm_akl();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_wawancara', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function wan_tm()
  {
    $data['tampil'] = $this->M_pendaftar->adm_tm();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_wawancara', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function wan_to()
  {
    $data['tampil'] = $this->M_pendaftar->adm_to();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_wawancara', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function wan_selesai($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Admin/wan_semua/');

      } else {

        $data_edit = array(
          'status_tes_wawancara' => 'Selesai',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Verifikasi Seleksi Administrasi Pilihan <strong>Selesai Wawancara</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Admin/wan_semua/');
      }
    }

    public function wan_belum($id_siswa)
    {
      $id_siswa = htmlspecialchars($id_siswa, ENT_QUOTES);

      if(empty($id_siswa)){
        redirect('index.php/Admin/wan_semua/');

      } else {

        $data_edit = array(
          'status_tes_wawancara' => 'Belum',
        );

        $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Verifikasi Seleksi Administrasi Pilihan <strong>Belum Wawancara</strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Admin/wan_semua/');
      }
    }
  // akhir tes wawancara

  
  // awal daftar ulang
  public function du_semua()
  {
    $data['tampil'] = $this->M_pendaftar->du_semua();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_daftar_ulang', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function du_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->du_tjkt();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_daftar_ulang', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function du_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->du_pplg();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_daftar_ulang', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function du_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->du_mplb();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_daftar_ulang', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function du_akl()
  {
    $data['tampil'] = $this->M_pendaftar->du_akl();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_daftar_ulang', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function du_tm()
  {
    $data['tampil'] = $this->M_pendaftar->du_tm();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_daftar_ulang', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function du_to()
  {
    $data['tampil'] = $this->M_pendaftar->du_to();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_daftar_ulang', $data);
    $this->load->view('template/footer-admin.php');
  }


  public function du_sudah($id_siswa_diterima)
    {
      $id_siswa_diterima = htmlspecialchars($id_siswa_diterima, ENT_QUOTES);

      if(empty($id_siswa_diterima)){
        redirect('index.php/Admin/du_semua/');

      } else {

        $data_edit = array(
          'status_daftar_ulang' => 'Selesai',
        );

        $this->M_daftar_ulang->form_up($data_edit, $id_siswa_diterima);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Verifikasi Daftar Ulang  <strong>Selesai </strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Admin/du_semua/');
      }
    }

    public function du_belum($id_siswa_diterima)
    {
      $id_siswa_diterima = htmlspecialchars($id_siswa_diterima, ENT_QUOTES);

      if(empty($id_siswa_diterima)){
        redirect('index.php/Admin/du_semua/');

      } else {

        $data_edit = array(
          'status_daftar_ulang' => 'Belum',
        );

        $this->M_daftar_ulang->form_up($data_edit, $id_siswa_diterima);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Verifikasi Daftar ULang Pilihan <strong>Belum </strong> Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Admin/du_semua/');
      }
    }

     public function du_reset($id_siswa_diterima)
    {
      $id_siswa_diterima = htmlspecialchars($id_siswa_diterima, ENT_QUOTES);

      if(empty($id_siswa_diterima)){
        redirect('index.php/Admin/du_semua/');

      } else {

        $data_edit = array(
          'kec' => '',
          'rt' => '',
          'rw' => '',
          'kampung_jln' => '',
          'kab_kota' => '',
          'no_hp_siswa' => '',
          'no_hp_orgtua' => '',
         
        );

        $this->M_daftar_ulang->form_up($data_edit, $id_siswa_diterima);

        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Reser Daftar ULang Berhasil 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            // var_dump($id_siswa);
        redirect('index.php/Admin/du_semua/');
      }
    }

    public function du_siswa_detail($id_siswa_diterima)
    {
      $data['tampil'] = $this->M_daftar_ulang->cetak_pakta_integritas($id_siswa_diterima);

      $this->load->view('template/header-admin.php');
      $this->load->view('admin/du_siswa_detail', $data);
      $this->load->view('template/footer-admin.php');
    }
    // akhir daftar ulang
 
}