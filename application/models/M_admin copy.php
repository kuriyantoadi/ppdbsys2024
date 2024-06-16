<?php

class M_admin extends CI_Model{

  function dashboard($ses_id){
    $this->db->where('id_siswa', $ses_id);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }


//tekno awal
  function siswa_tekno(){
    $tampil = $this->db->get('tb_siswa_tekno')->result();
    return $tampil;
  }

  public function siswa_tekno_tambah_up($data_tambah)
  {
    $this->db->insert('tb_siswa_tekno', $data_tambah);
  }

  public function siswa_hapus_tekno($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa_tekno');
  }

  function siswa_detail_tekno($id_siswa){
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  public function siswa_edit_tekno($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  function siswa_edit_up_tekno($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_tekno',$data_edit);
  }

  public function siswa_print_tekno($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  public function siswa_pass_tekno($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  function siswa_pass_up_tekno($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_tekno',$data_edit);
  }
// tekno akhir


//bismen awal
  function siswa_bismen(){
    $tampil = $this->db->get('tb_siswa_bismen')->result();
    return $tampil;
  }

  public function siswa_bismen_tambah_up($data_tambah)
  {
    $this->db->insert('tb_siswa_bismen', $data_tambah);
  }

  public function siswa_hapus_bismen($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa_bismen');
  }

  function siswa_detail_bismen($id_siswa){
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  public function siswa_edit_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  function siswa_edit_up_bismen($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_bismen',$data_edit);
  }

  public function print_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  public function siswa_pass_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  function siswa_pass_up_bismen($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_bismen',$data_edit);
  }
// bismen akhir

// kompetensi keahlian awal

function kompetensi_keahlian(){
    $tampil = $this->db->get('tb_kompetensi_keahlian')->result();
    return $tampil;
  }

  public function kompetensi_keahlian_tambah_up($data_tambah)
  {
    $this->db->insert('tb_kompetensi_keahlian', $data_tambah);
  }


  public function kompetensi_keahlian_hapus($id_kompetensi_keahlian)
  {
    $this->db->where($id_kompetensi_keahlian);
    $this->db->delete('tb_kompetensi_keahlian');
  }

  public function kompetensi_keahlian_edit($id_kompetensi_keahlian)
  {
    $this->db->where('id_kompetensi_keahlian', $id_kompetensi_keahlian);
    $hasil = $this->db->get('tb_kompetensi_keahlian')->result();
    return $hasil;
  }

  function kompetensi_keahlian_edit_up($data_edit, $id_kompetensi_keahlian){
    $this->db->where($id_kompetensi_keahlian);
    $this->db->update('tb_kompetensi_keahlian',$data_edit);
  }

// kompetensi keahlian akhir

// kelas awal

function kelas(){
    $tampil = $this->db->get('tb_kelas')->result();
    return $tampil;
  }

  public function kelas_tambah_up($data_tambah)
  {
    $this->db->insert('tb_kelas', $data_tambah);
  }

  public function kelas_hapus($id_kelas)
  {
    $this->db->where($id_kelas);
    $this->db->delete('tb_kelas');
  }

  public function kelas_edit($id_kelas)
  {
    $this->db->where('id_kelas', $id_kompetensi_keahlian);
    $hasil = $this->db->get('tb_kelas')->result();
    return $hasil;
  }

  function kelas_edit_up($data_edit, $id_kelas){
    $this->db->where($id_kelas);
    $this->db->update('tb_kelas',$data_edit);
  }

// kelas akhir


}

 ?>
