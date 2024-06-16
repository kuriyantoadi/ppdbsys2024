<?php

class M_daftar extends CI_Model{

  public function siswa_daftar_up($data_tambah)
  {
    $this->db->insert('tb_siswa', $data_tambah);
  }

  public function kompetensi_keahlian()
  {
    $tampil = $this->db->get('tb_kompetensi_keahlian')->result();
    return $tampil;
  }


}

 ?>
