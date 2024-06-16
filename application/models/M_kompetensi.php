<?php

class M_kompetensi extends CI_Model{

  function tampil_kompetensi(){
    $tampil = $this->db->get('tb_kompetensi')->result();
    return $tampil;
  }

// kelas akhir


}

 ?>
