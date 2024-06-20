<?php

class M_pendaftar extends CI_Model{

  // tambahan atas

  public function siswa_daftar_up($data_tambah)
  {
    $this->db->insert('tb_siswa', $data_tambah);
  }

  public function tambah_asal_sekolah($data_tambah)
  {
    $this->db->order_by('asal_sekolah', 'ASC');
    $this->db->insert('tb_asal_sekolah', $data_tambah);
  }

  Public function asal_sekolah_tampil(){
    $tampil = $this->db->get('tb_asal_sekolah')->result();
    return $tampil;
  }

  // tambahan bawah

  function ver_semua()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    // $this->db->join('tb_kompetensi_2', 'tb_pendaftar.id_kompetensi_2 = tb_kompetensi_2.id_kompetensi_2');
    // $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }
  
  Public function tampil_kompetensi(){
    $tampil = $this->db->get('tb_kompetensi_1')->result();
    return $tampil;
  }


  // awal data siswa
  public function siswa_tampil()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    // $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }

  
  // akhir data siswa

  // Awal ver
  public function ver_tjkt()
  {
     $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_pplg()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'PPLG');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_tm()
  {
     $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TM');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_to()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TO');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_akl()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'AKL');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_mplb()
  {
     $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'MPLB');
    $query = $this->db->get()->result();
    return $query;
  }

  // akhir ver


  // Awal adm
  public function adm_tjkt()
  {
     $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }

  public function adm_pplg()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'PPLG');
    $query = $this->db->get()->result();
    return $query;
  }

  public function adm_tm()
  {
     $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TM');
    $query = $this->db->get()->result();
    return $query;
  }

  public function adm_to()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TO');
    $query = $this->db->get()->result();
    return $query;
  }

  public function adm_akl()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'AKL');
    $query = $this->db->get()->result();
    return $query;
  }

  public function adm_mplb()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'MPLB');
    $query = $this->db->get()->result();
    return $query;
  }

  // akhir ver

  function tampil_kompetensi_1(){
    $tampil = $this->db->get('tb_kompetensi_1')->result();
    return $tampil;
  }

  function tampil_kompetensi_2(){
    $tampil = $this->db->get('tb_kompetensi_2')->result();
    return $tampil;
  }

  function upload_pengajuan_up($data_tambah){
    $this->db->insert('tb_pendaftar', $data_tambah);
  }

  function komptensi()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }

  function cek_nisn($nisn_siswa){
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->where('nisn_siswa', $nisn_siswa);
    $query = $this->db->get()->result();
    return $query;
  }

  public function cek_val_nisn($nisn_siswa) {
    $this->db->where('nisn_siswa', $nisn_siswa);
    $query = $this->db->get('tb_pendaftar');
    return $query->num_rows() > 0;
  }

  function cek_no_pendaftaran($no_pendaftaran){
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->where('no_pendaftaran', $no_pendaftaran);
    $query = $this->db->get()->result();
    return $query;
  }

 function ver_kompetensi($ses_kompetensi)
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', $ses_kompetensi);
    $query = $this->db->get()->result();
    return $query;
  }

  // daftar ulang awal

  public function du_semua()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('status_diterima', 'DITERIMA');
    $query = $this->db->get()->result();
    return $query;
  }

  public function du_akl()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('kompetensi_keahlian', 'AKL');
    $this->db->where('status_diterima', 'DITERIMA');
    $query = $this->db->get()->result();
    return $query;
  }

   public function du_otkp()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('kompetensi_keahlian', 'OTKP');
    $this->db->where('status_diterima', 'DITERIMA');
    $query = $this->db->get()->result();
    return $query;
  }

   public function du_tjkt()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('kompetensi_keahlian', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }

   public function du_pplg()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('kompetensi_keahlian', 'PPLG');
    $query = $this->db->get()->result();
    return $query;
  }

   public function du_mplb()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('kompetensi_keahlian', 'MPLB');
    $query = $this->db->get()->result();
    return $query;
  }

   public function du_to()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('kompetensi_keahlian', 'TO');
    $query = $this->db->get()->result();
    return $query;
  }

   public function du_tm()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('kompetensi_keahlian', 'TM');
    $query = $this->db->get()->result();
    return $query;
  }

  // daftar ulang akhir
  

}

 ?>
