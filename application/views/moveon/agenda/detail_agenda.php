<?php $this->load->view('frame/header_view')?>


       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Detail Data Agenda</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
                </div>
            <?php elseif($this->session->flashdata('error')):?>
                <div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
                </div>
            <?php endif;?>

          <div class="row">
                <div class="col-lg-12">      
                    <table class="table table-striped table-bordered table-hover" id="dataTables-user-list">
                        <thead>
              <tr>
                  <td>No</td><td><?php echo $detail_agenda->nomor_urut?></td>
                </tr>
                <tr>
                  <td>Tanggal Surat Masuk</td><td><?php echo $detail_agenda->tanggal_surat_masuk?></td>
                </tr>
                <tr>
                  <td>Nomor Surat Masuk</td><td><?php echo $detail_agenda->nomor_surat_masuk?></td>
                </tr>
                <tr>
                  <td>Nama Pengirim</td><td><?php echo $detail_agenda->nama_pengirim?></td>
                </tr>
                <tr>
                  <td>Pekerjaan Pengirim</td><td><?php echo $detail_agenda->pekerjaan_pengirim?></td>
                </tr>
                <tr>
                  <td>Alamat Pengirim</td><td><?php echo $detail_agenda->alamat_pengirim?></td>
                </tr>
                <tr>
                  <td>Perihal Surat</td><td><?php echo $detail_agenda->perihal_surat?></td>
                </tr>
                <tr>
                  <td>Tanggal Diselenggarakan</td><td><?php echo $detail_agenda->tgl_diselenggarakan?></td>
                </tr>
                <tr>
                  <td>Waktu</td><td><?php echo $detail_agenda->waktu?></td>
                </tr>
                <tr>
                  <td>Tempat</td><td><?php echo $detail_agenda->tempat?></td>
                </tr>
                <tr>
                  <td>Tujuan Surat</td><td><?php echo $detail_agenda->tujuan_surat?><br/><?php echo $detail_agenda->tujuan_surat1?><br/><?php echo $detail_agenda->tujuan_surat2?><br/><?php echo $detail_agenda->tujuan_surat3?></td>
                </tr>
                <tr>
                  <td>Keterangan Surat</td><td><?php echo $detail_agenda->keterangan_surat?></td>
                </tr>
                <tr>
                  <td>Dokumen Surat</td><td><a href="<?php echo base_url();?>letter/<?php echo $detail_agenda->dokumen_surat?>"><?php echo $detail_agenda->dokumen_surat?></a></td>
                </tr>
                <tr>
                  <td>Aksi</td>
                    <td class="center">
                        <?php echo anchor('admin/agenda/edit_agenda/'.$detail_agenda->nomor_urut,'<div class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></div>'); ?> &nbsp; | &nbsp; 
                        <a href="<?php echo site_url()?>/admin/agenda/hapus_agenda/<?php echo $detail_agenda->nomor_urut.'/'.$detail_agenda->nomor_urut?>" onClick="return confirm('anda yakin?')"><div class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></div></a>
                    </td> 
                </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>

<?php $this->load->view('frame/footer_view')?>