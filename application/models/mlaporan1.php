<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MLaporan1 extends CI_Model{

	
   function suratmasuk()
 {
  
  $sql= $this->db->query('
  
  select
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=1)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Januari`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=2)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Februari`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=3)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Maret`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=4)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `April`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=5)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Mei`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=6)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Juni`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=7)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Juli`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=8)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Agustus`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=9)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `September`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=10)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Oktober`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=11)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `November`,
  ifnull((SELECT count(nomor_urut) FROM (agenda)WHERE((Month(tanggal_surat_masuk)=12)AND (YEAR(tanggal_surat_masuk)=2016))),0) AS `Desember`
 from agenda GROUP BY YEAR(tanggal_surat_masuk) 
  
  ');
  
  return $sql;
  
 } 
	
	
}
?>