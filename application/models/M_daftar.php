<?php

class M_daftar extends CI_Model{

  public function siswa_daftar_up($data_tambah)
  {
    $this->db->insert('tb_pendaftar', $data_tambah);
  }

  public function asal_sekolah()
  {
    $this->db->order_by('asal_sekolah', 'ASC');
    $tampil = $this->db->get('tb_asal_sekolah')->result();
    return $tampil;
  }

  public function kompetensi_keahlian_1()
  {
    $this->db->order_by('nama_kompetensi_1', 'ASC');
    $tampil = $this->db->get('tb_kompetensi_1')->result();
    return $tampil;
  }

  public function kompetensi_keahlian_2()
  {
    $this->db->order_by('nama_kompetensi_2', 'ASC');
    $tampil = $this->db->get('tb_kompetensi_2')->result();
    return $tampil;
  }

  public function sekolah_tambah_up($data_tambah)
  {
    $this->db->insert('tb_asal_sekolah', $data_tambah);
  }



}

 ?>
