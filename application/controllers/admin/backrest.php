<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class MBackrest extends CI_Controller{
  function __construct(){
    parent::__construct();
    if (!$this->session->userdata('isLogin') and (!$this->session->userdata('level')=='A')){
      redirect('admin/login');
    }
    $this->load->model('MBackrest');
  }

public function backrest()
    {
        $this->load->model('MBackrest');
        $data['backrest'] = $this->MBackrest->tampiltabel(); //AMBIL DATA TABEL-TABEL
        $this->load->view('backend/backrest/backrest',$data);
    }

public function backup()
    {

      $backrest = $this->input->post('backrest');
      $this->load->dbutil();
      $prefs = array(    
              'backrest'      => array($backrest),
                    'format'      => 'zip',            
                    'filename'    => 'my_db_backup.sql'
                  );
      $backup =& $this->dbutil->backup($prefs);
      $db_name = 'backup-on-'. $backrest . '-' . date("d-m-Y") .'.zip'; //NAMAFILENYA
      $save = 'pathtobkfolder/'.$db_name;
      $this->load->helper('file');
      write_file($save, $backup);
      $this->load->helper('download');
      force_download($db_name, $backup);
    }
public function restore()   
    {

        $this->load->helper('file');
        $this->load->model('MBackrest');
        $config['upload_path']="./assets/database/";
        $config['allowed_types']="jpg|png|gif|jpeg|bmp|sql|x-sql";
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if(!$this->upload->do_upload("datafile")){
         $error = array('error' => $this->upload->display_errors());
         echo "GAGAL UPLOAD";
         var_dump($error);
         exit();
        }

        $file = $this->upload->data();  //DIUPLOAD DULU KE DIREKTORI assets/database/
        $fotoupload=$file['file_name'];
                   
          $isi_file = file_get_contents('./assets/database/' . $fotoupload); //PANGGIL FILE YANG TERUPLOAD
          $string_query = rtrim( $isi_file, "\n;" );
          $array_query = explode(";", $string_query);   //JALANKAN QUERY MERESTORE KEDATABASE
              foreach($array_query as $query)
              {
                    $this->db->query($query);
              }

          $path_to_file = './assets/database/' . $fotoupload;
            if(unlink($path_to_file)) {   // HAPUS FILE YANG TERUPLOAD
                 redirect('home/setting');
            }
            else {
                 echo 'errors occured';
            }
       
    }
  }
  ?>