<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');

		// session login
		if ($this->session->userdata('aktif') != true) {
			$url = base_url('C_login/f');
			redirect($url);
		}
	}

	public function index()
	{
		$this->load->view('C_admin/f');
	}


	// tekno awal
	public function siswa_tekno()
	{
		// $ses_id_umkm = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_admin->siswa_tekno();


		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_tekno', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_hapus_tekno($id_siswa)
	{
		$id_siswa = array('id_siswa' => $id_siswa);

		$success = $this->M_admin->siswa_hapus_tekno($id_siswa);
		$this->session->set_flashdata('msg', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hapus Data Berhasil</strong>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
		redirect('C_admin/siswa_tekno');
	}

	public function siswa_detail_tekno($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_detail_tekno($id_siswa);

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_detail_tekno', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_tekno_tambah()
	{
		$data['tampil_komptensi'] = $this->M_admin->kompetensi_keahlian();
		$data['tampil_kelas'] = $this->M_admin->kelas();

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_tekno_tambah', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_tekno_tambah_up()
	{
		$nis_siswa = $this->input->post('nis_siswa');
		$nisn_siswa = $this->input->post('nisn_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tempat_tgl_lahir = $this->input->post('tempat_tgl_lahir');
		$nama_org_tua = $this->input->post('nama_org_tua');
		$program_keahlian = $this->input->post('program_keahlian');
		$nama_kelas = $this->input->post('nama_kelas');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$status_kelulusan = $this->input->post('status_kelulusan');
		$pai = $this->input->post('pai');
		$pkn = $this->input->post('pkn');
		$b_ind = $this->input->post('b_ind');
		$mtk = $this->input->post('mtk');
		$b_ing = $this->input->post('b_ing');
		$senbud = $this->input->post('senbud');
		$sejindo = $this->input->post('sejindo');
		$pjok = $this->input->post('pjok');
		$mulok = $this->input->post('mulok');
		$simdig = $this->input->post('simdig');
		$kimia = $this->input->post('kimia');
		$fisika = $this->input->post('fisika');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$pkwu = $this->input->post('pkwu');
		$rata_rata = $this->input->post('rata_rata');

		$data_tambah = array(
			'nama_siswa' => $nama_siswa,
			'nis_siswa' => $nis_siswa,
			'nisn_siswa' => $nisn_siswa,
			'tempat_tgl_lahir' => $tempat_tgl_lahir,
			'nama_org_tua' => $nama_org_tua,
			'program_keahlian' => $program_keahlian,
			'nama_kelas' => $nama_kelas,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'status_kelulusan' => $status_kelulusan,
			'pai' => $pai,
			'pkn' => $pkn,
			'b_ind' => $b_ind,
			'mtk' => $mtk,
			'b_ing' => $b_ing,
			'senbud' => $senbud,
			'sejindo' => $sejindo,
			'pjok' => $pjok,
			'mulok' => $mulok,
			'simdig' => $simdig,
			'kimia' => $kimia,
			'fisika' => $fisika,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'pkwu' => $pkwu,
			'rata_rata' => $rata_rata
		);

		$this->M_admin->siswa_tekno_tambah_up($data_tambah);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Tambah Data Berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect('C_admin/siswa_tekno/');
	}

	public function siswa_edit_tekno($id_siswa)
	{
		// $kode_masyarakat = array('id_masyarakat' => $id_masyarakat);
		$data['tampil'] = $this->M_admin->siswa_edit_tekno($id_siswa);
		$data['tampil_komptensi'] = $this->M_admin->kompetensi_keahlian();
		$data['tampil_kelas'] = $this->M_admin->kelas();

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_edit_tekno', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_print_tekno($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_print_tekno($id_siswa);
		$this->load->view('admin/print_tekno', $data);
	}

	public function siswa_edit_up_tekno()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nis_siswa = $this->input->post('nis_siswa');
		$nisn_siswa = $this->input->post('nisn_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tempat_tgl_lahir = $this->input->post('tempat_tgl_lahir');
		$nama_org_tua = $this->input->post('nama_org_tua');
		$program_keahlian = $this->input->post('program_keahlian');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$status_kelulusan = $this->input->post('status_kelulusan');
		$pai = $this->input->post('pai');
		$pkn = $this->input->post('pkn');
		$b_ind = $this->input->post('b_ind');
		$mtk = $this->input->post('mtk');
		$b_ing = $this->input->post('b_ing');
		$senbud = $this->input->post('senbud');
		$sejindo = $this->input->post('sejindo');
		$pjok = $this->input->post('pjok');
		$mulok = $this->input->post('mulok');
		$simdig = $this->input->post('simdig');
		$kimia = $this->input->post('kimia');
		$fisika = $this->input->post('fisika');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$pkwu = $this->input->post('pkwu');
		$rata_rata = $this->input->post('rata_rata');

		$kode_siswa = array('id_siswa' => $id_siswa);

		$data_edit = array(
			'nama_siswa' => $nama_siswa,
			'nis_siswa' => $nis_siswa,
			'nisn_siswa' => $nisn_siswa,
			'tempat_tgl_lahir' => $tempat_tgl_lahir,
			'nama_org_tua' => $nama_org_tua,
			'program_keahlian' => $program_keahlian,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'status_kelulusan' => $status_kelulusan,
			'pai' => $pai,
			'pkn' => $pkn,
			'b_ind' => $b_ind,
			'mtk' => $mtk,
			'b_ing' => $b_ing,
			'senbud' => $senbud,
			'sejindo' => $sejindo,
			'pjok' => $pjok,
			'mulok' => $mulok,
			'simdig' => $simdig,
			'kimia' => $kimia,
			'fisika' => $fisika,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'pkwu' => $pkwu,
			'rata_rata' => $rata_rata

		);

		$this->M_admin->siswa_edit_up_tekno($data_edit, $kode_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Edit data berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect('C_admin/siswa_tekno/' . $id_siswa);
	}

	public function siswa_pass_tekno($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_pass_tekno($id_siswa);

		$this->load->view('template/header-admin', $data);
		$this->load->view('admin/siswa_pass_tekno', $data);
		$this->load->view('template/footer-admin', $data);
	}

	public function siswa_pass_up_tekno()
	{
		$id_siswa = $this->input->post('id_siswa');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$kode_siswa = array('id_siswa' => $id_siswa);

		$data_edit = array(
			'password' => $password
		);

		$this->M_admin->siswa_pass_up_tekno($data_edit, $kode_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Password update berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
		redirect('C_admin/siswa_tekno/' . $id_siswa);
	}

	// tekno akhir



	// bismen awal
	public function siswa_bismen()
	{
		// $ses_id_umkm = $this->session->userdata('ses_id');
		$data['tampil'] = $this->M_admin->siswa_bismen();

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_bismen', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_tambah()
	{
		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_bismen', $data);
	}

	public function siswa_tambah_up()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nis_siswa = $this->input->post('nis_siswa');
		$nisn_siswa = $this->input->post('nisn_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nama_org_tua = $this->input->post('nama_org_tua');
		$program_keahlian = $this->input->post('program_keahlian');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$status_kelulusan = $this->input->post('status_kelulusan');
		$pai = $this->input->post('pai');
		$pkn = $this->input->post('pkn');
		$b_ind = $this->input->post('b_ind');
		$mtk = $this->input->post('mtk');
		$b_ing = $this->input->post('b_ing');
		$senbud = $this->input->post('senbud');
		$sejindo = $this->input->post('sejindo');
		$pjok = $this->input->post('pjok');
		$simdig = $this->input->post('simdig');
		$ipa = $this->input->post('ipa');
		$rata_rata = $this->input->post('rata_rata');

		$kode_siswa = array('id_siswa' => $id_siswa);

		$data_edit = array(
			'nama_siswa' => $nama_siswa,
			'nis_siswa' => $nis_siswa,
			'nisn_siswa' => $nisn_siswa,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'nama_org_tua' => $nama_org_tua,
			'program_keahlian' => $program_keahlian,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'status_kelulusan' => $status_kelulusan,
			'pai' => $pai,
			'pkn' => $pkn,
			'b_ind' => $b_ind,
			'mtk' => $mtk,
			'b_ing' => $b_ing,
			'senbud' => $senbud,
			'sejindo' => $sejindo,
			'pjok' => $pjok,
			'simdig' => $simdig,
			'ipa' => $ipa,
			'rata_rata' => $rata_rata

		);

		$this->M_admin->siswa_edit_up_bismen($data_edit, $kode_siswa);

		$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								<strong>Edit data berhasil</strong>

								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>');
		redirect('C_admin/siswa_bismen/' . $id_siswa);
	}


	public function siswa_bismen_tambah()
	{
		$data['tampil_komptensi'] = $this->M_admin->kompetensi_keahlian();
		$data['tampil_kelas'] = $this->M_admin->kelas();

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_bismen_tambah', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_bismen_tambah_up()
	{
		$nis_siswa = $this->input->post('nis_siswa');
		$nisn_siswa = $this->input->post('nisn_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tempat_tgl_lahir = $this->input->post('tempat_tgl_lahir');
		$nama_org_tua = $this->input->post('nama_org_tua');
		$nama_kelas = $this->input->post('nama_kelas');
		$program_keahlian = $this->input->post('program_keahlian');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$status_kelulusan = $this->input->post('status_kelulusan');
		$pai = $this->input->post('pai');
		$pkn = $this->input->post('pkn');
		$b_ind = $this->input->post('b_ind');
		$mtk = $this->input->post('mtk');
		$b_ing = $this->input->post('b_ing');
		$senbud = $this->input->post('senbud');
		$sejindo = $this->input->post('sejindo');
		$pjok = $this->input->post('pjok');
		$mulok = $this->input->post('mulok');
		$simdig = $this->input->post('simdig');
		$ipa = $this->input->post('ipa');
		$dasar_program_keahlian = $this->input->post('dasar_program_keahlian');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$pkwu = $this->input->post('pkwu');
		$rata_rata = $this->input->post('rata_rata');

		$data_tambah = array(
			'nama_siswa' => $nama_siswa,
			'nis_siswa' => $nis_siswa,
			'nisn_siswa' => $nisn_siswa,
			'tempat_tgl_lahir' => $tempat_tgl_lahir,
			'nama_org_tua' => $nama_org_tua,
			'nama_kelas' => $nama_kelas,
			'program_keahlian' => $program_keahlian,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'status_kelulusan' => $status_kelulusan,
			'pai' => $pai,
			'pkn' => $pkn,
			'b_ind' => $b_ind,
			'mtk' => $mtk,
			'b_ing' => $b_ing,
			'senbud' => $senbud,
			'sejindo' => $sejindo,
			'pjok' => $pjok,
			'mulok' => $mulok,
			'simdig' => $simdig,
			'ipa' => $ipa,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'dasar_program_keahlian' => $dasar_program_keahlian,
			'pkwu' => $pkwu,
			'rata_rata' => $rata_rata

		);

		$this->M_admin->siswa_bismen_tambah_up($data_tambah);

		$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								Tambah Data Berhasil
							</div>'
						);
		redirect('C_admin/siswa_bismen/');
	}

	public function siswa_hapus_bismen($id_siswa)
	{
		$id_siswa = array('id_siswa' => $id_siswa);

		$success = $this->M_admin->siswa_hapus_bismen($id_siswa);
		$this->session->set_flashdata('msg', '
	            <div class="alert alert-warning alert-dismissible fade show" role="alert">
	              <strong>Hapus Data Berhasil</strong>

	              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	              </button>
	            </div>');
		redirect('C_admin/siswa_bismen');
	}

	public function siswa_detail_bismen($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_detail_bismen($id_siswa);

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_detail_bismen', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_edit_bismen($id_siswa)
	{
		// $kode_masyarakat = array('id_masyarakat' => $id_masyarakat);
		$data['tampil'] = $this->M_admin->siswa_edit_bismen($id_siswa);
		$data['tampil_komptensi'] = $this->M_admin->kompetensi_keahlian();
		$data['tampil_kelas'] = $this->M_admin->kelas();

		$this->load->view('template/header-admin');
		$this->load->view('admin/siswa_edit_bismen', $data);
		$this->load->view('template/footer-admin');
	}

	public function siswa_print_bismen($id_siswa)
	{
		$data['tampil'] = $this->M_admin->print_bismen($id_siswa);
		$this->load->view('admin/print_bismen', $data);
	}

	public function siswa_edit_up_bismen()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nis_siswa = $this->input->post('nis_siswa');
		$nisn_siswa = $this->input->post('nisn_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tempat_tgl_lahir = $this->input->post('tempat_tgl_lahir');
		$nama_org_tua = $this->input->post('nama_org_tua');
		$program_keahlian = $this->input->post('program_keahlian');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$status_kelulusan = $this->input->post('status_kelulusan');
		$pai = $this->input->post('pai');
		$pkn = $this->input->post('pkn');
		$b_ind = $this->input->post('b_ind');
		$mtk = $this->input->post('mtk');
		$b_ing = $this->input->post('b_ing');
		$senbud = $this->input->post('senbud');
		$sejindo = $this->input->post('sejindo');
		$pjok = $this->input->post('pjok');
		$mulok = $this->input->post('mulok');
		$simdig = $this->input->post('simdig');
		$ipa = $this->input->post('ipa');
		$dasar_program_keahlian = $this->input->post('dasar_program_keahlian');
		$kompetensi_keahlian = $this->input->post('kompetensi_keahlian');
		$rata_rata = $this->input->post('rata_rata');

		$kode_siswa = array('id_siswa' => $id_siswa);

		$data_edit = array(
			'nama_siswa' => $nama_siswa,
			'nis_siswa' => $nis_siswa,
			'nisn_siswa' => $nisn_siswa,
			'tempat_tgl_lahir' => $tempat_tgl_lahir,
			'nama_org_tua' => $nama_org_tua,
			'program_keahlian' => $program_keahlian,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'status_kelulusan' => $status_kelulusan,
			'pai' => $pai,
			'pkn' => $pkn,
			'b_ind' => $b_ind,
			'mtk' => $mtk,
			'b_ing' => $b_ing,
			'senbud' => $senbud,
			'sejindo' => $sejindo,
			'pjok' => $pjok,
			'mulok' => $mulok,
			'simdig' => $simdig,
			'ipa' => $ipa,
			'kompetensi_keahlian' => $kompetensi_keahlian,
			'dasar_program_keahlian' => $dasar_program_keahlian,
			'rata_rata' => $rata_rata

		);

		$this->M_admin->siswa_edit_up_bismen($data_edit, $kode_siswa);

		$this->session->set_flashdata('msg', '
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								Edit Data Berhasil
							</div>'
						);
		redirect('C_admin/siswa_bismen/' . $id_siswa);
	}

	public function siswa_pass_bismen($id_siswa)
	{
		$data['tampil'] = $this->M_admin->siswa_pass_bismen($id_siswa);

		$this->load->view('template/header-admin', $data);
		$this->load->view('admin/siswa_pass_bismen', $data);
		$this->load->view('template/footer-admin', $data);
	}

	public function siswa_pass_up_bismen()
	{
		$id_siswa = $this->input->post('id_siswa');
		$pass = $this->input->post('password');
		$password = md5($pass);

		$kode_siswa = array('id_siswa' => $id_siswa);

		$data_edit = array(
			'password' => $password
		);

		$this->M_admin->siswa_pass_up_bismen($data_edit, $kode_siswa);

		$this->session->set_flashdata('msg', '
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								Edit Password Berhasil
							</div>');
		redirect('C_admin/siswa_bismen/' . $id_siswa);
	}

	// bismen

	// kompetensi keahlian awal
	public function kompetensi_keahlian()
	{
		$data['tampil'] = $this->M_admin->kompetensi_keahlian();

		$this->load->view('template/header-admin');
		$this->load->view('admin/kompetensi_keahlian', $data);
		$this->load->view('template/footer-admin');
	}

	public function kompetensi_keahlian_tambah()
	{
		$this->load->view('template/header-admin');
		$this->load->view('admin/kompetensi_keahlian_tambah');
		$this->load->view('template/footer-admin');
	}

	public function kompetensi_keahlian_tambah_up()
	{
		$nama_kompetensi_keahlian = $this->input->post('nama_kompetensi_keahlian');

		$data_tambah = array(
			'nama_kompetensi_keahlian' => $nama_kompetensi_keahlian,
		);

		$this->M_admin->kompetensi_keahlian_tambah_up($data_tambah);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-success alert-dismissible fade show" role="alert">
								Tambah Data Berhasil
							</div>');
		redirect('C_admin/kompetensi_keahlian/');
	}

	public function kompetensi_keahlian_hapus($id_kompetensi_keahlian)
	{
		$id_kompetensi_keahlian = array('id_kompetensi_keahlian' => $id_kompetensi_keahlian);

		$success = $this->M_admin->kompetensi_keahlian_hapus($id_kompetensi_keahlian);
		$this->session->set_flashdata('msg', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hapus Data Berhasil</strong>

              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
		redirect('C_admin/kompetensi_keahlian');
	}

	public function kompetensi_keahlian_edit($id_kompetensi_keahlian)
	{
		$data['tampil'] = $this->M_admin->kompetensi_keahlian_edit($id_kompetensi_keahlian);

		$this->load->view('template/header-admin');
		$this->load->view('admin/kompetensi_keahlian_edit', $data);
		$this->load->view('template/footer-admin');
	}

	public function kompetensi_keahlian_edit_up()
	{
		$id_kompetensi_keahlian = $this->input->post('id_kompetensi_keahlian');
		$nama_kompetensi_keahlian = $this->input->post('nama_kompetensi_keahlian');

		$id_kompetensi_keahlian = array('id_kompetensi_keahlian' => $id_kompetensi_keahlian);

		$data_edit = array(
			'nama_kompetensi_keahlian' => $nama_kompetensi_keahlian,
		);

		$this->M_admin->kompetensi_keahlian_edit_up($data_edit, $id_kompetensi_keahlian);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-success alert-dismissible fade show" role="alert">
								Edit Data Berhasil
							</div>');
		redirect('C_admin/kompetensi_keahlian/');
	}

	// kompetensi keahlian akhir


	// Kelas awal

	public function kelas()
	{
		$data['tampil'] = $this->M_admin->kelas();

		$this->load->view('template/header-admin');
		$this->load->view('admin/kelas', $data);
		$this->load->view('template/footer-admin');
	}

	public function kelas_tambah()
	{
		$this->load->view('template/header-admin');
		$this->load->view('admin/kelas_tambah');
		$this->load->view('template/footer-admin');
	}

	public function kelas_tambah_up()
	{
		$nama_kelas = $this->input->post('nama_kelas');

		$data_tambah = array(
			'nama_kelas' => $nama_kelas,
		);

		$this->M_admin->kelas_tambah_up($data_tambah);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-success alert-dismissible fade show" role="alert">
								Tambah Kelas Berhasil
							</div>');
		redirect('C_admin/kelas/');
	}

	public function kelas_hapus($id_kelas)
	{
		$id_kelas = array('id_kelas' => $id_kelas);

		$success = $this->M_admin->kelas_hapus($id_kelas);
		$this->session->set_flashdata('msg', '
            				<div class="alert alert-success alert-dismissible fade show" role="alert">
								Hapus Kelas Berhasil
							</div>');
		redirect('C_admin/kelas');
	}

	public function kelas_edit($id_kelas)
	{
		$data['tampil'] = $this->M_admin->kelas_edit($id_kelas);

		$this->load->view('template/header-admin');
		$this->load->view('admin/kelas_edit', $data);
		$this->load->view('template/footer-admin');
	}

	public function kelas_edit_up()
	{
		$id_kelas = $this->input->post('id_kelas');
		$nama_kelas = $this->input->post('nama_kelas');

		$id_kelas = array('id_kelasid_kelas' => $id_kelas);

		$data_edit = array(
			'nama_kelas' => $nama_kelas,
		);

		$this->M_admin->kelas_edit_up($data_edit, $id_kelas);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-success alert-dismissible fade show" role="alert">
								Edit Kelas Berhasil
							</div>');
		redirect('C_admin/kelas/');
	}


	// kelas akhir


}
