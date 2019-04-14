<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MLaporan2 extends CI_Model{

	function tampil_data(){
		$this->db->select('b.nomor_urut,b.nama_pengirim, b.nomor_surat_masuk, b.perihal_surat, b.tgl_diselenggarakan, b.tanggal_surat_masuk, b.dokumen_surat');
		//$this->db->from('pelaporan a');
		$this->db->from('agenda b');
		$this->db->where('b.nomor_urut = b.nomor_urut');
		return $this->db->get();
	}

	
	
}
?>