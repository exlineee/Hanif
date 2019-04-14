<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MLaporan extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	function tampil_data(){
		$this->db->select('b.nomor_urut,b.nama_pengirim, b.nomor_surat_masuk, b.perihal_surat, b.tgl_diselenggarakan, b.tanggal_surat_masuk, b.dokumen_surat');
		//$this->db->from('disposisi a');
		$this->db->from('agenda b');
		$this->db->where('b.nomor_urut = b.nomor_urut');
		return $this->db->get();
	}
function suratmasuk(){
        $query = $this->db->query("SELECT tanggal_surat_masuk,SUM(nomor_urut) AS Jumlah FROM agenda GROUP BY tanggal_surat_masuk");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

	
		public function displayagenda(){
		return $this->db->get('agenda')->result_array();
	}
	
	public function displayAgendaCari($thn){
		//$this->db->where('id_user', $mandor);
		$this->db->where('YEAR(tanggal_surat_masuk)', $thn);
		return $this->db->get('agenda')->result_array();
	}
	
		public function cariagenda(){
		$c = $this->input->get ('cari');
		$this->db->like('jumlahagenda');
		$query = $this->db->get ('agenda');
		return $query->result_array(); 
 }
	public function usermandor(){
		return $this->db->query('select * from login where level = "MANDOR"')->result_array();
		} 


	
	
}
?>