<?php

class M_daftar_ulang extends CI_Model{


  public function cetak_pakta_integritas($id_siswa_diterima)
  {
    $this->db->select('*');
    $this->db->from('tb_siswa_diterima');
    $this->db->where('id_siswa_diterima', $id_siswa_diterima);
    $query = $this->db->get()->result();
    return $query;
  }

  public function form_up($data_edit, $id_siswa_diterima)
  {
     $this->db->where('id_siswa_diterima', $id_siswa_diterima);
    $this->db->update('tb_siswa_diterima', $data_edit);
  }


}

 ?>
