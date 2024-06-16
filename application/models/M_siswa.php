<?php

class M_siswa extends CI_Model{

  function profil($ses_id){
    $this->db->where('id_siswa', $ses_id);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }

  function timeline(){
    // $this->db->where('MOD(id_timeline ,2)');
    $hasil = $this->db->get('tb_timeline')->result();
    return $hasil;
  }

}

 ?>
